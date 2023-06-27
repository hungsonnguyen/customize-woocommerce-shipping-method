<div class="item-news">
    <div class="item-card d-lg-flex">
        <a href="<?php the_permalink(); ?>" class="bzthumb-img">
        	<img src="<?php the_post_thumbnail_url('full'); ?>">
        </a>			                        
        <div class="item-content">         
            <?php
                $productTerms = get_the_terms( $post->ID, 'category' );
                if ( $productTerms && ! is_wp_error( $productTerms ) ) {
                    foreach ($productTerms as $productTerm) {
                        if ($productTerm === reset($productTerms)) {
                            echo '<a class="meta-category" href="' .  esc_url( get_term_link( $productTerm->term_id ) ) . '">';
                            echo $productTerm->name;
                            echo '</a>';
                        }
                    }
                }    
            ?>            
            <p class="meta-date"><?php echo get_the_date('M d, Y'); ?></p>
            <h4 class="bl-title">
            	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            <p class="mb-0">
                <?php echo wp_trim_words( get_the_content(), $num_words = 25, $more = null ); ?>
            </p>			                            
        </div>
    </div>
</div>