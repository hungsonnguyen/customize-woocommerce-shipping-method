<?php $cat_url=get_queried_object();?>

<div class="sidebar-list-product">
    <?php 
        $args = array(
            'taxonomy' => 'product_cat',
            'hide_empty'    => false,
        );  
    ?>
    <?php $product_cats = get_terms($args);?>
    <?php
    $output = '<ul id="list-cats" class="product-categories  overflow-hidden list-unstyled mb-0">';
    ?>
       <h2 class="text-uppercase">Danh Mục Sản Phẩm</h2>
    <?php
        foreach ( $product_cats as $product_cat ) {
            ?>
            <?php 
            if ( 0 === $product_cat->parent ) {
                $output .= '<li><a class="d-flex justify-content-between" href="' . esc_url( get_term_link( $product_cat ) ) . '">' . esc_attr( $product_cat->name ) . '<span class="open-sup  icon-box">  <i class="fas fa-angle-right"></i></span></a><ul style="display:none;" class="list-subs list-unstyled">';
                foreach ( $product_cats as $sub_cat ) {
                    if ( $sub_cat->parent === $product_cat->term_id ) {
                        $output .= '<li class="d-flex"><div class="icon-box me-2">' . $icon_box . '</div><a href="' . esc_url( get_term_link( $sub_cat ) ) . '">' . esc_attr( $sub_cat->name ) . '</a></li>';
                    }
                }
                $output .= '</ul></li>';
            }
        }

        $output .= '</ul>';
        echo $output;
    ?>
</div>

<!-- <div class="sidebar-list-product">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h3 class="accordion-header title">
                Dành cho bạn
            </h3>
        </div>
        <div class="accordion-item">
            <p class="accordion-header title-sale">
            <?php $categorys = get_term_by('id',57, 'product_cat');?>
                <a class="<?php if($cat_url->term_id == 57){echo "active";} ?>"
                    href="<?php echo get_term_link($categorys->slug, 'product_cat'); ?>">Bình nóng lạnh</a>
            </p>
        </div>
        
         
         <div class="accordion-item">
            <p class="accordion-header title-sale">
                <?php $categorysale = get_term_by('id',56, 'product_cat');?>
                <a class="<?php if($cat_url->term_id == 56){echo "active";} ?>"
                    href="<?php echo get_term_link($categorysale->slug, 'product_cat'); ?>">Quạt</a>
            </p>
        </div> 
        
         <div class="accordion-item">
            <p class="accordion-header title-sale">
                <?php $categorysale = get_term_by('id',50, 'product_cat');?>
                <a class="<?php if($cat_url->term_id == 50){echo "active";} ?>"
                    href="<?php echo get_term_link($categorysale->slug, 'product_cat'); ?>">Điều hoà</a>
            </p>
        </div>
         
         <div class="accordion-item">
            <p class="accordion-header title-sale">
                <?php $categorysale = get_term_by('id',52, 'product_cat');?>
                <a class="<?php if($cat_url->term_id == 52){echo "active";} ?>"
                    href="<?php echo get_term_link($categorysale->slug, 'product_cat'); ?>">Gia dụng bếp</a>
            </p>
        </div>
        
        <div class="accordion-item">
            <p class="accordion-header title-sale">
                <?php $categorysale = get_term_by('id',51, 'product_cat');?>
                <a class="<?php if($cat_url->term_id == 51){echo "active";} ?>"
                    href="<?php echo get_term_link($categorysale->slug, 'product_cat'); ?>">Máy giặt, máy sấy</a>
            </p>
        </div>
        
        <div class="accordion-item">
            <p class="accordion-header title-sale">
            <?php $categorysale = get_term_by('id', 53, 'product_cat');?>
                <a class="<?php if($cat_url->term_id == 53){echo "active";} ?>"
                    href="<?php echo get_term_link($categorysale->slug, 'product_cat'); ?>">Tủ lạnh, tủ đông, tủ mát</a>
            </p>
            </p>
        </div>
        
        <div class="accordion-item">
            <p class="accordion-header title-sale">
                <?php $categorysale = get_term_by('id',55, 'product_cat');?>
                <a class="<?php if($cat_url->term_id == 55){echo "active";} ?>"
                    href="<?php echo get_term_link($categorysale->slug, 'product_cat'); ?>">Sản phẩm khác</a>
            </p>
        </div>
    </div>
