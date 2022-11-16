<?php

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__.'/bin',
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->notName('*Icon.php');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP71Migration' => true,
        '@PHP73Migration' => true,
        '@PhpCsFixer:risky' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'declare_strict_types' => true,
        'doctrine_annotation_indentation' => true,
        'echo_tag_syntax' => ['format' => 'long'],
        'fopen_flags' => ['b_mode' => true],
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'list_syntax' => ['syntax' => 'short'],
        'no_null_property_initialization' => true,
        'ordered_imports' => [
            'imports_order' => ['class', 'const', 'function'],
        ],
        'phpdoc_tag_casing' => true,
        'phpdoc_to_comment' => ['ignored_tags' => ['var']],
        'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
        'php_unit_strict' => false,
        'yoda_style' => false,
        'static_lambda' => true,
    ])
    ->setFinder($finder);
