# JsExpression

Represents an object or string that is to be rendered as a JavaScript expression.

<table>
    <tbody>
        <tr>
            <th style="text-align:left">Type</th>
            <td>
                <a href="https://www.php.net/manual/en/language.oop5.final.php#example-2" target="_blank">
                    <code>Final Class</code>
                </a>
            </td>
        </tr>
        <tr>
            <th style="text-align:left">Namespace</th>
            <td><code>BeastBytes\Leaflet</code></td>
        </tr>
        <tr>
            <th style="text-align:left">Inheritance</th>
            <td>
                <ol style="list-style:none;padding-left:0;">
                    <li><a href="#jsexpression"><code>BeastBytes\Leaflet\JsExpression</code></a></li>
                </ol>
            </td>
        </tr>
        <tr>
            <th style="text-align:left">Implements</th>
            <td>
                <ol style="list-style:none;padding-left:0;">
                    <li>
                        <a href="https://www.php.net/manual/en/class.json-serializable.php" target="_blank">
                            <code>JsonSerializable</code>
                        </a>
                    </li>
                </ol>
            </td>
        </tr>
    </tbody>
</table>

## Overview

`JsExpression` is a data object that wraps the string representation of Leaflet objects and strings
to ensure they are treated as JavaScript expressions during JSON Serialisation.

>Note
>JsExpression is for use by plugin developers.

## Methods

### `__construct()`

```php
public function __construct(private object|string $expression)
```

| Parameter     | Type             | Description                                                    |
|---------------|------------------|----------------------------------------------------------------|
| `$expression` | `object\|string` | The object or string to be treated as a JavaScript expression. |

#### Example
```php
use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\Raster\CRS;

$crs = new JsExpression(CRS::EPSG3857);
```