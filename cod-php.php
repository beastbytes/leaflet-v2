<?php

use BeastBytes\CodPhp\Config;
use BeastBytes\CodPhp\Error\ErrorLevel;
use BeastBytes\CodPhp\InheritanceLevel;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * CodPhp Configuration.
 *
 * Change `null` values to override default values. (`null` values can be deleted)
 *
 * Values here are overridden by command line values.
 *
 * Value precedence - highest to lowest - is: command line, configuration file, default
 *
 * @psalm-import-type config from Config
 *
 * @var config $config
 */
$config = [
    'baseUrl' => 'https://github.com/beastbytes/leaflet-v2/blob/master/src', // Base URL for source code links. Default - no source links generated
    'errorLevel' => ErrorLevel::None, // Minimum error reporting level
    'exclude' => null, // Directories to ignore. Default ['./tests/**', './vendor/**']
    'inheritanceLevel' => InheritanceLevel::Namespace, // Level of Inheritance to show. Default InheritanceLevel::All
    'language' => null, // PHP Manual language for type links. Default Language::English
    'match' => null, // File patterns to match. Default ['**.php']
    'namespace' => 'BeastBytes\\Leaflet', // Namespace of source files
    'outputDir' => './docs/src/api', // Output path. Default './docs/api'
    'templateDir' => null, // Directory containing templates. Default './Templates' relative to the Writer
    'templateRenderer' => null, // Template renderer FQCN. Default: 'BeastBytes\\CodPhp\\Writer\\PhpTemplateRenderer'
    'verbosity' => OutputInterface::VERBOSITY_VERBOSE, // Verbosity. Default: OutputInterface::VERBOSITY_NORMAL
    'writer' => null, // Writer FQCN. Default: 'BeastBytes\\CodPhp\\Writer\\Writer'
];

return $config;