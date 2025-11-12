<?php get_header(); ?>
<main class="availability layout-page">
    <section class="availability__mv mv">
        <div class="availability__mv-titleWrap mv__titleWrap">
            <p class="availability__mv-titleEn mv__titleEn">Availability</p>
            <h1 class="availability__mv-titleJa mv__titleJa">空室状況</h1>
        </div>
        <div class="availability__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_availability.jpg')); ?>" alt="利用者の方の素敵な笑顔です" width="1440" height="400">
        </div>
        <div class="availability__mv-tree mv__tree">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_tree.png')); ?>" alt="">
        </div>
        <div class="availability__mv-dot mv__dot">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_mv-dot.png')); ?>" alt="">
        </div>


    </section>
    <div class="breadcrumbs inner">
        <?php if (function_exists('bcn_display')) { ?>
            <div class=vocab='http://schema.org/' typeof=>
                <?php bcn_display(); ?>
            </div>
        <?php } ?>
    </div>



    <section class="availability__content">
        <div class="availability__table-inner inner">
            <div class="availability__table-wrap">
                <h3 class="availability__table-name">通所リハビリテーション</h3>
                <table class="availability__table-content">
                    <thead>
                        <tr class="availability__table-header">
                            <th class="availability__table-cell availability__table-cell--time"></th>
                            <th class="availability__table-cell">月</th>
                            <th class="availability__table-cell">火</th>
                            <th class="availability__table-cell">水</th>
                            <th class="availability__table-cell">木</th>
                            <th class="availability__table-cell">金</th>
                            <th class="availability__table-cell">土</th>
                            <th class="availability__table-cell">日</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $companyInfo = get_field('table_am');
                        ?>
                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">9:10～11:30</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $companyInfo['acf_mon']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--limited"><?php echo $companyInfo['acf_thu']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--unavailable"><?php echo $companyInfo['acf_wed']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--unavailable"><?php echo $companyInfo['acf_thu']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $companyInfo['acf_fri']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                        </tr>
                        <?php
                        $companyInfo = get_field('table_pm');
                        ?>

                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">9:10～16:20</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $companyInfo['acf_mon-pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $companyInfo['acf_thu-pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $companyInfo['acf_wed-pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $companyInfo['acf_thu-pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $companyInfo['acf_fri-pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="availability__table-attention">〇:すぐにご利用いただけます　▲:お問い合わせください　×:お待ち願います</p>
            </div>

            <div class="availability__table-wrap">
                <h3 class="availability__table-name">入所サービス・ショートステイ</h3>
                <table class="availability__table-content capacity-table">
                    <thead>
                        <tr class="availability__table-header">
                            <th class="availability__table-cell availability__table-cell--time"></th>
                            <th class="availability__table-cell">個室</th>
                            <th class="availability__table-cell">4名1室</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $capacity = get_field('table_fe');
                        ?>

                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">女性</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $capacity['private_fe']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--limited"><?php echo $capacity['group_fe']; ?></span>
                            </td>
                        </tr>
                        <?php
                        $capacity = get_field('table_ma');
                        ?>

                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">男性</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $capacity['private_ma']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $capacity['group_ma']; ?></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="availability__table-wrap">
                <h3 class="availability__table-name">訪問リハビリテーション</h3>
                <table class="availability__table-content">
                    <thead>
                        <tr class="availability__table-header">
                            <th class="availability__table-cell availability__table-cell--time"></th>
                            <th class="availability__table-cell">月</th>
                            <th class="availability__table-cell">火</th>
                            <th class="availability__table-cell">水</th>
                            <th class="availability__table-cell">木</th>
                            <th class="availability__table-cell">金</th>
                            <th class="availability__table-cell">土</th>
                            <th class="availability__table-cell">日</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $invite = get_field('invite_liha');
                        ?>

                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">午前</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $invite['invite_liha-mon-am']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--limited"><?php echo $invite['invite_liha-tue-am']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--unavailable"><?php echo $invite['invite_liha-wed-am']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--unavailable"><?php echo $invite['invite_liha-thu-am']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $invite['invite_liha-fri-am']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                        </tr>
                        <?php
                        $invitePm = get_field('invite_liha_pm');
                        ?>

                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">午後</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $invitePm['invite_liha_mon_pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $invitePm['invite_liha_thu_pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $invitePm['invite_liha_wed_pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $invitePm['invite_liha_thu_pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available"><?php echo $invitePm['invite_liha_fri_pm']; ?></span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="availability__table-attention">〇:すぐにご利用いただけます　▲:お問い合わせください　×:お待ち願います</p>
            </div>

        </div>
        <div class="availability__slider page-slider">
            <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_ravailability-slider01.jpg')); ?>" alt="ヴィラとびしまの個室の様子です"></div>
            <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_ravailability-slider02.jpg')); ?>" alt="4人部屋の様子です"></div>
            <div class="page-slider__item"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/img_ravailability-slider03.jpg')); ?>" alt="利用者とスタッフが笑顔で交流する温かい介護サービスの様子"></div>
        </div>
    </section>

    <?php get_template_part('template-parts/com-banner'); ?>

</main>
<?php get_footer(); ?>