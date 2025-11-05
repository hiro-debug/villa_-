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
                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">9:10～11:30</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--limited">▲</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--unavailable">×</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--unavailable">×</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                        </tr>
                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">9:10～16:20</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
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
                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">女性</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--limited">▲</span>
                            </td>
                        </tr>
                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">男性</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
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
                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">午前</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--limited">▲</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--unavailable">×</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--unavailable">×</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--closed">／</span>
                            </td>
                        </tr>
                        <tr class="availability__table-row">
                            <td class="availability__table-cell first">午後</td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
                            </td>
                            <td class="availability__table-cell availability__table-cell--data">
                                <span class="availability__status availability__status--available">〇</span>
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
    </section>

    <?php get_template_part('template-parts/com-banner'); ?>

</main>
<?php get_footer(); ?>