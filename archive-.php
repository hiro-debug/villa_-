<?php get_header(); ?>    

<?php
$args = [
    "post_type" => "works",//スラッグ名を記述
    "posts_per_page" => 10, //管理画面と揃える
     'tax_query' => [
        [
            'taxonomy' => 'work_category', // 使用するタクソノミー名
            'field'    => 'slug', // 'slug' または 'term_id' を使用
            'terms'    => 'specific-term', // 絞り込む用語のスラッグまたはID
        ],
    ],//タクソノミー
];
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : ?>
    <ul class="news__items">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="news__item">
                <a href="#" class="news__link">
                    <img src="/images/dummy.jpg" alt="お知らせ画像" class="news__img">
                    <div class="news__text-wrapper">
                        <div class="news__information">
                            <time class="news__date" datetime="2023-01-01">2023.01.01</time>
                            <span class="news__category">カテゴリー1</span>
                            <span class="news__category">カテゴリー2</span>
                            <span class="news__category">カテゴリー3</span>
                            <span class="news__category">カテゴリー4</span>
                        </div>
                        <div class="news__title">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                    </div>
                </a>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
<?php else : ?>
    <p>記事が投稿されていません</p>
<?php endif; ?>

<?php get_footer(); ?> 
