<?php get_header() ?>
<main class="">
    <section class="banner-contact">
        <div class="img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/banner-contact.jpg" alt="">
        </div>
    </section>
    <section class="content-contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="text">
                        <h2 class="fw-bold">
                            Cám ơn quý khách đã ghé thăm. Mọi yêu cầu, xin vui lòng ghé thăm Công ty Điều Hoà Miền Trung
                            hoặc liên hệ với chúng tôi qua:
                        </h2>
                        <p>
                            1. Đường dây nóng để được tư vấn trực tiếp về các vấn đề liên quan đến điều hoà, máy
                            lạnh.<br>
                            2. Điền theo bảng mẫu bên phải, đội ngũ kỹ thuật của Điều Hoà Miền Trung sẽ luôn sẵn sàng
                            được hỗ trợ quý khách:
                        </p>
                    </div>
                    <div class="address">
                        <div class="item d-flex">
                            <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-contact-1.svg" alt=""></a>
                            <a href="" class="text mt-2 mt-md-3">K5/16 Ngô Quyền, Phường Thọ Quang, Quận Sơn Trà</a>
                        </div>
                        <div class="item d-flex">
                            <a href=""><img class="" src="<?php bloginfo('template_directory'); ?>/assets/images/icon-contact-4.png" alt=""></a>
                            <a href="tel:0905293668" class="text">
                                Hotline: 0905.293.668</a>
                        </div>
                        <div class="item d-flex">
                            <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-contact-3.svg" alt=""></a>
                            <a href="" class="text">dieuhoamientrung2020@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form rounded">
                        <?php echo do_shortcode('[contact-form-7 id="58" title="Form liên hệ 1"]'); ?>
                    </div>
                </div>
            </div>
            <div class="bot">
                <div class="icon">
                    <a href="" class="fa rounded-circle"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="ist rounded-circle"><i class="fab fa-instagram"></i></a>
                    <a href="" class="tw rounded-circle"><i class="fab fa-twitter"></i></a>
                    <a href="" class="gg rounded-circle"><i class="fab fa-google"></i></a>
                </div>
                <div class="map rounded">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1916.6876124989462!2d108.24416!3d16.0978791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217fbac098151%3A0x6f974d401ea4ed11!2zQ8O0bmcgVHkgVG5oaCDEkGnhu4F1IEjDsmEgTWnhu4FuIFRydW5n!5e0!3m2!1svi!2s!4v1634874053079!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </section>
</main>

<?php get_footer() ?>