<?php get_header(); ?>
<main class="about-page layout-page">
    <section class="about-page__mv mv">
        <div class="about-page__mv-titleWrap mv__titleWrap">
            <p class="about-page__mv-titleEn mv__titleEn">About the facility</p>
            <h1 class="about-page__mv-titleJa mv__titleJa">施設について</h1>
        </div>
        <div class="about-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/about/mv_about.jpg')); ?>" alt="介護老人保健施設ヴィラとびしまの施設外観" width="1440" height="400">

        </div>
        <div class="about-page__mv-tree mv__tree">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_tree.png')); ?>" alt="" loading="lazy">
        </div>
        <div class="about-page__mv-bg mv__dot">
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

    <section class="about-page__content">
        <div class="about-page__inner inner page-inner">
            <div class="about-page__content-wrap content-wrap">
                <div class="about-page__info-wrap-container">
                    <div class="about-page__info-wrap">
                        <div class="about-page__heading">
                            <div class="about-page__title-group">
                                <p class="about-page__title second-title-underline">介護老人保健施設</p>
                                <h2 class="about-page__title-main">ヴィラとびしま</h2>
                            </div>
                            <div class="about-page__description">
                                <ul class="about-page__description-list">
                                    <li>・入所（定員100名）</li>
                                    <li>・ショートステイ（若干名）</li>
                                    <li>・通所リハビリテーション（定員40名）</li>
                                    <li>・短時間通所リハビリテーション（定員5名）<br>月～金曜日　9:10～16:20（短時間9:10～11:30）</li>
                                    <li>・訪問リハビリテーション<br>月～金曜日　8:30~17:30</li>
                                    <li>・面会時間<br>月～金曜日　8:30~18:30<br>土日祝　8:30~17:00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="about-page__info-wrapImg"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/about/img_p-about01.jpg')); ?>" alt="" loading="lazy"></div>
                </div>
                <div class="about-page__company-info">
                    <div class="about-page__company-info-list">
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">施設名</dt>
                                <dd class="about-page__company-info-value">
                                    <p>医療法人　良斉会</p>
                                    <p>介護老人保健施設ヴィラとびしま</p>
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
                                    <p>80人</p>
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
                        <div class="about-page__company-info-item">
                            <div class="about-page__company-info-header">
                                <dt class="about-page__company-info-label">アクセス</dt>
                                <dd class="about-page__company-info-value">
                                    <p>車　：東名阪自動車道蟹江ＩＣより西尾張中央道南へ約１０分</p>
                                    <p>電車：近鉄佐古木駅より車で約２０分
                                    <br><span>近鉄蟹江駅（名古屋から急行・準急で１０分）より車で約１５分</span></p>
                                    <p>バス：近鉄線「蟹江」駅からバス１５分「神戸山」バス停前</p>

                                </dd>
                            </div>
                        </div>

                    </div>
                    <div class="about-pageMap__wrap">
                        <div class="bout-pageMap__access"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3264.583205930113!2d136.78298951043183!3d35.09214537266953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60039cd7c10c89b3%3A0xfa4bb630341df74a!2z44CSNDkwLTE0MzEg5oSb55-l55yM5rW36YOo6YOh6aOb5bO25p2R5pyN5bKh77yU5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1763446457280!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>

                </div>
            </div>

            <div class="about-page__disclosure">
                <div class="about-page__disclosure-container">
                    <div class="about-page__disclosure-item">
                            <!-- <div class="about-page__disclosure-icon"></div> -->
                            <h3 class="about-page__disclosure-title second-title-dot">所定疾患施設療養費算定状況</h3>
                        <div class="about-page__disclosure-body">
                            <ul class="about-page__disclosure-list">
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">平成26年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">平成27年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">平成28年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">平成29年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">平成30年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">平成31年/令和元年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">令和2年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">令和3年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">令和4年度算定状況</span>
                                    </a>
                                </li>
                                <li class="about-page__disclosure-list-item">
                                    <a href="#" class="about-page__disclosure-link">
                                        <span class="about-page__disclosure-arrow">▶︎</span>
                                        <span class="about-page__disclosure-text">令和5年度算定状況</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-page__disclosure-item">
                            <h3 class="about-page__disclosure-title second-title-dot">介護職員等特定処遇改善加算にかかる情報公開（見える化要件）</h3>
                        <div class="about-page__disclosure-body">
                            <div class="about-page__disclosure-content">
                                <p class="about-page__disclosure-description">当法人の福祉・介護職員等特定処遇改善加算の取得状況と賃金以外の処遇改善に関する具体的な取り組みは以下を参照してください。</p>
                            </div>
                            <a href="#" class="about-page__disclosure-link about-page__disclosure-link--external">
                                <span class="about-page__disclosure-arrow">▶︎</span>
                                <span class="about-page__disclosure-text">介護職員等特定処遇改善加算に係る公表について</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="availability__slider page-slider">
            <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/about/img_p-about-slider01.jpg')); ?>" alt="ヴィラとびしまの個室の様子です"></div>
            <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/about/img_p-about-slider02.jpg')); ?>" alt="4人部屋の様子です"></div>
            <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/about/img_p-about-slider03.jpg')); ?>" alt="利用者とスタッフが笑顔で交流する温かい介護サービスの様子"></div>
        </div>
    </section>

    <?php get_template_part('template-parts/com-banner'); ?>
</main>
<?php get_footer(); ?>