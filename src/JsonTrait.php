<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use DateTimeInterface;
use JsonException;
use JsonSerializable;
use stdClass;
use Stringable;

/**
 * Provides JSON encoding.
 * @internal
 */
trait JsonTrait
{
    /**
     * @throws JsonException
     */
    protected function jsonEncode(array $data): string
    {
        return $this->noConst(str_replace(
            ['\\\\', '\"', '"' . JsExpression::JSE, JsExpression::JSE . '"'],
            ['\\', '"', '', ''],
            json_encode(
                $this->processArray($data),
                JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
            )
        ));
    }

    /**
     * Pre-processes the array before sending it to `json_encode()`.
     *
     * @param array $data The array to be processed.
     * @return array The processed array.
     */
    private function processArray(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = $this->processArray($value);
            } elseif (is_object($value)) {
                $data[$key] = $this->processObject($value);
            }
        }

        return $data;
    }

    /**
     * Pre-processes the object before sending it to `json_encode()`.
     *
     * @param object $data The object to be processed.
     *
     * @return mixed The processed data.
     */
    private function processObject(object $data): mixed
    {
        if ($data instanceof JsonSerializable) {
            $data = $data->jsonSerialize();

            if (is_array($data)) {
                return $this->processArray($data);
            }

            return $data;
        }

        if ($data instanceof Stringable) {
            return (string) $data;
        }

        /** @psalm-suppress UndefinedClass Required for PHP 8.0 and earlier */
        if ($data instanceof DateTimeInterface) {
            return $data;
        }

        return $this->processArray(get_object_vars($data)) ?: new stdClass();
    }
}