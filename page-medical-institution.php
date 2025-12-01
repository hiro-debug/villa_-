<?php get_header(); ?>
<main class="medical-institution-page layout-page">
    <section class="related-page__mv mv">
        <div class="related-page__mv-titleWrap mv__titleWrap">
            <p class="related-page__mv-titleEn mv__titleEn">Related facilities</p>
            <h1 class="related-page__mv-titleJa mv__titleJa">隣接する内科の紹介</h1>
        </div>
        <div class="related-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/medical/mv_medical.jpg')); ?>" alt="陽の当たるロビーの様子です" width="1440" height="400">

        </div>
        <div class="related-page__mv-tree mv__tree">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_tree.png')); ?>" alt="" loading="lazy">
        </div>
        <div class="related-page__mv-bg mv__dot">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_mv-dot.png')); ?>" alt="" loading="lazy">
        </div>
    </section>
    <div class="breadcrumbs inner">
        <?php if (function_exists('bcn_display')) { ?>
            <div class=vocab='http://schema.org/' typeof=>
                <?php bcn_display(); ?>
            </div>
        <?php } ?>
    </div>

    <section class="medical-institution-page__content layout-content">
        <div class="medical-institution-page__inner inner page-inner">
            <div class="medical-institution-page__content-wrap content-wrap">
                <div class="medical-page__info-wrap-container">
                    <div class="medical-page__info-wrap">
                        <div class="medical-page__heading">
                            <div class="medical-page__title-group">
                                <p class="medical-page__title second-title-underline">併設医療機関</p>
                                <h2 class="medical-page__title-main">加藤胃腸科内科<br>とびしまこどもクリニック</h2>
                            </div>

                        </div>
                        <p class="medical-page__description-text">加藤胃腸科内科とびしまこどもクリニックは<br class="u-desktop">施設に隣接しているので、検査などもすぐに実施できます。</p>
                    </div>
                    <div class="medical-page__info-wrapImg"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/medical/img_medical01.jpg')); ?>" alt="加藤胃腸科内科・とびしまこどもクリニックの外観です" loading="lazy" width="454" height="318"></div>
                </div>
                <div class="medical-page__table">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/medical/img_medical02.jpg')); ?>" alt="" loading="lazy" width="535" height="508">
                </div>
            </div>
            <div class="related-page__slider page-slider">
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/medical/img_p-medical-slider01.jpg')); ?>" alt="愛知県飛島村の医療法人良斉会ヴィラとびしまの介護スタッフによる個別ケア。利用者に細やかなサポートを提供する丁寧な介護サービス" loading="lazy" width="358" height="239"></div>
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/medical/img_p-medical-slider02.jpg')); ?>" alt="ヴィラとびしまの介護スタッフと車椅子の高齢者と向かい合い、認知機能トレーニングを行っています" loading="lazy" width="358" height="239"></div>
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/medical/img_p-medical-slider03.jpg')); ?>" alt="医療法人良斉会ヴィラとびしまのリハビリテーションサポート。スタッフが高齢者の機能訓練を補助し、リハビリテーション機器を使った運動をサポート" loading="lazy" width="358" height="239"></div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/com-banner'); ?>

</main>
<?php get_footer(); ?>