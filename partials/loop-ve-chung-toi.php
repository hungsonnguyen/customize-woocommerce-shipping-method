<?php 
    get_header(); 
    $queried_object = get_queried_object(); 
    global $post;
?>
<!-- <div class="page-content w-100 float-left mt-5 mb-5">
    <div class="container">
        <?php 
            // while (have_posts()) : the_post();
            // the_content();
            // endwhile;
        ?>
    </div>
</div>
<div class="clear"></div> -->

<div class="page-about-us">
    <section class="banner">
    </section>

    <section class="main-top">
        <div class="container">
            <div class="post-item">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="content">
                            <h4 class="title">Về chúng tôi</h4>
                            <h2 class="text-uppercase title-post mt-3">Điều hòa miền trung</h2>
                            <p>Lời đầu tiên xin cho phép Công ty TNHH Điều Hòa Miền Trung gửi đến quý khách hàng lời
                                chúc sức khoẻ, thành công và thịnh vượng. Cảm ơn quý khách hàng đã tín nhiệm, tin dùng
                                và đồng hành cùng sự phát triển của chúng tôi trong thời gian qua</p>
                            <p>

                                Công ty TNHH Điều Hòa Miền Trung là tổng đại lý phân phối chính hãng các thương hiệu
                                điều hòa không khí hàng đầu tại Việt Nam: Nagakawa, Akino, Mitsubishi Heavy, Panasonic,
                                Daikin, Casper, LG, Reetech,....Bên cạnh đó chúng tôi tự hào là nhà phân phối độc quyền
                                điều hòa Akino tại khu vực miền Trung
                                Chúng tôi cam kết 100% sản phẩm do Công ty TNHH Điều Hòa Miền Trung cung cấp đều là hàng
                                rõ nguồn gốc xuất xứ, đầy đủ giấy tờ, hàng mới nguyên thùng nguyên kiện, bảo hành chính
                                hãng.
                            </p>
                            <div class="act-link mt-5 mb-3">
                                <a class="link" href="<?php echo get_home_url()?>/lien-he">LIÊN HỆ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-1.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-item mt-3">
                <div class="row">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <div class="img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-2.png"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <div class="content">
                            <h2 class="title-post">Đến với Điều Hòa Miền Trung Quý khách hàng có cơ hội được trải
                                nghiệm:
                            </h2>
                            <p><i class="far fa-check-circle"></i>Đội ngũ nhân viên tư vấn, bán hàng nhiệt tình chuyên
                                nghiệp. Nắm rõ, đầy đủ và chính xác thông tin chính xác chi tiết từng sản phẩm.</p>
                            <p><i class="far fa-check-circle"></i>Tiếp cận nhanh hơn đến những chương trình khuyến mãi
                                siêu hot được cập nhật mỗi ngày.
                            </p>
                            <p><i class="far fa-check-circle"></i>Được hỗ trợ giao hàng miễn phí và hỗ trợ lắp đặt tại
                                nhà trong phạm vi thành phố Đà Nẵng. Ngoài ra, chúng tôi còn hỗ trợ giao hàng toàn quốc.
                            </p>
                            <p><i class="far fa-check-circle"></i>Quý khách có thể mua hàng với giá thành tốt nhất, với
                                trải nghiệm dịch vụ bán hàng chu đáo tận tình nhất và được hỗ trợ bảo hành chuyên nghiệp
                                trực tiếp từ hãng.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="main-mid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="content">
                        <h4 class="title">Tầm nhìn</h4>
                        <p>Trở thành nhà phân phối điều hòa và tổng thầu xây dựng cơ điện lạnh uy tín hàng đầu Việt Nam
                            với chất lượng tốt nhất làm hài lòng khách hàng</p>
                        <h4 class="title">Sứ mệnh</h4>
                        <p>Tạo ra chất lượng phục vụ tốt nhất, chuyên nghiệp nhất tại Khu vực Miền trung, đồng thời phát
                            triển mạnh mẽ nhằm tạo nên nền tảng kinh tế vững mạnh để thỏa mãn tối đa nhu cầu khách hàng
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="img">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-bot">
        <div class="container">
            <h4 class="title text-center d-block mb-5">Giá trị cốt lõi</h4>
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="item text-center">
                        <div class="item__img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-4.png"
                                alt="">
                        </div>
                        <p class="item__title">
                            UY TÍN
                        </p>
                        <p class="item__text">
                            Lấy chữ tín đặt lên hàng đầu
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="item text-center">
                        <div class="item__img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-8.png"
                                alt="">
                        </div>
                        <p class="item__title">
                            TÍCH CỰC
                        </p>
                        <p class="item__text">
                            Tích cực trong mọi tình huống
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="item text-center">
                        <div class="item__img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-6.png"
                                alt="">
                        </div>
                        <p class="item__title">
                            CHÂN THÀNH
                        </p>
                        <p class="item__text">
                            Chân thành với tất cả mọi người
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="item text-center">
                        <div class="item__img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-7.png"
                                alt="">
                        </div>
                        <p class="item__title">
                            CHÍNH TRỰC
                        </p>
                        <p class="item__text">
                            Chính trực trong mọi vấn đề
                        </p>
                    </div>
                </div>
                

                <div class="col-6 col-md-4">
                    <div class="item text-center">
                        <div class="item__img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-5.png"
                                alt="">
                        </div>
                        <p class="item__title">
                            NHÂN
                        </p>
                        <p class="item__text">
                            Lấy con người phù hợp làm nhân tố quan trọng nhất
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="item text-center">
                        <div class="item__img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/page-about-us/img-9.png"
                                alt="">
                        </div>
                        <p class="item__title">
                            TÔN TRỌNG
                        </p>
                        <p class="item__text">
                            Tôn trọng tất cả những người liên quan đến doanh nghiệp
                        </p>
                    </div>
                </div>
            </div>
            <h3>HÃY ĐẾN VỚI CHÚNG TÔI - CÔNG TY TNHH ĐIỀU HÒA MIỀN TRUNG - PHÂN PHỐI SỈ LẺ, GIÁ RẺ CHO MỌI NHÀ </h3>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <h4 class="title text-center d-block">Khách hàng nói gì về chúng tôi</h4>
            <div class="owl-carousel owl-theme mt-5" data-items="1" data-desktop-small="3" data-tablet="2"
                data-mobile="1" data-nav="false" data-dots="true" data-autoplay="false" data-speed="500"
                data-autotime="3000">
                <?php 
                    $rows = get_field('feedback');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                    ?>
                <div class="item shadow">
                    <div class="row">
                        <div class="col-4 m-auto">
                            <img src="<?php echo $row['anh_dai_dien'] ?>" alt="">
                        </div>
                        <div class="col-8">
                            <p class="fst-italic">“ <?php echo $row['danh_gia'] ?>”</p>
                            <p class="name"><?php echo $row['name'] ?></p>
                            <p><?php echo $row['chuc_vu'] ?></p>
                        </div>
                    </div>
                </div>
                <?php }} ?>
               
            </div>
        </div>

    </section>
</div>
<?php get_footer(); ?>