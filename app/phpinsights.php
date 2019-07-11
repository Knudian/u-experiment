<?php declare(strict_types = 1);

use NunoMaduro\PhpInsights\Domain\Sniffs\ForbiddenSetterSniff;
use ObjectCalisthenics\Sniffs\Metrics\MethodPerClassLimitSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;
use SlevomatCodingStandard\Sniffs\Classes\SuperfluousExceptionNamingSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\TypeHintDeclarationSniff;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Preset
    |--------------------------------------------------------------------------
    |
    | This option controls the default preset that will be used by PHP Insights
    | to make your code reliable, simple, and clean. However, you can always
    | adjust the `Metrics` and `Insights` below in this configuration file.
    |
    | Supported: "default", "laravel", "symfony", "magento2", "drupal"
    |
    */

    'preset' => 'symfony',

    /*
    |--------------------------------------------------------------------------
    | Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may adjust all the various `Insights` that will be used by PHP
    | Insights. You can either add, remove or configure `Insights`. Keep in
    | mind, that all added `Insights` must belong to a specific `Metric`.
    |
    */

    'exclude' => [
        'var',
        'bin',
        'config',
        'templates',
        'translations',
        'vendor',
        'public',
        'src/Migrations',
        '*Repository.php',
        'src/Kernel.php',
    ],

    'add' => [
    ],

    'remove' => [
        ForbiddenSetterSniff::class,
        UnusedParameterSniff::class,
        SuperfluousExceptionNamingSniff::class,
    ],

    'config' => [
        LineLengthSniff::class => [
            'lineLimit' => 120,
        ],
        MethodPerClassLimitSniff::class => [
            'maxCount' => 100,
        ],
        TypeHintDeclarationSniff::class => [
            'allAnnotationsAreUseful' => true,
        ],
        UnusedUsesSniff::class => [
            'searchAnnotations' => true,
        ],
    ],

];