</div> -->

<!-- <div class="sidebar-list-product mt-5 d-none d-md-block">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h3 class="accordion-header title">
                Dòng sản phẩm
            </h3>
        </div>
        <?php
            $args = array(
                'type'      => 'product',
                'taxonomy'                 => 'product_cat',
                'child_of' => 1,
                'hide_empty'               => 0,
                'parent'                   => 16,
            );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) {?>
        <div class="accordion-item">
            <p class="accordion-header title-sale <?php if($category->slug == $cat_url->slug){echo 'active';}?>">
                <a class="" href="<?php echo get_term_link($category->slug, 'product_cat'); ?>">>> &nbsp; <?php echo $category->name ;?></a>
            </p>
        </div>
        <?php } ?>
    </div>
</div>

<div class="sidebar-list-product mt-5 mb-5 d-none d-md-block">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h3 class="accordion-header title">
                Hãng sản xuất
            </h3>
        </div>
        <?php
            $args = array(
                'type'      => 'product',
                'taxonomy'                 => 'product_cat',
                'child_of' => 1,
                'hide_empty'               => 0,
                'parent'                   => 17,
            );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) {?>
        <div class="accordion-item">
            <p class="accordion-header title-sale <?php if($category->slug == $cat_url->slug){echo 'active';}?>">
                <a class="" href="<?php echo get_term_link($category->slug, 'product_cat'); ?>">>> &nbsp; <?php echo $category->name ;?></a>
            </p>
        </div>
        <?php } ?>
    </div>
</div> -->

<!-- sidebar-mobile -->

<!-- <div class="sidebar-list-product sidebar-mobile d-block d-md-none mt-3">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dongsanpham" aria-expanded="true">
                    DÒNG SẢN PHẨM
                </button>
            </h2>
            <div id="dongsanpham"
                class="accordion-collapse collapse <?php if($cat_url->parent == 16){echo "show";} ?> <?php if($cat_url->term_id == 16){echo "show";} ?>">
                <div class="accordion-body">

                    <?php
                    $args = array(
                        'type'      => 'product',
                        'taxonomy'                 => 'product_cat',
                        'child_of' => 1,
                        'hide_empty'               => 0,
                        'parent'                   => 16,
                    );
                    $categories = get_categories( $args );
                    foreach ( $categories as $category ) {?>

                    <a class="<?php if($category->slug == $cat_url->slug){echo 'active';}?>" href="<?php echo get_term_link($category->slug, 'product_cat'); ?>">
                    >> &nbsp; <?php echo $category->name ;?>
                    </a><br>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- step-2 -->
<!-- <div class="sidebar-list-product sidebar-mobile d-block d-md-none mt-3 mb-4">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hangsanxuat" aria-expanded="true">
                    HÃNG SẢN XUẤT
                </button>
            </h2>
            <div id="hangsanxuat"
                class="accordion-collapse collapse <?php if($cat_url->parent == 17){echo "show";} ?> <?php if($cat_url->term_id == 17){echo "show";} ?>">
                <div class="accordion-body">
                    <?php
                    $args = array(
                        'type'      => 'product',
                        'taxonomy'                 => 'product_cat',
                        'child_of' => 1,
                        'hide_empty'               => 0,
                        'parent'                   => 17,
                    );
                    $categories = get_categories( $args );
                    foreach ( $categories as $category ) {?>
                        <a class="<?php if($category->slug == $cat_url->slug){echo 'active';}?>" href="<?php echo get_term_link($category->slug, 'product_cat'); ?>">
                        >> &nbsp; <?php echo $category->name ;?>
                        </a><br>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div> -->