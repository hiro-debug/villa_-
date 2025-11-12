<?php get_header(); ?>
<main class="contact-complete-page layout-page">
<section class="contact-page__mv mv">
        <div class="contact-page__mv-titleWrap mv__titleWrap">
            <p class="contact-page__mv-titleEn mv__titleEn">Contact</p>
            <h1 class="contact-page__mv-titleJa mv__titleJa">お問い合わせ</h1>
        </div>
        <div class="contact-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_contact.jpg')); ?>" alt="">
        </div>
        <div class="contact-page__mv-tree mv__tree">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_tree.png')); ?>" alt="">
        </div>
        <div class="contact-page__mv-bg mv__dot">
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


    <div class="contact-complete-page__content">
        <div class="contact-complete__inner inner">
            <div class="contact-form__flow">
                <div class="contact-form__flow-container">
                    <div class="contact-form__step">
                        <div class="contact-form__step-circle contact-form__step-circle--completed">
                            <div class="contact-form__step-content">
                                <span class="contact-form__step-number">01</span>
                                <span class="contact-form__step-text">入力</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form__step">
                        <div class="contact-form__step-circle contact-form__step-circle--completed">
                            <div class="contact-form__step-content">
                                <span class="contact-form__step-number">02</span>
                                <span class="contact-form__step-text">確認</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form__step">
                        <div class="contact-form__step-circle contact-form__step-circle--active">
                            <div class="contact-form__step-content">
                                <span class="contact-form__step-number">03</span>
                                <span class="contact-form__step-text">送信完了</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-complete__content">
                <div class="contact-complete-page__content-item">
                    <p class="contact-complete__message">
                        お問い合わせありがとうございます。<br>
                        確認でき次第、担当者より<br class="u-mobile">早急にご連絡させていただきます。
                    </p>
                </div>
                <div class="contact-complete__button-wrap">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="contact-complete__button">トップページへ戻る</a>
                </div>
            </div>
        </div>


    </div>
</main>
<?php get_footer(); ?>