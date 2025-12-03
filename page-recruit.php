<?php get_header(); ?>
<main class="recruit-page layout-page">
    <section class="related-page__mv mv">
        <div class="related-page__mv-titleWrap mv__titleWrap">
            <p class="related-page__mv-titleEn mv__titleEn">Recruitment information</p>
            <h1 class="related-page__mv-titleJa mv__titleJa">採用情報</h1>
        </div>
        <div class="related-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/recruit/mv_recruit.jpg')); ?>" alt="一生懸命お仕事をしている男性スタッフ" width="1440" height="400">

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

    <section class="recruit-page__content layout-content" id="recruit">
        <div class="recruit-page__inner inner page-inner">
            <p class="recruit-page__content-guide">下記の職種を現在募集しております。</p>
            <div class="recruit-page__content-wrap content-wrap">
                <div class="recruit-table">
                    <div class="recruit-table__item">
                        <h2 class="recruit-table__term second-title-dot">介護士（正社員）高卒</h2>
                        <div class="recruit-table__content">
                            <p>【高卒】<span>月額203,000円</span></p>

                            <h3>▪︎内訳</h3>
                            <ul>
                                <li>基本給　150,000円</li>
                                <li>調整手当　20,000円</li>
                                <li>処遇改善金　33,000円</li>
                            </ul>

                            <h3>▪︎その他の手当</h3>
                            <ul>
                                <li>夜勤手当　7,000円/回</li>
                                <li>扶養手当　5,000円</li>
                                <li>住宅手当　15,000～20,000円<br class="u-mobile">（条件あり）</li>
                                <li>通勤手当　月額20,000円まで</li>
                            </ul>

                            <h3>▪︎賞与</h3>
                            <ul>
                                <li>年2回　4.00ヶ月（前年度実績）</li>
                            </ul>

                            <h3>▪︎時間外労働</h3>
                            <ul>
                                <li>平均2時間/月</li>
                            </ul>

                            <h3>▪︎年間休日</h3>
                            <ul>
                                <li>109日<br class="u-mobile">（1ヶ月9日休み、誕生日休1日）</li>
                            </ul>

                            <h3>▪︎勤務時間（交代制）</h3>
                            <ul>
                                <li>6:30～15:30</li>
                                <li>7:00～16:00</li>
                                <li>8:30～17:30</li>
                                <li>9:15～18:15</li>
                                <li>10:00～19:00</li>
                                <li>16:30～翌9:30<br class="u-mobile">（夜勤は月4～5回程度）<br>※休憩60分</li>
                            </ul>
                        </div>
                    </div>

                    <div class="recruit-table__item">
                        <h2 class="recruit-table__term second-title-dot">介護士（正社員）中途</h2>
                        <p class="recruit-table__item-text">経験や所持資格に応じて条件が変動するためお問合せください。</p>
                    </div>
                    <div class="recruit-table__item">
                        <h2 class="recruit-table__term second-title-dot">看護師（正社員）</h2>
                        <p class="recruit-table__item-text">経験や所持資格に応じて条件が変動するためお問合せください</p>
                    </div>
                    <div class="recruit-table__item">
                        <h2 class="recruit-table__term second-title-dot">厨房スタッフ(パート・正職員)　1名</h2>
                        <p class="recruit-table__item-text">
                            経験や所持資格に応じて条件が変動するためお問合せください。</p>

                    </div>
                    <div class="recruit-table__item" id="recruit-jyosyu">
                        <h2 class="recruit-table__term second-title-dot">介護助手の採用</h2>
                        <p class="recruit-table__item-text">
                            ヴィラとびしまでは、積極的に介護助手を採用しています。<br>
                            <br>【介護助手とは】<br>
                            介護職員が行っている身体介護以外の業務（シーツ交換や掃除など）をする職員のことです。<br>
                            <br>介護助手を採用することで、介護職員の業務負担が減り、利用者様と接する時間が増えます。<br>
                            そうすることで介護職員はより利用者様の介護に専念できるのです。<br>
                            <br>現在は4名の介護助手の方が活躍してくれています。<br>
                            <br>介護助手に興味がある方はお気軽にお問合せください。<br>
                        </p>
                    </div>

                </div>
            </div>
            <div class="related-page__slider page-slider">
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/recruit/img_p-recruit-slider01.jpg')); ?>" alt="リハビリスタッフが利用者の脚のストレッチを支援する機能訓練の様子" loading="lazy"></div>
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/recruit/img_p-recruit-slider02.jpg')); ?>" alt="介護スタッフが座る利用者に寄り添い声をかけるコミュニケーションの場面" loading="lazy"></div>
                <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/recruit/img_p-recruit-slider03.jpg')); ?>" alt="車椅子の利用者と向かい合い笑顔で会話する介護職員の様子" loading="lazy"></div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/com-banner'); ?>

</main>
<?php get_footer(); ?>