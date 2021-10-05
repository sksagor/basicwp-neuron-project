<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'eTechwing-theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'neoron Theme <small>by eTechwing</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();



// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'global',
  'title'       => 'General Options',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'logos',
      'type'    => 'gallery',
      'title'   => 'Company Logos',
      'desc'   => 'Upload company loge here.',
    ),

  ), // end: fields
);

$options[]      = array(
  'name'        => 'header',
  'title'       => 'Header Options',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'enable_header_top',
      'type'    => 'switcher',
      'title'   => 'Enable Header Top !',
      'desc'   => 'If you want to enable Header Top,Please select Yes.',
      'default' => true,
    ),
    array(
      'id'      => 'header_links',
      'type'    => 'group',
      'title'   => 'Header left links',
      'button_title' => 'Add New',
      'accordion_title' => 'Add New Links',
      'fields'    => array(
        array(
          'id'    => 'linktext',
          'type'  => 'text',
          'title' => 'Link Text',
        ),
        array(
          'id'    => 'icon',
          'type'  => 'icon',
          'title' => 'Icon',
        ),
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'Link',
        ),
        array(
          'id'    => 'link_target',
          'type'  => 'select',
          'title' => 'Link target',
          'options' =>
          array(
            '_self'    => 'Open in same tab',
            '_blank'    => 'Open in new tab',
          )
        )
      ),
      'dependency' => array('enable_header_top', '==', 'true'),
    ),


  ), // end: fields
);

$options[]      = array(
  'name'        => 'socials',
  'title'       => 'Socials Options',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'socials',
      'type'    => 'group',
      'title'   => 'Socials links',
      'button_title' => 'Add New',
      'accordion_title' => 'Add New link',
      'fields'    => array(
        array(
          'id'    => 'icon',
          'type'  => 'icon',
          'title' => 'Icon',
        ),
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'Link',
        ),
        array(
          'id'    => 'link_target',
          'type'  => 'select',
          'title' => 'Link target',
          'default' => '_blank',
          'options' =>
          array(
            '_self'    => 'Open in same tab',
            '_blank'    => 'Open in new tab',
          )
        )
      )
    ),

  ), // end: fields
);

$options[]      = array(
  'name'        => 'homepage',
  'title'       => 'Homepage',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'enable_homepage_promo',
      'type'    => 'switcher',
      'title'   => 'Enable Home Promo Area',
      'default' => true,
      'desc'   => 'If you want to enable promo area,Please select Yes.',

    ),
    array(
      'id'      => 'promo_title',
      'type'    => 'text',
      'title'   => 'Promo Area Title',
      'default' => 'Welcome to the Neuron Finance',
      'desc'   => 'Type Promo Area Title',
      'dependency' => array('enable_homepage_promo', '==', 'true'),
    ),
    array(
      'id'      => 'promo_content',
      'type'    => 'textarea',
      'title'   => 'Promo area content',
      'default'   => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      'desc'   => 'Type Promo area content',
      'dependency' => array('enable_homepage_promo', '==', 'true'),
    ),
    array(
      'id'      => 'enable_homepage_content',
      'type'    => 'switcher',
      'title'   => 'Enable Homepage Content Area',
      'default' => true,
      'desc'   => 'If you want to enable Homepage content area,Please select Yes.',

    ),
    array(
      'id'      => 'home_content_title',
      'type'    => 'text',
      'title'   => 'Home Content Title',
      'default' => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'dependency' => array('enable_homepage_content', '==', 'true'),
    ),
    array(
      'id'      => 'home_content_text',
      'type'    => 'textarea',
      'title'   => 'Home area content',
      'dependency' => array('enable_homepage_content', '==', 'true'),
    ),
    array(
      'id'      => 'home_content_img',
      'type'    => 'image',
      'title'   => 'Home area content Image',
      'dependency' => array('enable_homepage_content', '==', 'true'),
    ),

  ), // end: fields
);

$options[]      = array(
  'name'        => 'about',
  'title'       => 'About page',
  'icon'        => 'fa fa-address-card',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'enable_about_title',
      'type'    => 'switcher',
      'title'   => 'Enable About Content Ttitle',
      'default' => true,
      'desc'   => 'If you want to enable About content area,Please select Yes.',

    ),
    array(
      'id'      => 'about_title',
      'type'    => 'text',
      'title'   => 'About Area Title',
      'default' => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'dependency' => array('enable_about_title', '==', 'true'),

    ),
    array(
      'id'      => 'enable_about_content',
      'type'    => 'switcher',
      'title'   => 'Enable About Content Area',
      'default' => true,
      'desc'   => 'If you want to enable About content area,Please select Yes.',
    ),
    array(
      'id'      => 'about_content',
      'type'    => 'textarea',
      'title'   => 'About Area content',
      'default' => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'dependency' => array('enable_about_title', '==', 'true'),
    ),
    array(
      'id'      => 'about_content_img',
      'type'    => 'image',
      'title'   => 'About area content Image',
      'dependency' => array('enable_about_content', '==', 'true'),
    ),


  ), // end: fields
);

$options[]      = array(
  'name'        => 'aboutfaq',
  'title'       => 'About faq',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'faqs',
      'type'    => 'group',
      'title'   => 'FAQs',
      'button_title' => 'Add New',
      'accordion_title' => 'Add New FAQ',
      'fields'    => array(
        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'FAQ Title',
        ),
        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'FAQ Content',
        )
      )
    ),
  ), // end: fields
);

$options[]      = array(
  'name'        => 'service',
  'title'       => 'Services page',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'service_title',
      'type'    => 'text',
      'title'   => 'Service Area Title',
      'desc'   => 'Type Service Area Title',
    ),

  ), // end: fields
);

CSFramework::instance($settings, $options);
