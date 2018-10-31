<?php

return PhpCsFixer\Config::create()
->setRules([
        '@PSR2' => true,
        'braces' => [
            'allow_single_line_closure' => true,
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'include' => true,
        'cast_spaces' => [
            'space' => 'single'
        ],
        'concat_space' => [
            'spacing' => 'one',
        ],
        'ordered_imports' => [
            'sortAlgorithm' => 'length',
        ],
        'single_quote' => true,
        'lowercase_cast' => true,
        'no_empty_phpdoc' => true,
        'no_empty_comment' => true,
        'array_indentation' => true,
        'increment_style' => 'post',
        'short_scalar_cast' => true,
        'method_separation' => true,
        'no_mixed_echo_print' => [
            'use' => 'echo',
        ],
        'trim_array_spaces' => true,
        'no_unused_imports' => true,
        'binary_operator_spaces' => [
            'align_equals' => false,
            'align_double_arrow' => false,
        ],
        'no_empty_statement' => true,
        'unary_operator_spaces' => true,
        'hash_to_slash_comment' => true,
        'standardize_not_equals' => true,
        'native_function_casing' => true,
        'ternary_operator_spaces' => true,
        'declare_equal_normalize' => true,
        'function_typehint_space' => true,
        'no_spaces_around_offset' => true,
        'no_leading_import_slash' => true,
        'blank_line_before_return' => true,
        'combine_consecutive_unsets' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_extra_consecutive_blank_lines' => [
            'curly_brace_block',
            'extra',
            'parenthesis_brace_block',
            'square_brace_block',
            'throw',
            'use',
        ],
        'no_whitespace_in_blank_line' => true,
        'blank_line_after_opening_tag' => true,
        'no_trailing_comma_in_list_call' => true,
        'whitespace_after_comma_in_array' => true,
        'no_leading_namespace_whitespace' => true,
        'trailing_comma_in_multiline_array' => true,
        'not_operator_with_successor_space' => true,
        'object_operator_without_whitespace' => true,
        'single_blank_line_before_namespace' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
    ])
    ->setLineEnding("\n");
