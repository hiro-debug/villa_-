<?php get_header(); ?>
<main class="ryousaikai-page layout-page">
    <section class="related-page__mv mv">
        <div class="related-page__mv-titleWrap mv__titleWrap">
            <p class="related-page__mv-titleEn mv__titleEn">Profile</p>
            <h1 class="related-page__mv-titleJa mv__titleJa">良斉会について</h1>
        </div>
        <div class="related-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/about/mv_about.jpg')); ?>" alt="代表の銅像です" width="1440" height="400">

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

    <section class="ryousaikai-page__content layout-content">
        <div class="ryousaikai-page__inner inner page-inner">
            <div class="ryousaikai-page__content-wrap content-wrap">
                <div class="about-page__company-info" id="profile">
                    <div class="about-page__company-info-list">
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">運営法人</dt>
                                <dd class="about-page__company-info-value">
                                    <p>医療法人　良斉会</p>
                                </dd>
                            </div>
                        </div>
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">代表者</dt>
                                <dd class="about-page__company-info-value">
                                    <p>理事長　荒川　直之</p>
                                </dd>
                            </div>
                        </div>
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">所在地</dt>
                                <dd class="about-page__company-info-value">
                                    <p>愛知県海部郡飛島村服岡４－１</p>
                                </dd>
                            </div>
                        </div>
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">連絡先</dt>
                                <dd class="about-page__company-info-value">
                                    <p>0567-52-2290</p>
                                </dd>
                            </div>
                        </div>
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">スタッフ数</dt>
                                <dd class="about-page__company-info-value">
                                    <p>95人（アルバイト・パート含む）</p>
                                </dd>
                            </div>
                        </div>
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">事業内容</dt>
                                <dd class="about-page__company-info-value">
                                    <p>介護老人保健施設（入所サービス）</p>
                                    <p>短期入所療養介護（ショートステイサービス）</p>
                                    <p>通所リハビリテーション（通所リハビリサービス）</p>
                                    <p>訪問リハビリテーション（訪問リハビリサービス）</p>
                                </dd>
                            </div>
                        </div>
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">その他の業務</dt>
                                <dd class="about-page__company-info-value">
                                    <p>介護なんでも相談室</p>
                                    <p>飛島村避難所</p>
                                </dd>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
            <div class="about-page__slider page-slider">
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/ryousaikai/img_p-ryousaikai-slider02.jpg')); ?>" alt="愛知県飛島村の医療法人良斉会ヴィラとびしまの個別リハビリテーション指導風景。介護スタッフが利用者と向き合い、リハビリテーション機器を使った個別カウンセリングや作業療法を行う様子" loading="lazy"></div>
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/ryousaikai/img_p-ryousaikai-slider01.jpg')); ?>" alt="ヴィラとびしまの広々としたリハビリテーション・レクリエーションルーム。自然光が差し込む明るい空間で、複数のベッドや車椅子、リハビリテーション機器が配置された機能訓練室。利用者とスタッフが共に活動するデイサービス施設" loading="lazy"></div>
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/ryousaikai/img_p-ryousaikai-slider03.jpg')); ?>" alt="医療法人良斉会ヴィラとびしまの事務スタッフがパソコン作業を行うオフィス環境。介護施設の運営サポートや相談窓口業務を担う事務スタッフの様子。愛知県飛島村の介護施設運営" loading="lazy"></div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/com-banner'); ?>
</main>
<?php get_footer(); ?>