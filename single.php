<?php get_header(); ?>
<main class="single-page layout-single">
    <section class="news-page__mv mv">
        <div class="news-page__mv-titleWrap mv__titleWrap">
            <p class="news-page__mv-titleEn mv__titleEn">Information</p>
            <h2 class="news-page__mv-titleJa mv__titleJa">お知らせ</h2>
        </div>
        <!-- <div class="news-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_info.jpg')); ?>" alt="">
        </div> -->
        <div class="news-page__mv-tree mv__tree">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_tree.png')); ?>" alt="">
        </div>
    </section>
    <section class="single-page__content">
        <div class="breadcrumbs inner">
            <?php if (function_exists('bcn_display')) { ?>
                <div class=vocab='http://schema.org/' typeof=>
                    <?php bcn_display(); ?>
                </div>
            <?php } ?>
        </div>

        <div class="single-page__content-inner inner">
            <div class="single-page__wrap">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                ?>
                    <div class="single-detail__tag">
                        <span class="single-detail__tag-text"><?php echo esc_html($categories[0]->name); ?></span>
                    </div>
                <?php endif; ?>
                <h1 class="single-detail__title"><?php the_title(); ?></h1>

                <?php the_content(); ?>

            </div>

            <div class="single-detail__back">
                <a href="<?php echo esc_url(home_url('/information')); ?>" class="single-detail__back-link">
                    <div class="single-detail__back-icon">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 9L4.5 6L7.5 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="single-detail__back-text">お知らせ一覧に戻る</span>
                </a>
            </div>

            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            if ($prev_post || $next_post) :
            ?>
                <div class="single-detail__navigation">
                    <?php if ($prev_post) : ?>
                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="single-detail__nav-link single-detail__nav-link--prev">
                            <div class="single-detail__nav-icon">
                                ←
                            </div>
                            <span class="single-detail__nav-text">前の記事</span>
                        </a>
                    <?php endif; ?>

                    <?php if ($next_post) : ?>
                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="single-detail__nav-link single-detail__nav-link--next">
                            <div class="single-detail__nav-icon">
                                →
                            </div>
                            <span class="single-detail__nav-text">次の記事</span>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>
        <?php get_template_part('template-parts/com-banner'); ?>
    </section>

</main>
<?php get_footer(); ?>