                        <?php

                        /**
                         * Enqueue scripts and styles.
                         */

                        function neuron_theme_files()
                        {

                            wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0', 'all');
                            wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
                            wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
                            wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.0', 'all');
                            wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
                            //wp_enqueue_style('layout', get_template_directory_uri() . '/assets/layout/styles/layout.css', array(), '1.0', 'all');
                            wp_enqueue_style('style', get_stylesheet_uri());


                            wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('bootnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
                            wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0', true);
                            // wp_enqueue_script('ajaxchimp',get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'), '1.0', true );
                            // wp_enqueue_script('ajaxchimp-config',get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'), '1.0', true );
                            //    wp_enqueue_script('jquery-migrate', '/https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js', array('jquery'), '3.3.2', true );
                            wp_enqueue_script('neuron-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);


                            // Threaded comment reply styles.
                            if (is_singular() && comments_open() && get_option('thread_comments')) {
                                wp_enqueue_script('comment-reply');
                            }
                        }

                        add_action('wp_enqueue_scripts', 'neuron_theme_files');

                        function neuron_theme_supports()
                        {

                            //loading0 theme text domain 
                            load_theme_textdomain('neuron-etechwing', get_template_directory() . '/languages');

                            // Add default posts and comments RSS feed links to head.
                            add_theme_support('automatic-feed-links');

                            // Adding support for automated title tag
                            add_theme_support('title-tag');
                            // Enabling post-thumbnails support
                            add_theme_support('post-thumbnails');
                            // Enbling blog image size
                            add_image_size('neuron-blog-thumb', 740, 520, true);
                            // This theme uses wp_nav_menu() in one location.
                            register_nav_menus(
                                array(
                                    'menu-1' => esc_html__('Primary', 'neuron-etechwing'),
                                    'footer' => esc_html__('Footer', 'neuron-etechwing'),
                                )
                            );

                            // Switch default core markup for search form, comment form, and comment to output valid HTML5.
                            add_theme_support(
                                'html5',
                                array(
                                    'search-form',
                                    'comment-form',
                                    'comment-list',
                                    'gallery',
                                    'caption',
                                    'style',
                                    'script',
                                )
                            );

                            // Add theme support for selective refresh for widgets.
                            add_theme_support('customize-selective-refresh-widgets');

                            //Add support for core custom logo.
                            add_theme_support(
                                'custom-logo',
                                array(
                                    'height'      => 250,
                                    'width'       => 250,
                                    'flex-width'  => true,
                                    'flex-height' => true,
                                )
                            );
                        }
                        add_action('after_setup_theme', 'neuron_theme_supports');


                        //Regitering Custome Post

                        add_action('init', 'neuron_theme_custom_post');

                        function neuron_theme_custom_post()
                        {
                            register_post_type(
                                'slide',
                                array(
                                    'labels' =>  array(
                                        'name' => __('Slides'),
                                        'singular_name' => __('Slide')
                                    ),
                                    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
                                    'public' => false,
                                    'show_ui' => true
                                )
                            );

                            register_post_type(
                                'feature',
                                array(
                                    'labels' =>  array(
                                        'name' => __('Features'),
                                        'singular_name' => __('Feature')
                                    ),
                                    'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
                                    'public' => false,
                                    'show_ui' => true
                                )
                            );
                            register_post_type(
                                'service',
                                array(
                                    'labels' =>  array(
                                        'name' => __('Services'),
                                        'singular_name' => __('Service')
                                    ),
                                    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
                                    'public' => false,
                                    'show_ui' => true
                                )
                            );
                            register_post_type(
                                'work',
                                array(
                                    'labels' =>  array(
                                        'name' => __('Works'),
                                        'singular_name' => __('Work')
                                    ),
                                    'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
                                    'public' => true

                                )
                            );
                        }

                        // Registering Widgets
                        function neuron_widgets_init()
                        {
                            register_sidebar(
                                array(
                                    'name'          => esc_html__('Footer one', 'neuron'),
                                    'id'            => 'footer-1',
                                    'description'   => esc_html__('Add Footer One widgets here.', 'neuron'),
                                    'before_widget' => '<div id="%1$s" class="widget" %2$s>',
                                    'after_widget'  => '</div>',
                                    'before_title'  => '<h3 class="widget-title">',
                                    'after_title'   => '</h3>',
                                )
                            );

                            register_sidebar(
                                array(
                                    'name'          => esc_html__('Footer two', 'neuron'),
                                    'id'            => 'footer-2',
                                    'description'   => esc_html__('Add Footer Two widgets here.', 'neuron'),
                                    'before_widget' => '<div id="%1$s" class="widget" %2$s>',
                                    'after_widget'  => '</div>',
                                    'before_title'  => '<h3 class="widget-title">',
                                    'after_title'   => '</h3>',
                                )
                            );
                            register_sidebar(
                                array(
                                    'name'          => esc_html__('Footer three', 'neuron'),
                                    'id'            => 'footer-3',
                                    'description'   => esc_html__('Add Footer Three widgets here.', 'neuron'),
                                    'before_widget' => '<div id="%1$s" class="widget" %2$s>',
                                    'after_widget'  => '</div>',
                                    'before_title'  => '<h3 class="widget-title">',
                                    'after_title'   => '</h3>',
                                )
                            );
                            register_sidebar(
                                array(
                                    'name'          => esc_html__('Footer four', 'neuron'),
                                    'id'            => 'footer-4',
                                    'description'   => esc_html__('Add Footer Four widgets here.', 'neuron'),
                                    'before_widget' => '<div id="%1$s" class="widget" %2$s>',
                                    'after_widget'  => '</div>',
                                    'before_title'  => '<h3 class="widget-title">',
                                    'after_title'   => '</h3>',
                                )
                            );
                        }
                        add_action('widgets_init', 'neuron_widgets_init');


                        add_filter('widget_text', 'do_shortcode');


                        function thumbpost_list_shortcode($atts)
                        {
                            extract(shortcode_atts(array(
                                'count' => 2,
                            ), $atts));

                            $q = new WP_Query(
                                array('posts_per_page' => $count, 'post_type' => 'post')
                            );

                            $list = '<ul>';
                            while ($q->have_posts()) : $q->the_post();
                                $idd = get_the_ID();
                                $list .= '
       <li>
         ' . get_the_post_thumbnail($idd, 'thumbnail') . '
         <p><a href="' . get_permalink() . '">' . get_the_title() . '</a></p>
         <span>' . get_the_date('d F Y', $idd) . '</span>
       </li>
        ';
                            endwhile;
                            $list .= '</ul>';
                            wp_reset_query();
                            return $list;
                        }

                        add_shortcode('post_list', 'thumbpost_list_shortcode');
                        // including CS Frameworks
                        require get_template_directory() . '/inc/cs-framework/cs-framework.php';



                        /**
                         * Returns true if a blog has more than 1 category.
                         *
                         * @return bool
                         */
                        function neuron_categorized_blog()
                        {
                            $category_count = get_transient('neuron_categories');

                            if (false === $category_count) {
                                // Create an array of all the categories that are attached to posts.
                                $categories = get_categories(
                                    array(
                                        'fields'     => 'ids',
                                        'hide_empty' => 1,
                                        // We only need to know if there is more than one category.
                                        'number'     => 2,
                                    )
                                );

                                // Count the number of categories that are attached to the posts.
                                $category_count = count($categories);

                                set_transient('neuron_categories', $category_count);
                            }

                            // Allow viewing case of 0 or 1 categories in post preview.
                            if (is_preview()) {
                                return true;
                            }

                            return $category_count > 1;
                        }



                        if (!function_exists('neuron_entry_footer')) :
                            /**
                             * Prints HTML with meta information for the categories, tags and comments.
                             */
                            function neuron_entry_footer()
                            {

                                /* translators: Used between list items, there is a space after the comma. */
                                $separate_meta = __(', ', 'neuron');

                                // Get Categories for posts.
                                $categories_list = get_the_category_list($separate_meta);


                                // We don't want to output .entry-footer if it will be empty, so make sure its not.
                                if ((neuron_categorized_blog() && $categories_list) || get_edit_post_link()) {

                                    echo '<footer class="entry-footer">';

                                    if ('post' === get_post_type()) {
                                        if (($categories_list && neuron_categorized_blog())) {
                                            echo '<span class="cat-tags-links">';

                                            // Make sure there's more than one category before displaying.
                                            if ($categories_list && neuron_categorized_blog()) {
                                                echo '<span class="cat-links">' . $categories_list . '</span>';
                                            }

                                            echo '</span>';
                                        }
                                    }

                                    echo '</footer> <!-- .entry-footer -->';
                                }
                            }
                        endif;
