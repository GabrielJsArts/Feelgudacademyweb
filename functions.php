<?php
/* enqueue script for parent theme stylesheet 
function feelgudtheme_enqueue_styles() {
    // 1. Pega la hoja de estilos del tema padre
    $parent_style = 'astra-parent-style'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    // 2. Pega la nueva hoja de estilos del tema hijo (FeelgudTheme)
    // Depende del estilo del padre ($parent_style) para asegurar el orden.
    wp_enqueue_style( 
        'feelgudtheme-style', 
        get_stylesheet_directory_uri() . '/style.css', 
        array( $parent_style ), 
        filemtime( get_stylesheet_directory() . '/style.css' ) // Usa filemtime para evitar problemas de caché 
    );
}


add_action( 'wp_enqueue_scripts', 'feelgudtheme_enqueue_styles' );

TEMA CLARO FEELGUD */   

/*Codigo de cambio de color

add_filter('body_class', function($classes){
    // Seguridad por si el plugin no está activo
    if ( ! defined('TUTOR_VERSION') ) return $classes;

    // 1) Curso individual y archivo de cursos
    if ( is_singular('courses') || is_post_type_archive('courses') || is_tax('course-category') ) {
        $classes[] = 'tutor-light';
        return $classes;
    }

    // 2) Páginas que usan shortcodes de Tutor (Dashboard / Instructor)
    if ( is_page() ) {
        $post = get_post();
        if ( $post ) {
            $content = $post->post_content ?? '';
            if ( has_shortcode( $content, 'tutor_dashboard' ) || has_shortcode( $content, 'tutor_instructor' ) ) {
                $classes[] = 'tutor-light';
                return $classes;
            }
        }
    }

    // 3) Lecciones / quizzes (ajusta si tus slugs difieren)
    if ( is_singular( array('lesson','tutor_quiz','tutor_assignments') ) ) {
        $classes[] = 'tutor-light';
        return $classes;
    }

    return $classes;
});
/*
 * 
***Detectar automáticamente los post types de TutorLMS***
 *
 *
add_action('wp_footer', function() {
if ( defined('TUTOR_VERSION') ) {
// Obtener los post types registrados por TutorLMS
$post_types = get_post_types( array('public' => true), 'objects' );
// Filtrar solo los post types de TutorLMS, basándonos en sus prefijos comunes
$tutor_post_types = array_filter( $post_types, function($post_type) {
return strpos($post_type->name, 'tutor') === 0; // Prefijo 'tutor' para TutorLMS
});
// Imprimir los post types en el footer (para debug)
echo '
';
echo 'Post types detectados por TutorLMS: ';
print_r(array_keys($tutor_post_types)); // Mostrar los post types
echo '
';
}
});
/*
 *
Con los post types detectados, puedes ahora modificar el código de detección de vistas de TutorLMS de la siguiente manera:
 *
 *
// Actualizado para usar los post types dinámicos detectados
add_filter('body_class', function($classes){
if ( defined('TUTOR_VERSION') ) {
// Obtener los post types de TutorLMS
$post_types = get_post_types( array('public' => true), 'objects' );
$tutor_post_types = array_filter( $post_types, function($post_type) {
return strpos($post_type->name, 'tutor') === 0;
});
// Verificar si estamos en una página de TutorLMS
if ( is_singular(array_keys($tutor_post_types)) || is_post_type_archive(array_keys($tutor_post_types)) ) {
$classes[] = 'tutor-light';
}
}
return $classes;
});

CÓDIGO DE CAMBIO DE COLOR */

// Carga la página "light" SOLO si se detecta Tutor en la petición actual
/*
add_action('wp_enqueue_scripts', function(){
    if ( ! defined('TUTOR_VERSION') ) return;

    // Heurística de detección de vistas Tutor:
    $is_tutor = false;

    if ( is_singular('courses') || is_post_type_archive('courses') || is_tax('course-category') ) {
        $is_tutor = true;
    }

    if ( is_singular( array('lesson','tutor_quiz','tutor_assignments') ) ) {
        $is_tutor = true;
    }

    if ( is_page() ) {
        $post = get_post();
        if ( $post ) {
            $c = $post->post_content ?? '';
            if ( has_shortcode($c, 'tutor_dashboard') || has_shortcode($c, 'tutor_instructor') ) {
                $is_tutor = true;
            }
        }
    }

    if ( $is_tutor ) {
        wp_enqueue_style(
            'tutor-light-only',
            get_stylesheet_directory_uri() . '/assets/css/tutor-light-only.css',
            array(),
            '1.0'
        );
    }
}, 20);
*/
// Redirigir siempre al checkout después de añadir al carrito sin pasar por la página del carrito
add_filter( 'woocommerce_add_to_cart_redirect', function() {
    return wc_get_checkout_url();
} );
// Eliminar el mensaje "se ha añadido a tu carrito" y el botón "Seguir comprando"
add_filter( 'wc_add_to_cart_message_html', '__return_false' );
// 1. Limpiar campos del checkout para productos digitales (España / UE)
add_filter( 'woocommerce_checkout_fields', 'feelgud_simplificar_checkout_digital', 9999 );
function feelgud_simplificar_checkout_digital( $fields ) {
    // Eliminar campos innecesarios
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_phone'] );
    unset( $fields['order']['order_comments'] );

    // Convertir dirección física en opcional (solo si una empresa necesita factura completa)
    $campos_opcionales = array( 'billing_address_1', 'billing_city', 'billing_state', 'billing_postcode' );
    foreach ( $campos_opcionales as $campo ) {
        if ( isset( $fields['billing'][ $campo ] ) ) {
            $fields['billing'][ $campo ]['required'] = false;
        }
    }

    // Ordenar primero lo obligatorio para particulares y abajo lo opcional de empresa
    $fields['billing']['billing_first_name']['priority'] = 10;
    $fields['billing']['billing_last_name']['priority']  = 20;
    $fields['billing']['billing_email']['priority']      = 30;
    $fields['billing']['billing_country']['priority']    = 40;
    $fields['billing']['billing_company']['priority']    = 50;
    $fields['billing']['billing_address_1']['priority']  = 60;
    $fields['billing']['billing_city']['priority']       = 70;
    $fields['billing']['billing_state']['priority']      = 80;
    $fields['billing']['billing_postcode']['priority']   = 90;

    return $fields;
}
// 2. Ocultar el bloque y título "Información adicional"
/*add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );*/
?>