<?php get_header(); ?>
<main class="service-page layout-page">
    <section class="related-page__mv mv">
        <div class="related-page__mv-titleWrap mv__titleWrap">
            <p class="related-page__mv-titleEn mv__titleEn">About initiatives</p>
            <h1 class="related-page__mv-titleJa mv__titleJa">取り組みについて</h1>
        </div>
        <div class="related-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-mv.jpg')); ?>"
                alt="入居者とスタッフが一緒にいる写真" width="1440" height="400">

        </div>
        <div class="related-page__mv-tree mv__tree">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_tree.png')); ?>" alt="" loading="lazy">
        </div>
        <div class="related-page__mv-bg mv__dot">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_mv-dot.png')); ?>" alt=""
                loading="lazy">
        </div>
    </section>
    <div class="breadcrumbs inner">
        <?php if (function_exists('bcn_display')) { ?>
            <div class=vocab='http://schema.org/' typeof=>
                <?php bcn_display(); ?>
            </div>
        <?php } ?>
    </div>

    <section class="initiative-page">
        <div class="initiative-page__inner inner page-inner">

            <h3 class="initiative-page__title second-title-underline">介護老人保健施設とは</h3>
            <div class="content-wrap">
                <div class="initiative-page__container">
                    <div class="swiper js-slider">
                        <div class="swiper-wrapper">

                            <!-- ▼スライド1 -->
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-slide1.jpg')); ?>"
                                    alt="老健とは">
                            </div>

                            <!-- ▼スライド2 -->
                            <!-- <div class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-slide2.jpg')); ?>"
                                alt="病院との違い">
                        </div> -->

                            <!-- ▼スライド3 -->
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-slide3.jpg')); ?>"
                                    alt="特別養護老人ホーム">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-slide4.jpg')); ?>"
                                    alt="特別養護老人ホーム">
                            </div>

                        </div>

                        <!-- ▼左右の矢印 -->
                        <!-- <div class="swiper-button-prev js-slider-prev"></div>
                    <div class="swiper-button-next js-slider-next"></div> -->

                    </div>
                    <div class="swiper-button-prev js-slider-prev"></div>
                    <div class="swiper-button-next js-slider-next"></div>

                </div>

                <p class="initiative-page__center">出典：全国老人保健施設協会</p>

                <div class="initiative-page__texts">
                    <p class="initiative-page__text">
                        「ろうけん＝介護老人保健施設」は、介護を必要とする高齢者の自立を支援し、家庭への復帰を目指すために、医師による医学的管理の下、看護・介護といったケアはもとより、作業療法士や理学療法士等によるリハビリテーション、また、栄養管理・食事・入浴などの日常サービスまで併せて提供する施設です。<br>
                        利用者ひとりひとりの状態や目標に合わせたケアサービスを、医師をはじめとする専門スタッフが行い、夜間でも安心できる体制を整えています。</p>
                    <p class="initiative-page__text">
                        介護老人保健施設をご利用いただける方は、介護保険法による被保険者で要介護認定を受けた方のうち、病状が安定していて入院治療の必要がない要介護度１～５の方で、リハビリテーションを必要とされる方です。
                    </p>
                    <p class="initiative-page__text">
                        介護老人保健施設は、常に利用者主体の質の高い介護サービスの提供を心がけ、地域に開かれた施設として、利用者のニーズにきめ細かく応える施設です。介護予防を含めた教育・啓発活動など幅広い活動を通じ、在宅ケア支援の拠点となる事を目指して、ご利用者・ご家族の皆様が、快適に自分らしい日常生活を送れるよう支援をしています。
                    </p>
                    <p class="initiative-page__text">
                        老健に入所してからリハビリを受けていただいてから自宅等の在宅生活へ戻り、通所リハビリやショートステイ、訪問リハビリを利用しながら在宅生活を継続していただくことを支援していきます。<br>
                        また入所が必要となったら再入所（リピート利用）していただくという流れが理想的な利用方法です。<br>
                        もちろん、在宅生活が困難になってしまった際には、長期入所することも可能です。</p>
                    <p class="initiative-page__pamphlet">一般向け老健施設パンフレットはこちら</p>
                    <a class="initiative-page__pamphlet-link">老健ってなに？！</a>
                </div>

            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>