<?php get_header(); ?>
<main class="front-page">
    <section class="fv">
        <div class="fv__inner ">

            <div class="fv__img">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common/fv-pc.jpg')); ?>" media="(min-width: 768px)" />
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/fv-pc.jpg')); ?>" alt="職員と利用者が仲良くお話をしています" />
                </picture>
            </div>
            <div class="fv__text-wrap">
                <h2 class="fv__title"><span>笑顔輝く</span>寄り添う介護</h2>
                <p class="fv__message">ヴィラとびしまは、<br>安心と交流が自然に息づく介護を<br>目指しています</p>
            </div>
            <div class="fv__img-wrap">
                <!-- <div class="fv__img-item fv__img-item--upper"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_fv01.jpg')); ?>" alt=""></div>
                <div class="fv__img-item fv__img-item--lower"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_fv02.jpg')); ?>" alt=""></div> -->
                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_fv-group.png')); ?>" alt="ヴィラとびしまの利用者とスタッフの様子" class="fv__img-item--group">
                <!-- <div class="fv__tree-item-right"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-tree01.png')); ?>" alt=""></div> -->
            </div>
            <div class="fv__tree-item-left"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-tree02.png')); ?>" alt=""></div>

        </div>
    </section>
    <div class="fv__banner inner">
        <a href="<?php echo esc_url(home_url("/contact")) ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/fv_banner.png')); ?>" alt="空き状況確認・お問い合わせバナー">
        </a>
    </div>

    <section class="news js-fadeIn">
        <div class="news__inner inner">
            <div class="news__content">
                <div class="news__title-wrap">
                    <h2 class="news__sec-title">お知らせ</h2>
                    <p class="news__subtitle">NEWS</p>
                </div>
                <div class="news__list">
                    <?php
                    $news_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $news_query = new WP_Query($news_args);
                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                            $categories = get_the_category();
                            $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'お知らせ';
                    ?>
                            <a href="<?php echo esc_url(get_the_permalink()); ?>" class="news__item">
                                <div class="news__header">
                                    <span class="news__date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
                                    <span class="news__category"><?php echo esc_html($category_name); ?></span>
                                </div>
                                <p class="news__title"><?php the_title(); ?></p>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <div class="news__more">
                <a href="<?php echo esc_url(home_url("/information")) ?>">
                    <span class="news__more-arrow">▶︎</span>
                    <span class="news__more-text">一覧を見る</span>
                </a>
            </div>
    </section>

    <section class="community">
        <div class="community__inner inner">
            <div class="community__content">
                <div class="community__title sec-title js-fadeIn">
                    <p class="community__title-en sec-title__en">Care That Connects Life and Community</p>
                    <h2 class="community__title-ja sec-title__ja"> 施設と在宅をつなぐ、<br class="u-mobile">地域密着のケアサポート</h2>
                </div>
                <ul class="community__list js-fadeIn">
                    <li class="community__list-item">
                        <div class="community__list-img"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_community01.png')); ?>" alt="職員が利用者に説明をしています" loading="lazy" width="519" height="314">
                            <h3 class="community__list-title">入所サービス <span>residential care</span></h3>
                        </div>
                        <div class="community__list-content">
                            <p class="community__list-text">一時的に期間を決めて入所していただき、機能訓練などの施設サービスをご利用いただけます。</p>
                        </div>
                    </li>
                    <li class="community__list-item">
                        <div class="community__list-img"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_community02.png')); ?>" alt="利用者が職員と訓練をしています" loading="lazy" width="519" height="314">
                            <h3 class="community__list-title">ショートステイ<span>short stay</span></h3>
                        </div>
                        <div class="community__list-content">
                            <p class="community__list-text">一時的に期間を決めて入所していただき、機能訓練などの施設サービスをご利用いただけます。</p>
                        </div>
                    </li>
                    <li class="community__list-item">
                        <div class="community__list-img"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_community03.png')); ?>" alt="利用者が職員と体操をしています" loading="lazy" width="519" height="314">
                            <h3 class="community__list-title">通所リハビリ<span>day rehab</span></h3>
                        </div>
                        <div class="community__list-content">
                            <p class="community__list-text">ご自宅で療養中の方に昼間、身体や精神の機能を回復・維持するために施設で入浴・リハビリテーション・食事・レクリエーション等のサービスを日帰りでご利用いただけます。</p>
                        </div>
                    </li>
                    <li class="community__list-item">
                        <div class="community__list-img"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_community04.png')); ?>" alt="リハビリをしています" loading="lazy" width="519" height="314">
                            <h3 class="community__list-title">訪問リハビリ<span>home rehab</span></h3>
                        </div>
                        <div class="community__list-content">
                            <p class="community__list-text">リハビリスタッフがご自宅を訪問し、日常生活動作や歩行練習、家事、精神的サポートなどのリハビリテーションを行います。住み慣れた自宅で安心して過ごせるようにサポートいたします。手すりなど住宅環境の整備に関するアドバイスも行います。</p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <section class="about">
        <div class="about__inner inner">
            <div class="about__content">
                <div class="about__title-wrap js-fadeIn">
                    <p class="about__title-en sec-title__en">About Villa Tobishima</p>
                    <h2 class="about__title-ja sec-title__ja">ヴィラとびしまについて</h2>
                </div>
                <div class="about__img js-fadeIn"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_about01.jpg')); ?>" alt="介護老人保健施設ヴィラとびしまの施設内の様子" loading="lazy" width="1122" height="365"></div>
                <div class="about__content-wrap js-fadeIn">
                    <div class="about__info">
                        <div class="about__logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="介護老人保健施設ヴィラとびしまのロゴマーク" loading="lazy">
                        </div>
                        <div class="about__details">
                            <div class="about__address">
                                <p class="about__address-text">愛知県海部郡飛島村服岡4-1</p>
                                <p class="about__tel">TEL:0567-52-229</p>
                            </div>
                            <div class="about__business">
                                <p class="about__business-text">事業内容</p>
                                <ul class="about__business-list">
                                    <li>・介護老人保健施設（入所サービス）</li>
                                    <li>・短期入所療養介護（ショートステイサービス）</li>
                                    <li>・通所リハビリテーション（通所リハビリサービス）</li>
                                    <li>・訪問リハビリテーション（訪問リハビリサービス）</li>
                                </ul>
                            </div>
                            <div class="about__links">
                                <a href="#" class="about__link">
                                    <span><svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 16H22V18H0V16H2V1C2 0.734784 2.10536 0.48043 2.29289 0.292893C2.48043 0.105357 2.73478 0 3 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1V16H18V8H16V6H19C19.2652 6 19.5196 6.10536 19.7071 6.29289C19.8946 6.48043 20 6.73478 20 7V16ZM4 2V16H12V2H4ZM6 8H10V10H6V8ZM6 4H10V6H6V4Z" fill="white" />
                                        </svg></span>
                                    <span class="about__link-text">施設について詳しくこちら</span>
                                </a>
                                <div class="about__notice">
                                    <span class="about__notice-icon">▶︎</span>
                                    <p class="about__notice-text">介護職員等特定処遇改善加算</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about__schedule">
                        <div class="about__schedule-table">
                            <div class="about__schedule-item">
                                <div class="about__schedule-header">
                                    <div class="about__schedule-dot"></div>
                                    <h3 class="about__schedule-title">通所リハビリテーション（通常）</h3>
                                </div>
                                <div class="about__schedule-time">
                                    <p class="about__schedule-text">平日：9:10〜16:20</p>
                                </div>
                            </div>
                            <div class="about__schedule-item">
                                <div class="about__schedule-header">
                                    <div class="about__schedule-dot"></div>
                                    <h3 class="about__schedule-title">通所リハビリテーション（短時間）</h3>
                                </div>
                                <div class="about__schedule-time">
                                    <p class="about__schedule-text">平日：9:10〜11:30</p>
                                </div>
                            </div>
                            <div class="about__schedule-item">
                                <div class="about__schedule-header">
                                    <div class="about__schedule-dot"></div>
                                    <h3 class="about__schedule-title">訪問リハビリテーション</h3>
                                </div>
                                <div class="about__schedule-time">
                                    <p class="about__schedule-text">平日：8:30〜17:30</p>
                                </div>
                            </div>
                            <div class="about__schedule-item">
                                <div class="about__schedule-header">
                                    <div class="about__schedule-dot"></div>
                                    <h3 class="about__schedule-title">面会時間</h3>
                                </div>
                                <div class="about__schedule-time">
                                    <p class="about__schedule-text">平日：8:30〜18:30</p>
                                    <p class="about__schedule-text">土日祝：8:30〜17:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about__wrap js-fadeIn">
                    <div class="about__access"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3264.58334246483!2d136.7829999749782!3d35.092141962110745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60039cd7c2efb0df%3A0x9732386174973f0c!2z44CSNDkwLTE0MzEg5oSb55-l55yM5rW36YOo6YOh6aOb5bO25p2R5pyN5bKh77yU5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1761015407195!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>

            </div>

        </div>
    </section>

    <section class="recruitment">
        <div class="recruitment__bg-tree recruitment__bg-tree-lt"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_recrui-tree-lt.png')); ?>" alt=""></div>
        <div class="recruitment__bg-tree recruitment__bg-tree-rt"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_recrui-tree-rt.png')); ?>" alt=""></div>
        <div class="recruitment__inner inner">
            <div class="recruitment__title-wrap .recruitment__title-wrap">
                <p class="recruitment__title-en sec-title__en">Recruitment information</p>
                <h2 class="recruitment__title-ja sec-title__ja">採用情報</h2>
            </div>
            <div class="recruitment__content">
                <div class="recruitment__item-img js-fadeIn">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit01.jpg')); ?>" alt="団署の職員が並んでいます" loading="lazy" width="1122" height="440">
                </div>
                <div class="recruitment__text-content js-fadeIn">
                    <h3 class="recruitment__message">ヴィラとびしまで、<br>一緒に地域を支えませんか？</h3>
                    <p class="recruitment__text">私たちと一緒に働いてくれる方を募集しています。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="recruitment__more">
                    <a href="<?php echo esc_url(home_url("/recruitment")) ?>">
                        <span class="recruitment__more-icon">▶︎</span>
                        <p class="recruitment__more-text">もっとみる</p>
                    </a>
                </div>
            </div>
            <div class="recruit__slider-wrapper">
                <ul class="recruit__slider">
                    <li class="recruit__slide">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit02.jpg')); ?>" alt="ヴィラとびしまの中庭の様子" loading="lazy">
                    </li>
                    <li class="recruit__slide">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit03.jpg')); ?>" alt="ヴィラとびしまの部屋の様子です" loading="lazy">
                    </li>
                    <li class="recruit__slide">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit04.jpg')); ?>" alt="ヴィラとびしまの中庭の手すりつきスロープです" loading="lazy">
                    </li>
                    <li class="recruit__slide">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit05.jpg')); ?>" alt="利用者の方がじゃんけんアプリで遊んでいます" loading="lazy">
                    </li>
                </ul>
                <ul class="recruit__slider">
                    <li class="recruit__slide">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit02.jpg')); ?>" alt="ヴィラとびしまの中庭の様子" loading="lazy">
                    </li>
                    <li class="recruit__slide">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit03.jpg')); ?>" alt="ヴィラとびしまの部屋の様子です" loading="lazy">
                    </li>
                    <li class="recruit__slide">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit04.jpg')); ?>" alt="ヴィラとびしまの中庭の手すりつきスロープです" loading="lazy">
                    </li>
                    <li class="recruit__slide">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit05.jpg')); ?>" alt="利用者の方がじゃんけんアプリで遊んでいます" loading="lazy">
                    </li>
                </ul>
            </div>
            <ul class="recruit__list js-fadeIn">
                <li class="recruit__list-item">
                    <a href="#" class="recruit__list-link">
                        <div class="recruit__list-img">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit06.png')); ?>" alt="ヴィラとびしまのリハビリの様子です" loading="lazy" width="516" height="248">
                        </div>
                        <div class="recruit__list-content">
                            <span class="recruit__list-icon">▶︎</span>
                            <h3 class="recruit__list-title">ヴィラとびしまの取り組み</h3>
                        </div>
                    </a>
                </li>
                <li class="recruit__list-item">
                    <a href="#" class="recruit__list-link">
                        <div class="recruit__list-img">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit07.png')); ?>" alt="ヴィラとびしまの外観の様子です" loading="lazy" width="516" height="248">
                        </div>
                        <div class="recruit__list-content">
                            <span class="recruit__list-icon">▶︎</span>
                            <h3 class="recruit__list-title">良斉会について</h3>
                        </div>
                    </a>
                </li>
                <li class="recruit__list-item">
                    <a href="#" class="recruit__list-link">
                        <div class="recruit__list-img">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit08.png')); ?>" alt="ヴィラとびしまのエントランスの様子です" loading="lazy" width="516" height="248">
                        </div>
                        <div class="recruit__list-content">
                            <span class="recruit__list-icon">▶︎</span>
                            <h3 class="recruit__list-title">内科の紹介</h3>
                        </div>
                    </a>
                </li>
                <li class="recruit__list-item">
                    <a href="#" class="recruit__list-link">
                        <div class="recruit__list-img">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit09.png')); ?>" alt="利用者が集まるコミュニティスペースです" loading="lazy" width="516" height="248">
                        </div>
                        <div class="recruit__list-content">
                            <span class="recruit__list-icon">▶︎</span>
                            <h3 class="recruit__list-title">関連施設</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

</main>
<?php get_footer(); ?>