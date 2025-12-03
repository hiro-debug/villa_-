<?php get_header(); ?>
    <main class="front-page">
        <section class="fv">
            <div class="fv__inner">
                <div class="fv__img">
                    <picture>
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common/fv-pc.png')); ?>" media="(min-width: 768px)" />
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/fv_sp.jpg')); ?>" alt="職員と利用者が仲良くお話をしています" />
                    </picture>
                </div>
                <div class="fv__text-wrap">
                    <h2 class="fv__title"><span>笑顔輝く</span><br><span>寄り添う介護</span></h2>
                    <p class="fv__message">ヴィラとびしまは、<br>安心と交流が自然に息づく介護を<br>目指しています</p>
                </div>
                <div class="fv__img-wrap">
                    <!-- <div class="fv__img-item fv__img-item--upper"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_fv01.jpg')); ?>" alt=""></div>
                <div class="fv__img-item fv__img-item--lower"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_fv02.jpg')); ?>" alt=""></div> -->
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_fv-group.png')); ?>" alt="ヴィラとびしまの利用者とスタッフの様子" class="fv__img-item--group">
                    <!-- <div class="fv__tree-item-right"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-tree01.png')); ?>" alt=""></div> -->
                </div>
                <div class="fv__tree-item-left"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-tree02.png')); ?>" alt=""></div>
                <!-- <div class="fv__banner inner">
                <a href="<?php echo esc_url(home_url("/availability")) ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/fv_banner.png')); ?>" alt="空き状況確認・お問い合わせバナー">
                </a>
            </div> -->
            </div>
        </section>

        <div class="consult-banner-wrap inner">
            <div class="consult-banner">
                <a href="<?php echo esc_url(home_url("/availability")) ?>">
                    <div class="consult-banner__inner">
                        <div class="consult-banner__image-wrapper">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_nurse.png')); ?>" alt="">
                        </div>
                        <div class="consult-banner__content">
                            <div class="consult-banner__title-wrap">
                                <span class="consult-banner__title-icon"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_bubble.png')); ?>" alt=""></span>
                                <h2 class="consult-banner__title">
                                    ヴィラとびしま<span>入所のご相談</span>
                                </h2>
                            </div>
                            <p class="consult-banner__message">
                                見学や、ご相談は随時承っております。
                            </p>
                            <div class="consult-banner__details">
                                <p class="consult-banner__date">2025.12.12</p>
                                <p class="consult-banner__status">
                                    一部空きがございます。
                                </p>
                            </div>
                            <p class="consult-banner__button">
                                <span class="consult-banner__button-icon">
                                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.06504 2.69059H6.60564C6.8597 2.69059 7.11375 2.95097 7.11375 3.21135V9.89443C7.11375 10.1548 6.8597 10.4152 6.60564 10.4152H4.06504C3.81097 10.4152 3.55683 10.1548 3.55683 9.89443V3.21135C3.55683 2.95097 3.81097 2.69059 4.06504 2.69059ZM15.7518 10.6756L16.0905 10.4152L15.3283 9.54726C14.9896 9.80764 14.5661 9.98123 14.1427 10.068V15.7964H14.7356C15.4131 15.7964 15.4131 16.8379 14.7356 16.8379H0.508122C-0.169374 16.8379 -0.169374 15.7964 0.508122 15.7964H1.10099V0.520758C1.10099 0.260378 1.35503 0 1.60909 0H13.6346C13.8887 0 14.1427 0.260378 14.1427 0.520758V3.03776C15.7518 3.38494 16.9374 4.86042 16.9374 6.5095C16.9374 8.15857 16.5987 8.24536 16.0905 8.85291L16.8527 9.72085L17.1915 9.46046C17.3609 9.28688 17.6996 9.28688 17.8689 9.46046L19.8168 11.7171C19.9862 11.8907 19.9862 12.2379 19.8168 12.4114L18.4618 13.6265C18.2924 13.8001 17.9537 13.8001 17.7843 13.6265L15.8364 11.3699C15.6671 11.1963 15.6671 10.8492 15.8364 10.6756H15.7518ZM17.3608 10.502L16.6833 11.1095L18.0384 12.6718L18.7158 12.0643L17.3608 10.502ZM4.82714 11.1963H10.3318C10.5858 11.1963 10.84 11.4567 10.84 11.7171V15.7964H13.1265V10.1548C12.6184 10.1548 12.1103 9.98123 11.6869 9.72085V9.89443C11.6869 10.1548 11.4327 10.4152 11.1787 10.4152H8.63805C8.38399 10.4152 8.12995 10.1548 8.12995 9.89443V3.21135C8.12995 2.95097 8.38399 2.69059 8.63805 2.69059H11.1787C11.4327 2.69059 11.6869 2.95097 11.6869 3.21135V3.47173C12.1103 3.21135 12.6184 3.03776 13.1265 3.03776V1.12831H2.11719V15.8832H4.4037V11.8039C4.4037 11.5435 4.65784 11.2831 4.91191 11.2831L4.82714 11.1963ZM9.90835 15.7964V12.2379H8.12995V15.7964H9.90835ZM5.33534 12.1511V15.7096H7.11375V12.1511H5.33534ZM13.3806 3.9057C12.0256 3.9057 10.84 5.03401 10.84 6.5095C10.84 7.98498 11.9409 9.11329 13.3806 9.11329C14.8203 9.11329 15.9212 7.98498 15.9212 6.5095C15.9212 5.03401 14.8203 3.9057 13.3806 3.9057ZM6.09744 3.64532H4.57314V9.28688H6.09744V3.64532ZM10.6706 4.25287V3.64532H9.14625V9.28688H10.6706V8.76612C10.1624 8.15857 9.90835 7.37743 9.90835 6.5095C9.90835 5.64156 10.2471 4.86042 10.6706 4.25287Z" fill="white" />
                                    </svg> </span>
                                今すぐ空き状況を確認
                            </p>
                        </div>
                    </div>
                </a>
            </div>
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
                                    <a href="<?php echo esc_url(home_url("/about")) ?>" class="about__link">
                                        <span><svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 16H22V18H0V16H2V1C2 0.734784 2.10536 0.48043 2.29289 0.292893C2.48043 0.105357 2.73478 0 3 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1V16H18V8H16V6H19C19.2652 6 19.5196 6.10536 19.7071 6.29289C19.8946 6.48043 20 6.73478 20 7V16ZM4 2V16H12V2H4ZM6 8H10V10H6V8ZM6 4H10V6H6V4Z" fill="white" />
                                            </svg></span>
                                        <span class="about__link-text">施設について詳しくこちら</span>
                                    </a>
                                    <div class="about__notice">
                                        <a href="<?php echo esc_url(home_url("/")) ?>">
                                            <span class="about__notice-icon">▶︎</span>
                                            <p class="about__notice-text">介護職員等特定処遇改善加算</p>
                                        </a>
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
                        <a href="<?php echo esc_url(home_url("/recruit")) ?>">
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
                        <a href="<?php echo esc_url(home_url("/initiative")) ?>" class="recruit__list-link">
                            <div class="recruit__list-img">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit06.png')); ?>" alt="ヴィラとびしまのリハビリの様子です" loading="lazy" width="516" height="248">
                            </div>
                            <div class="recruit__list-content">
                                <span class="recruit__list-icon">▶︎</span>
                                <h3 class="recruit__list-title">ヴィラとびしまの魅力</h3>
                            </div>
                        </a>
                    </li>
                    <li class="recruit__list-item">
                        <a href="<?php echo esc_url(home_url("/ryousaikai")) ?>" class="recruit__list-link">
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
                        <a href="<?php echo esc_url(home_url("/medical-institution")) ?>" class="recruit__list-link">
                            <div class="recruit__list-img">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit08.png')); ?>" alt="ヴィラとびしまのエントランスの様子です" loading="lazy" width="516" height="248">
                            </div>
                            <div class="recruit__list-content">
                                <span class="recruit__list-icon">▶︎</span>
                                <h3 class="recruit__list-title">隣接する内科の紹介</h3>
                            </div>
                        </a>
                    </li>
                    <li class="recruit__list-item">
                        <a href="<?php echo esc_url(home_url("/related")) ?>" class="recruit__list-link">
                            <div class="recruit__list-img">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_recruit10.png')); ?>" alt="やすらぎの里の外観です" loading="lazy" width="516" height="248">
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