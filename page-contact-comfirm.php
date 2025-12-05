<?php get_header(); ?>
<main class="contact-page layout-page comfirm-page">
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

    <section class="contact-page__content">
        <div class="contact-page__content-inner inner">
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
                        <div class="contact-form__step-circle contact-form__step-circle--active">
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

            <form class="p-form" action="#" method="post">

                <ul class="p-form__list">

                    <!-- お名前 -->
                    <li class="p-form__item">
                        <div class="p-form__title">
                            お名前<span>*</span>
                        </div>
                        <div class="p-form__input p-formInput p-formInput--tel">
                            <p class="p-formConfirm" id="your-name-1"></p>
                            <p class="p-formConfirm" id="your-name-2"></p>
                        </div>
                    </li>

                    <!-- ふりがな -->
                    <li class="p-form__item">
                        <div class="p-form__title">
                            ふりがな<span>*</span>
                        </div>
                        <div class="p-form__input p-formInput p-formInput--tel">
                            <p class="p-formConfirm" id="your-name-kana1"></p>
                            <p class="p-formConfirm" id="your-name-kana2"></p>
                        </div>
                    </li>

                    <!-- 性別 -->
                    <li class="p-form__item">
                        <div class="p-form__title">性別</div>
                        <div class="p-form__input p-form__input--radio p-formRadio">
                            <p class="p-formConfirm" id="your-radio-1"></p>
                        </div>
                    </li>

                    <!-- 年齢 -->
                    <li class="p-form__item age">
                        <div class="p-form__title">ご年齢</div>
                        <div class="p-form__input p-formInput">
                            <p class="p-formConfirm" id="your-age"></p> 歳
                        </div>
                    </li>

                    <!-- 郵便番号 -->
                    <li class="p-form__item post">
                        <div class="p-form__title">郵便番号<span>*</span></div>
                        <div class="p-form__input p-formInput p-formInput--tel">
                            <p class="p-formConfirm" id="your-post-1"></p> −
                            <p class="p-formConfirm" id="your-post-2"></p>
                        </div>
                    </li>

                    <!-- 住所 -->
                    <li class="p-form__item">
                        <div class="p-form__title">住所<span>*</span></div>
                        <div class="p-form__input p-formInput">
                            <p class="p-formConfirm" id="your-address"></p>
                        </div>
                    </li>

                    <!-- 電話番号 -->
                    <li class="p-form__item">
                        <div class="p-form__title">電話番号<span>*</span></div>
                        <div class="p-form__input p-formInput">
                            <p class="p-formConfirm" id="your-tel-1"></p>
                        </div>
                    </li>

                    <!-- メール -->
                    <li class="p-form__item">
                        <div class="p-form__title">メールアドレス<span>*</span></div>
                        <div class="p-form__input p-formInput">
                            <p class="p-formConfirm" id="your-email"></p>
                        </div>
                    </li>

                    <!-- お問い合わせ内容 -->
                    <li class="p-form__item">
                        <div class="p-form__title p-form__title--aiStart">
                            お問い合わせ内容
                        </div>
                        <div class="p-form__input p-formTextarea">
                            <p class="p-formConfirm" id="your-message"></p>
                        </div>
                    </li>

                </ul>

                <p class="p-form__privacy">プライバシーポリシーに同意します</p>

                <div class="p-form__acceptance p-formCheckbox">
                    <p class="p-formConfirm">同意する</p>
                </div>

                <!-- ボタン -->
                <div class="p-form__submit">
                    <button type="button" onclick="history.back();" class="p-formBtn__back">戻る</button>
                    <button type="submit" class="p-formBtn__primary">送信する</button>
                </div>

            </form>


        </div>
    </section>
</main>
<?php get_footer(); ?>