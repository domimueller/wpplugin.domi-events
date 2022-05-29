<?php

    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_617ee8b758a16',
            'title' => 'Felder für Veranstaltungen',
            'fields' => array(
                array(
                    'key' => 'field_617ee8c429358',
                    'label' => 'Ort der Veranstaltung',
                    'name' => 'events_location',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_617ee8f1f5e8a',
                    'label' => 'Startdatum',
                    'name' => 'events_startdate',
                    'type' => 'date_picker',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'Ymd',
                    'return_format' => 'Ymd',
                    'first_day' => 1,
                ),
                array(
                    'key' => 'field_617ee999f4213',
                    'label' => 'Enddatum',
                    'name' => 'events_enddate',
                    'type' => 'date_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'Ymd',
                    'return_format' => 'Ymd',
                    'first_day' => 1,
                ),
                array(
                    'key' => 'field_617ee9b06cd50',
                    'label' => 'Startzeit',
                    'name' => 'events_starttime',
                    'type' => 'time_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'H:i',
                    'return_format' => 'H:i',
                ),
                array(
                    'key' => 'field_617ee9d197928',
                    'label' => 'Endzeit',
                    'name' => 'events_endtime',
                    'type' => 'time_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'H:i',
                    'return_format' => 'H:i',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'domi_events_cpt',
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
        ));

    endif; 
?> 