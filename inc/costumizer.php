<?php    

function dstheme_costumizer($wp_costumize){
// 1 Copyright Section
$wp_costumize->add_section(
    'sec_copyright'
    array(
        'title' -> 'Copyright Settings',
        'description' -> 'Copyright Settings'
    )
    );
        $wp_costumize->add_settings(
            'set_copyright',
            array(
                'type' => 'theme_mod',
                'default' => 'Copyright X - All Right Reserved',
                'senitize_callback'=> 'sanitize_text_field'
            )
            );
            $wp_costumize->add_settings(
                'set_copyright',
                array(
                    'label' => 'Copyright Information',
                    'description' => 'Please, type your copyright Information',
                    'section' => 'sec_copyright',
                    'type' => 'text'
                )
                );
}

add_action('costumize_register','dstheme_costumizer');