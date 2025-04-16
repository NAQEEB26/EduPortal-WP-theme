<?php
function eduportal_customize_register($wp_customize) {
    // Site Identity Extensions
    $wp_customize->get_setting('custom_logo')->transport = 'refresh';
    
    // About Section
    $wp_customize->add_section('eduportal_about', array(
        'title'    => __('About Section', 'eduportal'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('about_text', array(
        'default'   => 'We are the best world Information Technology Company. Providing the highest quality.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('about_text_control', array(
        'label'    => __('About Text', 'eduportal'),
        'section'  => 'eduportal_about',
        'settings' => 'about_text',
        'type'     => 'textarea',
    ));

    // Contact Section
    $wp_customize->add_section('eduportal_contact', array(
        'title'    => __('Contact Info', 'eduportal'),
        'priority' => 35,
    ));

    // Address
    $wp_customize->add_setting('contact_address', array(
        'default'   => 'Office No.2, Second Floor Asad Plaza Gamtala Chok Shakargarh',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_address_control', array(
        'label'    => __('Address', 'eduportal'),
        'section'  => 'eduportal_contact',
        'settings' => 'contact_address',
        'type'     => 'textarea',
    ));

    // Phone
    $wp_customize->add_setting('contact_phone', array(
        'default'   => '+92 309 1920336',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_phone_control', array(
        'label'    => __('Phone Number', 'eduportal'),
        'section'  => 'eduportal_contact',
        'settings' => 'contact_phone',
        'type'     => 'text',
    ));

    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'   => 'info@eduportal.pk',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_email_control', array(
        'label'    => __('Email Address', 'eduportal'),
        'section'  => 'eduportal_contact',
        'settings' => 'contact_email',
        'type'     => 'email',
    ));
}
add_action('customize_register', 'eduportal_customize_register');