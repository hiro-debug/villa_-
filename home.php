<?php get_header(); ?>
<main class="news-page layout-page">
    <section class="news-page__mv mv">
        <div class="news-page__mv-titleWrap mv__titleWrap">
            <p class="news-page__mv-titleEn mv__titleEn">Information</p>
            <h1 class="news-page__mv-titleJa mv__titleJa">お知らせ一覧</h1>
        </div>
        <div class="news-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_info.jpg')); ?>" alt="施設利用者と男女のスタッフの素敵な笑顔です">
        </div>
        <div class="news-page__mv-tree mv__tree">
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


    <section class="news-page__content">
        <div class="news-page__content-inner inner">
        <div class="news-page__wrap js-fadeIn">
    <div class="news-page__filter">
        <button class="news-page__filter-btn news-page__filter-btn--active" data-category="all">すべて</button>
        <?php
        $categories = get_categories(array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => true,
        ));
        foreach ($categories as $category) {
            echo '<button class="news-page__filter-btn" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</button>';
        }
        ?>
    </div>
    
    <div class="news-page__posts">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                $categories = get_the_category();
                $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'お知らせ';
                $category_slug = !empty($categories) ? esc_attr($categories[0]->slug) : '';
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if (!$thumbnail_url) {
                    $thumbnail_url = get_template_directory_uri() . '/images/common/img_info01.jpg';
                }
        ?>
                <div class="news-page__post-item" data-category="<?php echo esc_attr($category_slug); ?>">
                    <a href="<?php echo esc_url(get_the_permalink()); ?>" class="news-page__post">
                        <div class="news-page__post-main">
                            <div class="news-page__post-image">
                                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
                            </div>
                            <div class="news-page__post-details">
                                <div class="news-page__post-text">
                                    <div class="news-page__post-meta">
                                        <span class="news-page__post-date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
                                        <span class="news-page__post-tag"><?php echo esc_html($category_name); ?></span>
                                    </div>
                                    <h2 class="news-page__post-description"><?php the_title(); ?></h2>
                                </div>
                                <span class="news-page__post-arrow">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_299_3195)">
                                            <g clip-path="url(#clip1_299_3195)">
                                                <path d="M1 15C1 7.26801 7.26801 1 15 1C22.732 1 29 7.26801 29 15C29 22.732 22.732 29 15 29C7.26801 29 1 22.732 1 15Z" fill="white" stroke="#2E4E7E" stroke-width="2" />
                                                <path d="M12 10.3995L16.662 15L12 19.599L13.4175 21L19.5 15L13.4175 9L12 10.3995Z" fill="#2E4E7E" />
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_299_3195">
                                                <rect width="30" height="30" fill="white" />
                                            </clipPath>
                                            <clipPath id="clip1_299_3195">
                                                <rect width="30" height="30" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
        <?php
            endwhile;
        else :
            echo '<p>投稿がありません。</p>';
        endif;
        ?>
    </div> <!-- ← news-page__posts の終了 -->
    
    <!-- ✅ ページネーションは投稿リストの外 -->
    <?php
    $pagination = paginate_links(array(
        'prev_text' => '&laquo; 前へ',
        'next_text' => '次へ &raquo;',
        'type' => 'array',
        'end_size' => 1,
        'mid_size' => 2,
    ));
    if ($pagination) :
    ?>
        <div class="news__pager">
            <div class="news__pager-numbers">
                <?php
                foreach ($pagination as $link) {
                    if (strpos($link, 'dots') !== false || strpos($link, '…') !== false) {
                        echo '<span class="news__pager-dots">…</span>';
                    } elseif (strpos($link, 'current') !== false) {
                        echo '<span class="news__pager-number news__pager-number--active">' . strip_tags($link) . '</span>';
                    } elseif (strpos($link, 'prev') !== false || strpos($link, 'next') !== false) {
                        echo '<span class="news__pager-' . (strpos($link, 'prev') !== false ? 'prev' : 'next') . '">' . $link . '</span>';
                    } else {
                        echo '<span class="news__pager-number">' . $link . '</span>';
                    }
                }
                ?>
            </div>
        </div>
    <?php endif; ?>
    
</div> <!-- ← news-page__wrap の終了 -->
            </div>
    </section>
    <?php get_template_part('template-parts/com-banner'); ?>

</main>
<?php get_footer(); ?>