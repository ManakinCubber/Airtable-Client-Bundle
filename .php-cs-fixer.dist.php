<?php
declare(strict_types=1);

$header = '';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['.github', 'docs', 'var', 'vendor'])
;

return (new PhpCsFixer\Config)
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        '@PhpCsFixer' => true,
        '@Symfony' => true,
        '@DoctrineAnnotation' => true,
        '@PHP74Migration' => true,
        'strict_param' => true,
        'strict_comparison' => true,
        'array_syntax' => ['syntax' => 'short'],
        'array_indentation' => true,
        'ordered_imports' => true,
        'protected_to_private' => true,
        'declare_strict_types' => true,
        'native_function_invocation' => [
            'include' => ['@compiler_optimized'],
            'scope' => 'namespaced',
            'strict' => true,
        ],
        'mb_str_functions' => true,
        'linebreak_after_opening_tag' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'compact_nullable_typehint' => true,
        'no_superfluous_elseif' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_order' => true,
        'pow_to_exponentiation' => true,
        'simplified_null_return' => true,
        'header_comment' => [
            'header' => $header,
        ],
        'align_multiline_comment' => [
            'comment_type' => 'all_multiline',
        ],
        'php_unit_test_annotation' => [
            'style' => 'annotation',
        ],
        'php_unit_test_case_static_method_calls' => true,
        'method_chaining_indentation' => false,
        'php_unit_expectation' => true,
        'php_unit_test_class_requires_covers' => false,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
    ])
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setFinder($finder)
    ;
