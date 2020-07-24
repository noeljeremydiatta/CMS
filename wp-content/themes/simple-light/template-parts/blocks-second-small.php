<?php

    if ( !get_the_title() ) {

        $simple_light_title_post = 'Read post';

    } else {

        $simple_light_title_post = get_the_title();

    }


    if (  ! wp_get_attachment_url( get_post_thumbnail_id() )  ) {

        $simple_light_post_attachment = isset( get_theme_mod( 'simple_light_options' )['default_post_attachment'] ) ? get_theme_mod( 'simple_light_options' )['default_post_attachment'] : '';

    } else {

        $simple_light_post_attachment = wp_get_attachment_url( get_post_thumbnail_id() );

    }

    $simple_light_post_attachment = apply_filters( 'simple_light_post_background', $simple_light_post_attachment );


?>

<!-- small -->
<div style='<?php echo esc_attr( $simple_light_post_attachment ); ?>' class="prev-post mini-gal-item d-flex align-items-center col-md-4 p-0">
    <div class="wrap-post"></div>
    <div class="m-auto text-center small-blck w-100">
        <a class="post-name-prev" href='<?php the_permalink() ?>' title="<?php esc_attr_e( 'Permalink to ','simple-light' ); echo esc_attr( $simple_light_title_post ); ?>" ><?php echo esc_html( $simple_light_title_post ); ?></a>
    </div>
</div>