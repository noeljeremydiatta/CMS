<?php if(get_theme_mod('fifteen_celsius_enable') && is_front_page()):?>
    <div id="f1_container" class="featured-section-area">
    <div class="container">
        <div id="f1_card" class="col-md-12 col-sm-12 celsius-outer">
            <?php
            if(get_theme_mod('fifteen_celsius_title')):?>
                <div class="section-title">
                    <?php
                    echo esc_html(get_theme_mod('fifteen_celsius_title'));
                    ?>
                </div>
            <?php endif;?>
            <?php /* Start the Loop */ $count=0; ?>
            <?php
            $args = array( 'posts_per_page' => 3, 'category' => esc_html(get_theme_mod('fifteen_celsius_cat')) );
            $lastposts = get_posts( $args );
            foreach ( $lastposts as $post ) :
                setup_postdata( $post ); ?>

                <div class="celsius-wrapper col-md-4 col-sm-4">
                    <a href="<?php the_permalink() ?>">
                        <div class="front face">
                            <?php if (has_post_thumbnail()) : ?>
                                <div title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('fifteen-pop-thumb',array('alt' => trim(strip_tags( $post->post_title )))); ?></div>
                            <?php else : ?>
                                <div title="<?php the_title_attribute() ?>"><img alt="<?php the_title() ?>" src="<?php echo esc_html(get_template_directory_uri()."/assets/images/placeholder2.jpg"); ?>"></div>
                            <?php endif; ?>
                        </div>
                        <!-- mobile screen title-->
                        <div class="mobile-bface-title">
                            <?php the_title(); ?>
                        </div>

                        <div class="back face center">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>

                <?php $count++;
                if ($count == 4) break;
            endforeach; ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    </div>
<?php endif;?>