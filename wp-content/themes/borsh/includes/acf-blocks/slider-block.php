<?php
/**
 * ACF Fields for Slider Block
 */

add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_68739a8504b97',
        'title' => 'Block: Slider',
        'fields' => array(
            array(
                'key' => 'field_slider_template',
                'label' => 'Slider Template',
                'name' => 'slider_template',
                'type' => 'select',
                'instructions' => 'Select the template for this slider',
                'required' => 1,
                'choices' => array(
                    'speakers' => 'Speakers',
                    'activities' => 'Activities',
                ),
                'default_value' => 'speakers',
                'return_format' => 'value',
                'multiple' => 0,
                'allow_null' => 0,
            ),
            array(
                'key' => 'field_slider_title',
                'label' => 'Slider Title',
                'name' => 'slider_title',
                'type' => 'text',
                'instructions' => 'Enter the title for the slider section',
                'required' => 0,
            ),
            array(
                'key' => 'field_slider_slides',
                'label' => 'Slides',
                'name' => 'slider_slides',
                'type' => 'repeater',
                'instructions' => 'Add slides to the slider',
                'required' => 0,
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Add Slide',
                'sub_fields' => array(
                    array(
                        'key' => 'field_slide_image',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => 'Upload an image for this slide',
                        'required' => 0,
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_slide_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => 'Enter a title for this slide',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_slide_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => 'Enter a description for this slide',
                        'required' => 0,
                        'rows' => 4,
                    ),
                    array(
                        'key' => 'field_slide_date',
                        'label' => 'Date',
                        'name' => 'date',
                        'type' => 'text',
                        'instructions' => 'Enter a date for this activity (only used in Activities template)',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_slider_template',
                                    'operator' => '==',
                                    'value' => 'activities',
                                ),
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_slide_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'instructions' => 'Add a link for this slide',
                        'required' => 0,
                        'return_format' => 'array',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/slider',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
});