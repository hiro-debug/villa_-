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

            <form class="p-form h-adr" action="#" method="post" novalidate>
                <span class="p-country-name" style="display:none;">Japan</span>

                <ul class="p-form__list">

                    <!-- お名前 -->
                    <li class="p-form__item">
                        <div class="p-form__title">
                            <label for="your-name-1">お名前<span>*</span></label>
                        </div>
                        <div class="p-form__input p-formInput p-formInput--tel">
                            <input type="text" id="your-name-1" name="your-name-1" placeholder="山田" required>
                            <input type="text" id="your-name-2" name="your-name-2" placeholder="太郎">
                        </div>
                    </li>

                    <!-- ふりがな -->
                    <li class="p-form__item">
                        <div class="p-form__title">
                            <label for="your-name-kana1">ふりがな<span>*</span></label>
                        </div>
                        <div class="p-form__input p-formInput p-formInput--tel">
                            <input type="text" id="your-name-kana1" name="your-name-kana1" placeholder="やまだ" required>
                            <input type="text" id="your-name-kana2" name="your-name-kana2" placeholder="たろう">
                        </div>
                    </li>

                    <!-- 性別 -->
                    <li class="p-form__item">
                        <div class="p-form__title"><label>性別</label></div>
                        <div class="p-form__input p-form__input--radio p-formRadio">
                            <label class="p-formRadio__label">
                                <input type="radio" name="your-radio-1" value="男性" checked>
                                <span>男性</span>
                            </label>

                            <label class="p-formRadio__label">
                                <input type="radio" name="your-radio-1" value="女性">
                                <span>女性</span>
                            </label>
                        </div>
                    </li>

                    <!-- 年齢 -->
                    <li class="p-form__item age">
                        <div class="p-form__title"><label for="your-age">ご年齢</label></div>
                        <div class="p-form__input p-formInput">
                            <input type="number" id="your-age" name="your-age" placeholder="60" min="0">歳
                        </div>
                    </li>

                    <!-- 郵便番号 -->
                    <li class="p-form__item post">
                        <div class="p-form__title">
                            <label for="your-post-1">郵便番号<span>*</span></label>
                        </div>
                        <div class="p-form__input p-formInput p-formInput--tel">
                            <input type="text" id="your-post-1" name="your-post-1" placeholder="000" maxlength="3" required>−
                            <input type="text" id="your-post-2" name="your-post-2" placeholder="0000" maxlength="4" required>
                        </div>
                    </li>

                    <!-- 住所 -->
                    <li class="p-form__item">
                        <div class="p-form__title">
                            <label for="your-address">住所<span>*</span></label>
                        </div>
                        <div class="p-form__input p-formInput">
                            <input type="text" id="your-address" name="your-address" placeholder="東京都千代田区〇〇1-1-1" required>
                        </div>
                    </li>

                    <!-- 電話番号 -->
                    <li class="p-form__item">
                        <div class="p-form__title"><label for="your-tel">電話番号<span>*</span></label></div>
                        <div class="p-form__input p-formInput">
                            <input type="tel" id="your-tel" name="your-tel" placeholder="03-1234-5678" required>
                        </div>
                    </li>

                    <!-- メール -->
                    <li class="p-form__item">
                        <div class="p-form__title"><label for="your-email">メールアドレス<span>*</span></label></div>
                        <div class="p-form__input p-formInput">
                            <input type="email" id="your-email" name="your-email" placeholder="xxx@example.com" required>
                        </div>
                    </li>

                    <!-- メール確認 -->
                    <li class="p-form__item">
                        <div class="p-form__title"><label for="your-email-confirm">確認用メールアドレス<span>*</span></label></div>
                        <div class="p-form__input p-formInput">
                            <input type="email" id="your-email-confirm" name="your-email-confirm" placeholder="xxx@example.com" required>
                        </div>
                    </li>

                    <!-- お問い合わせ内容 -->
                    <li class="p-form__item">
                        <div class="p-form__title p-form__title--aiStart"><label for="your-message">お問い合わせ内容</label></div>
                        <div class="p-form__input p-formTextarea">
                            <textarea id="your-message" name="your-message" placeholder="1,000文字以内で入力してください。" required></textarea>
                        </div>
                    </li>

                </ul>

                <!-- プライバシーポリシー -->
                <p class="p-form__privacy">
                    <a href="/privacy-policy" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>を確認し同意します <span>*</span>
                </p>

                <div class="p-form__acceptance p-formCheckbox">
                    <label>
                        <input type="checkbox" name="acceptance" required>
                        <span>同意します</span>
                    </label>
                </div>
                <!-- 送信 -->
                <div class="p-form__submit p-formBtn">
                    <button type="submit" class="p-formBtn__primary">確認する</button>
                </div>
            </form>


        </div>
    </section>
</main>
<?php get_footer(); ?>