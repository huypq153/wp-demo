<?php
/**
 * PQHEyeDoctor Theme Customizer
 *
 * @package PQHEyeDoctor
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pqheyedoctor_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		
	
	//Logo Settings
	$wp_customize->add_section( 'title_tagline' , array(
	    'title'      => __( 'Title, Tagline & Logo', 'pqheyedoctor' ),
	    'priority'   => 30,
	) );
	
	$wp_customize->add_setting( 'pqheyedoctor_logo' , array(
	    'default'     => '',
	    'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'pqheyedoctor_logo',
	        array(
	            'label' => __('Upload Logo','pqheyedoctor'),
	            'section' => 'title_tagline',
	            'settings' => 'pqheyedoctor_logo',
	            'priority' => 5,
	        )
		)
	);
		
	
	
	//Replace Header Text Color with, separate colors for Title and Description
	//Override pqheyedoctor_site_titlecolor
	$wp_customize->remove_control('display_header_text');
	$wp_customize->remove_setting('header_textcolor');
	$wp_customize->add_setting('pqheyedoctor_site_titlecolor', array(
	    'default'     => '#3a85ae',
	    'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control( 
		$wp_customize, 
		'pqheyedoctor_site_titlecolor', array(
			'label' => __('Site Title Color','pqheyedoctor'),
			'section' => 'colors',
			'settings' => 'pqheyedoctor_site_titlecolor',
			'type' => 'color'
		) ) 
	);
	
	//Settings For Logo Area
	
	$wp_customize->add_setting(
		'pqheyedoctor_hide_title_tagline',
		array( 'sanitize_callback' => 'pqheyedoctor_sanitize_checkbox' )
	);
	
	$wp_customize->add_control(
			'pqheyedoctor_hide_title_tagline', array(
		    'settings' => 'pqheyedoctor_hide_title_tagline',
		    'label'    => __( 'Hide Title and Tagline.', 'pqheyedoctor' ),
		    'section'  => 'title_tagline',
		    'type'     => 'checkbox',
		)
	);
	
	function pqheyedoctor_title_visible( $control ) {
		$option = $control->manager->get_setting('pqheyedoctor_hide_title_tagline');
	    return $option->value() == false ;
	}
	
	// SLIDER PANEL
	$wp_customize->add_panel( 'pqheyedoctor_slider_panel', array(
	    'priority'       => 35,
	    'capability'     => 'edit_theme_options',
	    'theme_supports' => '',
	    'title'          => 'Main Slider',
	) );
	
	$wp_customize->add_section(
	    'pqheyedoctor_sec_slider_options',
	    array(
	        'title'     => __('Enable/Disable','pqheyedoctor'),
	        'priority'  => 0,
	        'panel'     => 'pqheyedoctor_slider_panel'
	    )
	);
	
	
	$wp_customize->add_setting(
		'pqheyedoctor_main_slider_enable',
		array( 'sanitize_callback' => 'pqheyedoctor_sanitize_checkbox' )
	);
	
	$wp_customize->add_control(
			'pqheyedoctor_main_slider_enable', array(
		    'settings' => 'pqheyedoctor_main_slider_enable',
		    'label'    => __( 'Enable Slider.', 'pqheyedoctor' ),
		    'section'  => 'pqheyedoctor_sec_slider_options',
		    'type'     => 'checkbox',
		)
	);
	
	$wp_customize->add_setting(
		'pqheyedoctor_main_slider_count',
			array(
				'default' => '0',
				'sanitize_callback' => 'pqheyedoctor_sanitize_positive_number'
			)
	);
	
	// Select How Many Slides the User wants, and Reload the Page.
	$wp_customize->add_control(
			'pqheyedoctor_main_slider_count', array(
		    'settings' => 'pqheyedoctor_main_slider_count',
		    'label'    => __( 'No. of Slides(Min:0, Max: 5)' ,'pqheyedoctor'),
		    'section'  => 'pqheyedoctor_sec_slider_options',
		    'type'     => 'number',
		    'description' => __('Save the Settings, and Reload this page to Configure the Slides.','pqheyedoctor'),
		    
		)
	);
	
		
	
	if ( get_theme_mod('pqheyedoctor_main_slider_count') > 0 ) :
		$slides = get_theme_mod('pqheyedoctor_main_slider_count');
		
		for ( $i = 1 ; $i <= $slides ; $i++ ) :
			
			//Create the settings Once, and Loop through it.
			
			$wp_customize->add_setting(
				'pqheyedoctor_slide_img'.$i,
				array( 'sanitize_callback' => 'esc_url_raw' )
			);
			
			$wp_customize->add_control(
			    new WP_Customize_Image_Control(
			        $wp_customize,
			        'pqheyedoctor_slide_img'.$i,
			        array(
			            'label' => '',
			            'section' => 'pqheyedoctor_slide_sec'.$i,
			            'settings' => 'pqheyedoctor_slide_img'.$i,			       
			        )
				)
			);
			
			
			$wp_customize->add_section(
			    'pqheyedoctor_slide_sec'.$i,
			    array(
			        'title'     => 'Slide '.$i,
			        'priority'  => $i,
			        'panel'     => 'pqheyedoctor_slider_panel'
			    )
			);
			
			$wp_customize->add_setting(
				'pqheyedoctor_slide_title'.$i,
				array( 'sanitize_callback' => 'sanitize_text_field' )
			);
			
			$wp_customize->add_control(
					'pqheyedoctor_slide_title'.$i, array(
				    'settings' => 'pqheyedoctor_slide_title'.$i,
				    'label'    => __( 'Slide Title','pqheyedoctor' ),
				    'section'  => 'pqheyedoctor_slide_sec'.$i,
				    'type'     => 'text',
				)
			);
			
			$wp_customize->add_setting(
				'pqheyedoctor_slide_desc'.$i,
				array( 'sanitize_callback' => 'sanitize_text_field' )
			);
			
			$wp_customize->add_control(
					'pqheyedoctor_slide_desc'.$i, array(
				    'settings' => 'pqheyedoctor_slide_desc'.$i,
				    'label'    => __( 'Slide Description','pqheyedoctor' ),
				    'section'  => 'pqheyedoctor_slide_sec'.$i,
				    'type'     => 'text',
				)
			);
			
			
			$wp_customize->add_setting(
				'pqheyedoctor_slide_url'.$i,
				array( 'sanitize_callback' => 'esc_url_raw' )
			);
			
			$wp_customize->add_control(
					'pqheyedoctor_slide_url'.$i, array(
				    'settings' => 'pqheyedoctor_slide_url'.$i,
				    'label'    => __( 'Target URL','pqheyedoctor' ),
				    'section'  => 'pqheyedoctor_slide_sec'.$i,
				    'type'     => 'url',
				)
			);
			
		endfor;
	
	
	endif;
		
	if (class_exists('WP_Customize_Control')) {
		class pqheyedoctor_WP_Customize_Upgrade_Control extends WP_Customize_Control {
	        /**
	         * Render the control's content.
	         */
	        public function render_content() {
	             printf(
	                '<label class="customize-control-upgrade"><span class="customize-control-title"><i class="fa fa-star"></i>%s</span> %s</label>',
	                $this->label,
	                $this->description
	            );
	        }
	    }
	}
	
	
	//Upgrade
	$wp_customize->add_section(
	    'pqheyedoctor_sec_help',
	    array(
	        'title'     => __('pqheyedoctor Theme - Help & Support','pqheyedoctor'),
	        'priority'  => 40,
	    )
	);
	
	$wp_customize->add_setting(
			'pqheyedoctor_help',
			array( 'sanitize_callback' => 'esc_textarea' )
		);
			
	$wp_customize->add_control(
	    new pqheyedoctor_WP_Customize_Upgrade_Control(
	        $wp_customize,
	        'pqheyedoctor_help',
	        array(
	            'label' => __('Visit Rohitink.com For Help','pqheyedoctor'),
	            'description' => __('Hello, Thanks for Downloading pqheyedoctor Pro. Due to a Huge no. of People who use pqheyedoctor Free Version, I can not answer all your queries. But I will try my best to answer your Queries. But for Bugs/Issues, We try to fix them ASAP. To Report a Bug or Ask for Help - <a href="https://rohitink.com/2014/03/13/pqheyedoctor/">Click Here</a>.','pqheyedoctor'),
	            'section' => 'pqheyedoctor_sec_help',
	            'settings' => 'pqheyedoctor_help',			       
	        )
		)
	);
	
	$wp_customize->add_section(
	    'pqheyedoctor_sec_upgrade',
	    array(
	        'title'     => __('#Discover pqheyedoctor PRO','pqheyedoctor'),
	        'priority'  => 40,
	    )
	);
	
	$wp_customize->add_setting(
			'pqheyedoctor_upgrade',
			array( 'sanitize_callback' => 'esc_textarea' )
		);
			
	$wp_customize->add_control(
	    new pqheyedoctor_WP_Customize_Upgrade_Control(
	        $wp_customize,
	        'pqheyedoctor_upgrade',
	        array(
	            'label' => __('More of Everything','pqheyedoctor'),
	            'description' => __('pqheyedoctor Pro has more of Everything. More New Features, More Options, Unlimited Designs, More Fonts, More Layouts, Configurable Slider, Inbuilt Advertising Options, More Widgets, Unlimited Colors and a lot more options and comes with Dedicated Support. To Know More about the Pro Version, click here: <a href="http://rohitink.com/product/pqheyedoctor-pro/">Upgrade to Pro</a>.','pqheyedoctor'),
	            'section' => 'pqheyedoctor_sec_upgrade',
	            'settings' => 'pqheyedoctor_upgrade',			       
	        )
		)
	);
		
	
	class pqheyedoctor_Custom_CSS_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	                <textarea rows="8" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	            </label>
	        <?php
	    }
	}
	
	$wp_customize-> add_section(
    'pqheyedoctor_custom_codes',
    array(
    	'title'			=> __('Custom CSS','pqheyedoctor'),
    	'description'	=> __('Enter your Custom CSS to Modify design.','pqheyedoctor'),
    	'priority'		=> 41,
    	)
    );
    
	$wp_customize->add_setting(
	'pqheyedoctor_custom_css',
	array(
		'default'		=> '',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'    => 'wp_filter_nohtml_kses',
		'sanitize_js_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
	    new pqheyedoctor_Custom_CSS_Control(
	        $wp_customize,
	        'pqheyedoctor_custom_css',
	        array(
	            'section' => 'pqheyedoctor_custom_codes',
	            

	        )
	    )
	);
	
	function pqheyedoctor_sanitize_text( $input ) {
	    return wp_kses_post( force_balance_tags( $input ) );
	}
	
	$wp_customize-> add_section(
    'pqheyedoctor_custom_footer',
    array(
    	'title'			=> __('Custom Footer Text','pqheyedoctor'),
    	'description'	=> __('Enter your Own Copyright Text.','pqheyedoctor'),
    	'priority'		=> 42,
    	)
    );
    
	$wp_customize->add_setting(
	'pqheyedoctor_footer_text',
	array(
		'default'		=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	
	$wp_customize->add_control(	 
	       'pqheyedoctor_footer_text',
	        array(
	            'section' => 'pqheyedoctor_custom_footer',
	            'settings' => 'pqheyedoctor_footer_text',
	            'type' => 'text'
	        )
	);	
	
	
	// Social Icons
	$wp_customize->add_section('pqheyedoctor_social_section', array(
			'title' => __('Social Icons','pqheyedoctor'),
			'priority' => 44 ,
	));
	
	$social_networks = array( //Redefinied in Sanitization Function.
					'none' => __('-','pqheyedoctor'),
					'facebook' => __('Facebook','pqheyedoctor'),
					'twitter' => __('Twitter','pqheyedoctor'),
					'google' => __('Google Plus','pqheyedoctor'),
					'instagram' => __('Instagram','pqheyedoctor'),
					'rss' => __('RSS Feeds','pqheyedoctor'),
					'flickr' => __('Flickr','pqheyedoctor'),
					'linkedin' => __('Linkedin','pqheyedoctor'),
					'pinterest' => __('Pinterest','pqheyedoctor'),
					'soundcloud' => __('Soundcloud','pqheyedoctor'),
					'vimeo' => __('Vimeo','pqheyedoctor'),
					'vine' => __('Vine','pqheyedoctor'),
					'yelp' => __('Yelp','pqheyedoctor'),
					'youtube' => __('Youtube','pqheyedoctor'),

				);
				
	$social_count = count($social_networks);
				
	for ($x = 1 ; $x <= ($social_count - 3) ; $x++) :
			
		$wp_customize->add_setting(
			'pqheyedoctor_social_'.$x, array(
				'sanitize_callback' => 'pqheyedoctor_sanitize_social',
				'default' => 'none'
			));

		$wp_customize->add_control( 'pqheyedoctor_social_'.$x, array(
					'settings' => 'pqheyedoctor_social_'.$x,
					'label' => __('Icon ','pqheyedoctor').$x,
					'section' => 'pqheyedoctor_social_section',
					'type' => 'select',
					'choices' => $social_networks,			
		));
		
		$wp_customize->add_setting(
			'pqheyedoctor_social_url'.$x, array(
				'sanitize_callback' => 'esc_url_raw'
			));

		$wp_customize->add_control( 'pqheyedoctor_social_url'.$x, array(
					'settings' => 'pqheyedoctor_social_url'.$x,
					'description' => __('Icon ','pqheyedoctor').$x.__(' Url','pqheyedoctor'),
					'section' => 'pqheyedoctor_social_section',
					'type' => 'url',
					'choices' => $social_networks,			
		));
		
	endfor;
	
	function pqheyedoctor_sanitize_social( $input ) {
		$social_networks = array(
					'none' ,
					'facebook',
					'twitter',
					'google-plus',
					'instagram',
					'rss',
					'flickr',
					'linkedin',
					'pinterest',
					'soundcloud',
					'vimeo',
					'vine',
					'yelp',
					'youtube'
				);
		if ( in_array($input, $social_networks) )
			return $input;
		else
			return '';	
	}
	
	
	/* Sanitization Functions Common to Multiple Settings go Here, Specific Sanitization Functions are defined along with add_setting() */
	function pqheyedoctor_sanitize_checkbox( $input ) {
	    if ( $input == 1 ) {
	        return 1;
	    } else {
	        return '';
	    }
	}
	
	function pqheyedoctor_sanitize_positive_number( $input ) {
		if ( ($input >= 0) && is_numeric($input) )
			return $input;
		else
			return '';	
	}
	
	function pqheyedoctor_sanitize_category( $input ) {
		if ( term_exists(get_cat_name( $input ), 'category') )
			return $input;
		else 
			return '';	
	}
	
	
}
add_action( 'customize_register', 'pqheyedoctor_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pqheyedoctor_customize_preview_js() {
	wp_enqueue_script( 'pqheyedoctor_customizer', get_template_directory_uri() . '/assets/global/scripts/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'pqheyedoctor_customize_preview_js' );
