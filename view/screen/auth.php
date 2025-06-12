<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/view/header.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/view/navbar.php");
?>
<main class="body-background">
    <section class="banner banner__space overflow-hidden">
        <div class="container">
            <div class="banner__shape">
                <img src="/assets/images/banner-shape.png" alt="image not found">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="banner__content text-center">
                        <h1 class="mb-25 mb-xs-20 title-animation" style="perspective: 100px;">Tư vấn sức khỏe thông
                            minh cùng VieMed AI</h1>
                        <a href="/" class="rr-btn">
                            <div class="panel wow" style="visibility: visible; animation-name: panel;"></div>
                            <span class="btn-wrap">
                                <span class="text-one">Hỗ trợ trực tuyến</span>
                                <span class="text-two">Hỗ trợ tự động</span>
                            </span>
                        </a>
                        <div class="banner__media mt-45 mt-xs-35 position-relative">
                            <div class="panel wow" style="visibility: visible; animation-name: panel;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service service__space mt-50">
        <div class="container">
            <div class="row mb-minus-30">
                <!-- Cột 1 - Chiếm 4/12 = 33.33% -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service__item mb-30">
                        <div class="service__item-icon mb-20 mb-xs-15">
                            <img src="/assets/images/healthcare.png" alt="icon not found" class="w-25 h-25">
                        </div>
                        <h4 class="mb-25 mb-xs-20">Tư vấn sức khỏe</h4>
                        <p class="mb-40 mb-xs-30">Dịch vụ tư vấn Sức khỏe của VieMed cung cấp giải pháp chăm sóc sức
                            khỏe thông minh và tiện lợi thông qua hệ thống AI hiện đại </br></br></br> </p>
                    </div>
                </div>

                <!-- Cột 2 - Chiếm 4/12 = 33.33% -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service__item mb-30">
                        <div class="service__item-icon mb-20 mb-xs-15">
                            <img src="/assets/images/examination.png" alt="icon not found" class="w-25 h-25">
                        </div>
                        <h4 class="mb-25 mb-xs-20">Tư vấn quy trình khám chữa bệnh</h4>
                        <p class="mb-40 mb-xs-30">Dịch vụ tư vấn Quy trình khám chữa bệnh của VieMed hướng dẫn chi
                            tiết từng bước giúp bệnh nhân dễ dàng tiếp cận dịch vụ y tế </br></br> </p>
                    </div>
                </div>

                <!-- Cột 3 - Chiếm 4/12 = 33.33% -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service__item mb-30">
                        <div class="service__item-icon mb-20 mb-xs-15">
                            <img src="/assets/images/laboratory.png" alt="icon not found" class="w-25 h-25">
                        </div>
                        <h4 class="mb-25 mb-xs-20">Tư vấn dịch vụ khám</h4>
                        <p class="mb-40 mb-xs-30">Dịch vụ khám tại VieMed cung cấp hệ thống trang thiết bị y tế hiện
                            đại, ứng dụng công nghệ tiên tiến với mục đích nâng cao hiệu quả điều trị và tối ưu hóa
                            trải nghiệm khám chữa bệnh cho bệnh nhân</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="footer__cta footer__cta-bottom-up theme-bg-1 mt-50">
    <div class="container">
        <div class="row mb-minus-30">
            <div class="col-md-6">
                <div
                    class="footer__cta-item mb-30 theme-bg-primary d-flex flex-lg-row flex-column align-items-lg-center">
                    <!-- <div class="footer__cta-item-icon d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="/assets/images/footer__cta-item-1.png" alt="icon not found">
                    </div> -->

                    <div class="footer__cta-item-text">
                        <h4 class="color-white mb-15 mb-10">Đội ngũ y bác sĩ chuyên nghiệp</h4>
                        <p class="color-white mb-0">Đội ngũ y bác sĩ VieMed gồm các chuyên gia đầu ngành từ bệnh
                            viện lớn, trình độ Thạc sĩ trở lên với 10+ năm kinh nghiệm.
                            Với đa dạng chuyên khoa và phương pháp hội chẩn hiện đại, chúng tôi cam kết mang đến
                            dịch vụ khám chữa bệnh chính xác và tận tâm nhất.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div
                    class="footer__cta-item mb-30 theme-bg-glow d-flex flex-lg-row flex-column align-items-lg-center">
                    <!-- <div class="footer__cta-item-icon d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="/assets/images/footer__cta-item-2.png" alt="icon not found">
                    </div> -->

                    <div class="footer__cta-item-text">
                        <h4 class="color-white mb-15 mb-10">Trang thiết bị hiện đại</h4>
                        <p class="color-white mb-0">VieMed trang bị hệ thống máy móc y tế hiện đại nhất, từ thiết bị
                            chẩn đoán hình ảnh cao cấp đến công nghệ AI phân tích, mang lại kết quả khám chữa bệnh
                            chính xác và nhanh chóng </br></br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/view/footer.php");
?>