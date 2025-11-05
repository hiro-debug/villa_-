<?php get_header(); ?>
<main class="contact-page layout-page">
    <section class="contact-page__mv mv">
        <div class="contact-page__mv-titleWrap mv__titleWrap">
            <p class="contact-page__mv-titleEn mv__titleEn">Contact</p>
            <h1 class="contact-page__mv-titleJa mv__titleJa">お問い合わせ</h1>
        </div>
        <div class="contact-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_contact.jpg')); ?>" alt="女性スタッフ2人の素敵な笑顔です">
        </div>
        <div class="contact-page__mv-tree mv__tree">
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

    <section class="contact-page__content">
        <div class="contact-page__content-inner inner">
            <div class="contact-form__flow">
                <div class="contact-form__flow-container">
                    <div class="contact-form__step">
                        <div class="contact-form__step-circle contact-form__step-circle--active">
                            <div class="contact-form__step-content">
                                <span class="contact-form__step-number">01</span>
                                <span class="contact-form__step-text">入力</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form__step">
                        <div class="contact-form__step-circle">
                            <div class="contact-form__step-content">
                                <span class="contact-form__step-number">02</span>
                                <span class="contact-form__step-text">確認</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form__step">
                        <div class="contact-form__step-circle">
                            <div class="contact-form__step-content">
                                <span class="contact-form__step-number">03</span>
                                <span class="contact-form__step-text">送信完了</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="contact-form__description">
                    以下の項目について入力いただき、<br class="u-mobile">送信してください。<br>
                    担当者より、早急にご連絡させていただきます。
                </p>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="9759743" title="お問い合わせ"]'); ?>

            
        </div>
        <?php get_template_part('template-parts/com-banner'); ?>
    </section>
</main>
<?php get_footer(); ?>