<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Untitled Field Group', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'fields'  => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Text', 'online-generator' ),
                'id'   => $prefix . 'text_a4zy10igu5h',
            ],
            [
                'type' => 'fieldset_text',
                'name' => esc_html__( 'Fieldset Text', 'online-generator' ),
                'id'   => $prefix . 'fieldset_text_w67o0e68v5',
            ],
            [
                'type' => 'slider',
                'name' => esc_html__( 'Slider', 'online-generator' ),
                'id'   => $prefix . 'slider_8r6wu857m8y',
            ],
        ],
    ];

    return $meta_boxes;
}