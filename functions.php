<?php
function my_setup()
{
  // アイキャッチの設定など
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
  // シートの読み込み
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1");
  // font-awesome(不要なら消して)
  wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");
  // fontの種類(適宜変えて)
  wp_enqueue_style('NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap');
  wp_enqueue_style('ZenOldMincho', '//fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@600&display=swap');
  // Yakuhanjpフォントを追加
  wp_enqueue_style('yakuhanjp', 'https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp-narrow.min.css', array(), '3.4.1', 'all');
  // Swiperのスクリプトを追加
  wp_enqueue_script('swiper-js', '//unpkg.com/swiper/swiper-bundle.min.js', array(), '6.8.4', true);
  // Swiperのスタイルを追加
  wp_enqueue_style('swiper-css', '//unpkg.com/swiper/swiper-bundle.min.css', array(), '6.8.4', 'all');
  // GSAPのスタイルを追加
  wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), '3.12.5', true);
  wp_enqueue_script('scroll-trigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), '3.1', true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.2', true);
  wp_enqueue_style('style-css', get_template_directory_uri() . '/css/styles.css', array(), '1.3.1');
  wp_enqueue_script('vivus', 'https://cdnjs.cloudflare.com/ajax/libs/vivus/0.3.2/vivus.js', array(), '0.3.2', true);
  // wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

//WordPressのバージョン非表示
remove_action('wp_head', 'wp_generator');

//CSSやJSのバージョン非表示
function remove_cssjs_ver2($src)
{
  if (strpos($src, 'ver='))
    $src = remove_query_arg('ver', $src);
  return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver2', 9999);
add_filter('script_loader_src', 'remove_cssjs_ver2', 9999);


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

add_filter('wpcf7_validate_email', 'custom_email_confirmation_validation', 10, 2);
add_filter('wpcf7_validate_email*', 'custom_email_confirmation_validation', 10, 2);

function custom_email_confirmation_validation($result, $tag)
{

  // フォームタグの名前を確認して、確認用メールアドレスフィールドのバリデーションを行う
  if ($tag->name == 'your-email-confirm') {
    // メインのメールアドレスと確認用メールアドレスを取得
    $your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
    $confirm_email = isset($_POST['your-email-confirm']) ? trim($_POST['your-email-confirm']) : '';

    // メールアドレスが一致しない場合、エラーメッセージを追加
    if ($your_email !== $confirm_email) {
      $result->invalidate($tag, 'メールアドレスが一致しません');
    }
  }

  return $result;
}
