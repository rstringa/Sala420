<?php
/**
 * This file show you an improvement of better include meta box in some pages
 * based on post ID, post slug, page template and page parent
 *
 * This is created, maintained and supported by the community
 * Use it with your own risk
 *
 * For more advanced and OFFICIAL support, check out the extension https://metabox.io/plugins/meta-box-include-exclude/
 *
 * @author Charlie Rosenbury <charlie@40digits.com>
 */

add_filter( 'rwmb_meta_boxes', 'YOURPREFIX_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * @param $meta_boxes
 * @return array
 */
function YOURPREFIX_register_meta_boxes( $meta_boxes ) {
	$prefix       = 'prefix-';
	
	
	
	/*******************************/
// GALERIA DE FOTOS
/*******************************/
	$meta_boxes[] = array(
		'id'    => 'galeria_fotos',
		'title' => 'Galeria de Fotos',
		'pages' => array('page'),

		'fields' => array(
		
			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => __( 'Galeria de Fotos', 'rwmb' ),
				'id'               => "imgadv",
				'type'             => 'image_advanced',
				'desc'  => 'Puede subir varias a la vez - Tamaño recomendado 1024x768px (4:3) - El epigrafe de la foto se incluye al incluir la foto en el campo DESCRIPCION.',
				'max_file_uploads' => 12,
			),
			),

			'only_on'    => array(
			'id'       => array( 31 ),
			// 'slug'  => array( 'news', 'blog' ),
			//'template' => array( 'fullwidth.php', 'simple.php' ),
			//'parent'   => array( 54,93 )
			),
		
	        
    );

/*******************************/
// LINK A FACEBOOK
/*******************************/


	$meta_boxes[] = array(
		'id' => 'link_facebook',
		'title' => esc_html__( 'Link a Facebook', 'metabox-online-generator' ),
		'post_types' => array( 'post', 'page','slider' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'text_1',
				'type' => 'text',
				'name' => esc_html__( 'Link', 'metabox-online-generator' ),
			),
		),
	);




/*******************************/
// LINK A ALTERNATIVA TEATRAL
/*******************************/


	$meta_boxes[] = array(
		'id' => 'link_alternativa',
		'title' => esc_html__( 'Link a Alternativa Teatral', 'metabox-online-generator' ),
		'post_types' => array( 'post', 'page','slider' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'text_2',
				'type' => 'text',
				'name' => esc_html__( 'Link', 'metabox-online-generator' ),
			),
		),
	);


/*******************************/
// ESPECTACULOS
/*******************************/


	$meta_boxes[] = array(
		'id' => 'tipo_espectaculo',
		'title' => esc_html__( 'Tipo de espectáculo', 'metabox-online-generator' ),
		'post_types' => array( 'post'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'tipo_esp',
				'type' => 'text',
				'name' => esc_html__( 'Texto', 'metabox-online-generator' ),
			),
		),
	);
	
	$meta_boxes[] = array(
		'id' => 'mes_espectaculo',
		'title' => esc_html__( 'Mes del espectáculo', 'metabox-online-generator' ),
		'post_types' => array( 'post'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'mes_esp',
				'type' => 'text',
				'name' => esc_html__( 'Texto', 'metabox-online-generator' ),
			),
		),
	);
	
	$meta_boxes[] = array(
		'id' => 'dia_espectaculo',
		'title' => esc_html__( 'Día y Hora del espectáculo', 'metabox-online-generator' ),
		'post_types' => array( 'post'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'dia_esp',
				'type' => 'text',
				'name' => esc_html__( 'Texto', 'metabox-online-generator' ),
			),
		),
	);



/*******************************/
// SEMINARIOS Y TALLERES
/*******************************/



	$meta_boxes[] = array(
		'id' => 'profesor_seminario',
		'title' => esc_html__( 'Profesor', 'metabox-online-generator' ),
		'post_types' => array( 'page'),
		//'post_parent' => 57,
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'profesor_sem',
				'type' => 'text',
				'name' => esc_html__( 'Nombre del profesor', 'metabox-online-generator' ),
			),
		),
		
	);
	
	$meta_boxes[] = array(
		'id' => 'horarios_seminario',
		'title' => esc_html__( 'Horarios', 'metabox-online-generator' ),
		'post_types' => array( 'page'),
		//'post_parent' => 57,
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'horarios_sem',
				'type' => 'textarea',
				'rows'        => 5,
				'cols'        => 5,
				'name' => esc_html__( 'Horarios', 'metabox-online-generator' ),
			),
		),
		
	);
	
	


/*******************************/
// SPONSORS
/*******************************/
	$meta_boxes[] = array(
		'id'    => 'sponsors_logos',
		'title' => 'Logos de Sponsors',
		'pages' => array('page'),

		'fields' => array(
		
			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => __( 'Logos de Sponsors', 'rwmb' ),
				'id'               => "sponsors",
				'type'             => 'image_advanced',
				'desc'  => 'Puede subir varias a la vez - Tamaño recomendado 180x129px ( centrar en ese alto )  - El link cada sponsor se incluye en el campo DESCRIPCION.',
				'max_file_uploads' => 12,
			),
			),

			'only_on'    => array(
			'id'       => array( 100 ),
			// 'slug'  => array( 'news', 'blog' ),
			//'template' => array( 'fullwidth.php', 'simple.php' ),
			//'parent'   => array( 54,93 )
			),
		
	        
    );
	
	foreach ( $meta_boxes as $k => $meta_box ) {
		if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) ) {
			unset( $meta_boxes[ $k ] );
		}
	}

	return $meta_boxes;
}

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include( $conditions ) {
	// Always include in the frontend to make helper function work
	if ( ! is_admin() ) {
		return true;
	}

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}

	if ( isset( $_GET['post'] ) ) {
		$post_id = intval( $_GET['post'] );
	} elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = intval( $_POST['post_ID'] );
	} else {
		$post_id = false;
	}

	$post_id = (int) $post_id;
	$post    = get_post( $post_id );

	foreach ( $conditions as $cond => $v ) {
		// Catch non-arrays too
		if ( ! is_array( $v ) ) {
			$v = array( $v );
		}

		switch ( $cond ) {
			case 'id':
				if ( in_array( $post_id, $v ) ) {
					return true;
				}
				break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) ) {
					return true;
				}
				break;
			case 'slug':
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) ) {
					return true;
				}
				break;
			case 'category': // post must be saved or published first
				$categories = get_the_category( $post->ID );
				$catslugs   = array();
				foreach ( $categories as $category ) {
					array_push( $catslugs, $category->slug );
				}
				if ( array_intersect( $catslugs, $v ) ) {
					return true;
				}
				break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) ) {
					return true;
				}
				break;
		}// End switch().
	}// End foreach().

	// If no condition matched
	return false;
}