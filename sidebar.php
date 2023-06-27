<div class="widget-popular mt-3 mt-md-5 mt-xl-0">
    <div class="item-popular">
        <h4 class="wid-title">Tin Mới Nhất</h4>
        <ul class="list-unstyled">
            <?php
                $args = array( 
                    'posts_per_page' => 5, 
                    'offset'=> 0, 
                );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); 
            ?>
            <li>
                <a class="popular" href="<?php the_permalink(); ?>">
                    <div class="row mb-3">
                        <div class="col-3 col-md-2 col-lg-2 col-xl-4">
                            <div class="popular__img">
                                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
                            </div>
                        </div>
                        <div class="col-9 col-md-10 col-lg-10 col-xl-8 d-flex flex-column justify-content-center">
                            <p class="popular__title mb-0">
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <?php endforeach; wp_reset_query(); ?>
        </ul>
    </div>
</div>