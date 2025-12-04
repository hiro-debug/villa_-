<?php get_header(); ?>
<main class="service-page layout-page">
    <section class="related-page__mv mv">
        <div class="related-page__mv-titleWrap mv__titleWrap">
            <p class="related-page__mv-titleEn mv__titleEn">Service fee information</p>
            <h1 class="related-page__mv-titleJa mv__titleJa">サービス料金案内</h1>
        </div>
        <div class="related-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/service/mv_service.jpg')); ?>" alt="入居者が皆で体操をしています" width="1440" height="400">

        </div>
        <div class="related-page__mv-tree mv__tree">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_tree.png')); ?>" alt="" loading="lazy">
        </div>
        <div class="related-page__mv-bg mv__dot">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_mv-dot.png')); ?>" alt="" loading="lazy">
        </div>
    </section>
    <div class="breadcrumbs inner">
        <?php if (function_exists('bcn_display')) { ?>
            <div class=vocab='http://schema.org/' typeof=>
                <?php bcn_display(); ?>
            </div>
        <?php } ?>
    </div>

    <section class="service-page__content layout-content">
        <div class="service-page__inner inner page-inner">
            <div class="service-page__content-wrap content-wrap" id="residential-care">
                <div class="service-page__item">
                    <div class="service-page__content">
                        <div class="service-page__heading sec-heading">
                            <h2 class="service-page__title-ja sec-heading__ja">入所サービス</h2>
                            <p class="service-page__title-en sec-heading__en">residential care</p>
                        </div>
                        <p class="service-page__description">介護が必要になった方に、施設に入所いただき、医療・看護・介護・リハビリテーションを提供し、住み慣れた住宅への復帰を目指します。さらに在宅復帰された後も、リピート入所（繰り返し入所）・ショートステイ（短期入所）・通所リハビリ（デイケア）・訪問リハビリによる安心のアフターフォロー体制で、在宅生活を支援します。</p>
                    </div>
                    <div class="service-page__image">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/service/img_service02.jpg')); ?>" alt="入居者とスタッフが認知機能の学習をしています" loading="lazy">
                    </div>
                </div>

                <!-- <div class="service-page__hr">
                    <hr class="service-page__hr-line">
                </div> -->


                <div class="service-page__consulting-wrap" id="service-page-consulting">
                    <div class="service-page__consulting">
                        <h3 class="service-page__consulting-title second-title-dot">お困りの場合、ご相談ください。</h3>
                        <ul class="service-page__consulting-list">
                            <li class="service-page__consulting-item">・今まで自分のことは自分で出来ていたのに急な病気で入院となり、治療が終わって退院することとなったが、介護が必要となってしまった。</li>
                            <li class="service-page__consulting-item">・介護の経験がなくて介護に不安</li>
                            <li class="service-page__consulting-item">・もう少しリハビリして出来ることを増やしてほしい</li>
                            <li class="service-page__consulting-item">・自宅での受け入れ環境（バリアフリー、手すりなどの設置）が整っていない</li>
                            <li class="service-page__consulting-item">・認知症による周辺症状（不穏、弄便、徘徊、被害妄想など）があって家族等での介護が困難</li>
                            <li class="service-page__consulting-item">・独居なので介護する人がいない</li>
                            <li class="service-page__consulting-item">・自宅での介護について指導してもらいたい</li>
                        </ul>
                        <p class="service-page__consulting-attention">自宅に戻る期間は短期間で構いません。再入所もできます。
                            <br>自宅での生活の間、ショートステイで短期入所することも可能です。
                            <br>施設入所と自宅生活を繰り返す往復利用という利用方法もあります。
                        </p>
                    </div>
                    <div class="service-page__flow">
                        <div class="service-page__flow__inner">
                            <h3 class="service-page__consulting-title second-title-dot">入所手続きの流れ</h3>
                            <ol class="service-page__flow__list">
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">01</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">お問い合わせ</h3>
                                        <p class="service-page__flow__message">
                                            お気軽にお問い合わせください。<br>
                                            受付時間･･月～土　９：００～１７：００（応相談）<br>
                                            ※支援相談員の都合によりご希望に沿った時間にならないことがあります。ご了承してください。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">02</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">施設説明</h3>
                                        <p class="service-page__flow__message">
                                            施設概要の説明、料金案内、施設内見学のご案内をします。
                                        </p>
                                        <p class="service-page__flow__message">
                                            ＜持参していただきたいもの＞<br>
                                            ・介護保険証、介護保険負担割合証<br>
                                            ・介護保険負担限度額認定証（該当者のみ）<br>
                                            ・医療保険証<br>
                                            ・医療受給者証（該当者のみ）<br>
                                            ・印鑑（本人・ご家族）
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">03</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">申し込み</h3>
                                        <p class="service-page__flow__message">
                                            ご本人またはご家族に施設へ来所して頂き、申し込み用紙にて受付いたします。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">04</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">面接</h3>
                                        <p class="service-page__flow__message">
                                            ご本人と面接をさせていただきます。<br>施設に来所いただくか、自宅や病院先等へ当施設の職員がお伺いさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">05</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">診断書の作成</h3>
                                        <p class="service-page__flow__message">
                                            当施設の診断書の作成を依頼します。主治医の先生にご依頼して頂くことになります。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">06</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">判定会議</h3>
                                        <p class="service-page__flow__message">
                                            面接時の情報と診断書の情報を元に、委員会にて入所可・不可の判定をします。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">07</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">結果連絡</h3>
                                        <p class="service-page__flow__message">
                                            電話にてご連絡を差し上げます。<br>その際に、入所日の決定、契約の日程をご相談させていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">08</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">入所手続き</h3>
                                        <p class="service-page__flow__message">
                                            重要事項、契約内容について説明させて頂きます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">09</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">入所</h3>
                                        <p class="service-page__flow__message">
                                            入所当日は、ご家族同伴でお願いします。（送迎は要相談）
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="service-page__button">
                    <button type="button" class="service-page__button-link" aria-controls="service-page-consulting" aria-expanded="false" data-text-expanded="閉じる" data-text-collapsed="もっと見る">
                        もっと見る
                    </button>
                </div>


            </div>
            <div class="service-page__content-wrap content-wrap" id="short-stay">
                <div class="service-page__item">
                    <div class="service-page__content">
                        <div class="service-page__heading sec-heading sec-heading--short-stay">
                            <h2 class="service-page__title-ja sec-heading__ja">ショートステイ</h2>
                            <p class="service-page__title-en sec-heading__en sec-heading__en">short stay</p>
                        </div>
                        <p class="service-page__description">短期入所サービス（ショートステイ）とは、要介護状態となった場合も、利用者が可能な限り居宅において、日常生活を営むことができるよう、予め期間を定めて短期的に入所（お泊り）していただき、簡単な治療とリハビリを同時に提供することできるサービスです。短期入所療養介護ともいいます。<br><br>利用者の家族の身体的及び精神的負担の軽減を図るだけでなく、簡単な治療とリハビリを受けることで、身体状態の向上・維持をすることもできます。</p>
                    </div>
                    <div class="service-page__image">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/service/img_service01.jpg')); ?>" alt="入居者とスタッフが日々のトレーニングをしています" loading="lazy">
                    </div>
                </div>

                <!-- <div class="service-page__hr">
                    <hr class="service-page__hr-line">
                </div> -->


                <div class="service-page__consulting-wrap" id="service-page-consulting-01">
                    <div class="service-page__consulting">
                        <h3 class="service-page__consulting-title second-title-dot">お困りの場合、ご相談ください。</h3>
                        <ul class="service-page__consulting-list">
                            <li class="service-page__consulting-item">・主な介護者であるご家族等の介護疲れがあるので休息したい</li>
                            <li class="service-page__consulting-item">・主な介護者を含むご家族様で入院や療養が必要となってしまい、その間は介護できない</li>
                            <li class="service-page__consulting-item">・急な用事（冠婚葬祭や小さいお子様のお世話など）で介護ができない</li>
                            <li class="service-page__consulting-item">・認知症による周辺症状（不穏、弄便、徘徊、被害妄想など）があって家族等での介護が困難</li>
                            <li class="service-page__consulting-item">・かかりつけ医に毎日の点滴で通院が必要となったが、毎日の通院が困難だから点滴が必要なくなるまで短期的に入所したい</li>
                            <li class="service-page__consulting-item">・独居だが、皮膚トラブルで毎日の処置が必要となってしまった</li>
                        </ul>
                    </div>
                    <div class="service-page__flow">
                        <div class="service-page__flow__inner">
                            <h3 class="service-page__consulting-title second-title-dot">入所手続きの流れ</h3>
                            <ol class="service-page__flow__list">
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">01</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">お問い合わせ</h3>
                                        <p class="service-page__flow__message">
                                            短期入所サービス（ショートステイ）のご相談・お問い合わせは、ご本人・ご家族様・担当ケアマネージャーからでもお受けしております。<br>まずはお気軽にご相談・お問い合わせください。<br><br>受付時間･･月～土　９：００～１７：００（応相談）<br>※支援相談員の都合によりご希望に沿った時間にならないことがあります。ご了承してください。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">02</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">施設説明</h3>
                                        <p class="service-page__flow__message">
                                            施設概要の説明、料金案内、施設内見学のご案内をします。
                                        </p>
                                        <p class="service-page__flow__message">
                                            ＜持参していただきたいもの＞<br>
                                            ・介護保険証、介護保険負担割合証<br>
                                            ・介護保険負担限度額認定証（該当者のみ）<br>
                                            ・印鑑（本人・ご家族）
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">03</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">申し込み</h3>
                                        <p class="service-page__flow__message">
                                            申し込み用紙を提出いただくことで正式に受付させていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">04</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">面接</h3>
                                        <p class="service-page__flow__message">
                                            ご本人と面接をさせていただきます。施設に来所いただくか、自宅や病院先等へ当施設の職員がお伺いさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">05</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">診断書の作成</h3>
                                        <p class="service-page__flow__message">
                                            当施設の診断書の作成を依頼します。主治医の先生にご依頼して頂くことになります。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">06</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">判定会議</h3>
                                        <p class="service-page__flow__message">
                                            面接時の情報と診断書の情報を元に、委員会にて入所可・不可の判定をします。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">07</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">結果連絡</h3>
                                        <p class="service-page__flow__message">
                                            電話にてご連絡を差し上げます。<br>利用日時の調整をさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">08</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">入所手続き</h3>
                                        <p class="service-page__flow__message">
                                            重要事項、契約内容や持ち物について説明させて頂きます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">09</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">入所</h3>
                                        <p class="service-page__flow__message">
                                            必要な荷物（衣類など）をご用意いただき、利用開始となります。<br>契約書類のご用意もお願い致します。
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="service-page__button">
                    <button type="button" class="service-page__button-link service-page__button-link--short-stay" aria-controls="service-page-consulting-01" aria-expanded="false" data-text-expanded="閉じる" data-text-collapsed="もっと見る">
                        もっと見る
                    </button>
                </div>
            </div>

            <div class="service-page__content-wrap content-wrap" id="day-rehab">
                <div class="service-page__item">
                    <div class="service-page__content">
                        <div class="service-page__heading sec-heading sec-heading--day-rehab">
                            <h2 class="service-page__title-ja sec-heading__ja">通所リハビリ</h2>
                            <p class="service-page__title-en sec-heading__en sec-heading__en">day rehab</p>
                        </div>
                        <p class="service-page__description">通所リハビリテーションは、利用者が可能な限り自宅で自立した日常生活を送ることができるよう、利用者が通所リハビリテーションの施設（老人保健施設、病院、診療所など）に通い、食事や入浴などの日常生活上の支援や、生活機能向上のための機能訓練や口腔機能向上サービスなどを日帰りで提供します。<br><br>介護予防通所リハビリテーションでは、生活機能を向上させるための「共通的サービス」に加え、「運動器の機能向上」「栄養改善」「口腔機能の向上」に関するサービスを組み合わせて受けることができます。</p>
                    </div>
                    <div class="service-page__image">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/service/img_service03.jpg')); ?>" alt="入居者とリハビリスタッフがリハビリを行なっています" loading="lazy">
                    </div>
                </div>

                <!-- <div class="service-page__hr">
                    <hr class="service-page__hr-line">
                </div> -->


                <div class="service-page__consulting-wrap" id="service-page-consulting-02">
                    <div class="service-page__consulting">
                        <h3 class="service-page__consulting-title second-title-dot">お困りの場合、ご相談ください。</h3>
                        <ul class="service-page__consulting-list">
                            <li class="service-page__consulting-item">・家ではやることがなくてゴロゴロしてばかりで認知症の進行や体力・筋力低下が心配</li>
                            <li class="service-page__consulting-item">・今まで出来ていたことが難しくなってきた</li>
                            <li class="service-page__consulting-item">・外出する体力がなくなってきた</li>
                            <li class="service-page__consulting-item">・自宅での入浴が難しい</li>
                            <li class="service-page__consulting-item">・日常生活の動作がしにくくなり、リハビリをしてほしい</li>
                            <li class="service-page__consulting-item">・認知症による症状があり、目が離せないため介護負担を軽減したい</li>
                            <li class="service-page__consulting-item">・日中に家族が仕事などで留守になるため、介護・看護が必要</li>
                        </ul>
                    </div>
                    <div class="service-page__flow">
                        <div class="service-page__flow__inner">
                            <h3 class="service-page__consulting-title second-title-dot">入所手続きの流れ</h3>
                            <ol class="service-page__flow__list">
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">01</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">お問い合わせ</h3>
                                        <p class="service-page__flow__message">
                                            通所サービス（通所リハビリテーション）のご相談・お問い合わせは、ご本人・ご家族様・担当ケアマネージャーからでもお受けしております。<br>まずはお気軽にご相談・お問い合わせください。<br><br>受付時間･･月～金　９：００～１７：００（応相談）<br>※支援相談員の都合によりご希望に沿った時間にならないことがあります。ご了承してください。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">02</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">見学・体験利用</h3>
                                        <p class="service-page__flow__message">
                                            施設内見学、または体験利用も可能です。<br><br>※利用については２つの利用方法があります。いずれも送迎サービスがあります。<br>・食事、入浴サービスもある1日利用<br>・食事、入浴なしの半日利用<br><br>＜体験利用時に持参していただきたいもの＞<br>・1日体験利用の場合は食事代（682円）のみいただきます。<br>・半日体験利用の場合は体験利用代はなく、無料でご利用可能です。<br>・1日体験利用の場合は入浴の際に着替え（任意）のみで、タオル類・石鹸などの持参は必要ありません。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">03</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">面談・お申込み</h3>
                                        <p class="service-page__flow__message">
                                            ケアマネージャーからご利用の依頼を受けた後、申し込みの手続きをさせていただきます。<br>体験利用がない場合は、自宅や病院に訪問させていただき、面談と申込みの手続きをさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">04</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">面接</h3>
                                        <p class="service-page__flow__message">
                                            ご本人と面接をさせていただきます。<br>施設に来所いただくか、自宅や病院先等へ当施設の職員がお伺いさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">05</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">通所利用判定会議</h3>
                                        <p class="service-page__flow__message">
                                            面談をさせていただいた情報と、ケアマネージャーや主治医からの情報などを基に、通所利用の対象となるかどうかを判定します。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">06</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">連絡・調整</h3>
                                        <p class="service-page__flow__message">
                                            通所利用の可否について、ご本人様・ご家族様やケアマネージャーのご連絡いたします。通所が可能であれば、ご契約日や利用開始日などの調整をさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">07</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">説明・契約</h3>
                                        <p class="service-page__flow__message">
                                            介護職員・リハビリ職員・支援相談員がご自宅へ訪問させていただき、サービス利用時の持ち物や注意事項、ご利用にあたっての事前説明と契約を結ばせていただきます。<br>その際に、リハビリ職員により自宅環境や身体状態を確認させていただくことで、ケアプラン作成の参考にさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">08</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">ご利用</h3>
                                        <p class="service-page__flow__message">
                                            ご利用開始となります。
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="service-page__button">
                    <button type="button" class="service-page__button-link service-page__button-link--day-rehab" aria-controls="service-page-consulting-02" aria-expanded="false" data-text-expanded="閉じる" data-text-collapsed="もっと見る">
                        もっと見る
                    </button>
                </div>


            </div>
            <div class="service-page__content-wrap content-wrap" id="home-rehab">
                <div class="service-page__item">
                    <div class="service-page__content">
                        <div class="service-page__heading sec-heading sec-heading--home-rehab">
                            <h2 class="service-page__title-ja sec-heading__ja">訪問リハビリ</h2>
                            <p class="service-page__title-en sec-heading__en sec-heading__en">home rehab</p>
                        </div>
                        <p class="service-page__description">訪問リハビリテーションは、利用者が可能な限り自宅で自立した日常生活を送ることができるよう、理学療法士、作業療法士、言語聴覚士などが利用者の自宅を訪問し、心身機能の維持回復や日常生活の自立に向けたリハビリテーションを行います。</p>
                    </div>
                    <div class="service-page__image">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/service/img_service04.jpg')); ?>" alt="入居者とスタッフが食後の体操をしています。" loading="lazy">
                    </div>
                </div>

                <!-- <div class="service-page__hr">
                    <hr class="service-page__hr-line">
                </div> -->


                <div class="service-page__consulting-wrap" id="service-page-consulting-03">
                    <div class="service-page__consulting">
                        <h3 class="service-page__consulting-title second-title-dot">お困りの場合、ご相談ください。</h3>
                        <ul class="service-page__consulting-list">
                            <li class="service-page__consulting-item">・家ではやることがなくてゴロゴロしてばかりで認知症の進行や体力・筋力低下が心配</li>
                            <li class="service-page__consulting-item">・外出する体力がなくなってきた</li>
                            <li class="service-page__consulting-item">・自宅で出来る運動を教えてほしい</li>
                            <li class="service-page__consulting-item">・自宅での介助方法を指導してほしい</li>
                        </ul>
                    </div>
                    <div class="service-page__flow">
                        <div class="service-page__flow__inner">
                            <h3 class="service-page__consulting-title second-title-dot">入所手続きの流れ</h3>
                            <ol class="service-page__flow__list">
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">01</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">お問い合わせ</h3>
                                        <p class="service-page__flow__message">
                                            訪問サービス（訪問リハビリテーション）のご相談・お問い合わせは、ご本人・ご家族様・担当ケアマネージャーからでもお受けしております。<br>まずはお気軽にご相談・お問い合わせください。<br><br>受付時間は月～金曜の９：００～１７：００（応相談）<br>※担当職員の都合によりご希望に沿った時間にならないことがあります。予めご了承ください。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">02</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">事前訪問・お申込み</h3>
                                        <p class="service-page__flow__message">
                                            ご自宅へ担当職員が訪問し、サービスについての説明をさせていただき、ご自宅の環境やご本人様の状態の確認も同時に実施させていただきます。<br>双方の同意をもとに手続きをさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">03</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">ご利用曜日・ご利用回数と担当職員の決定</h3>
                                        <p class="service-page__flow__message">
                                            事前に訪問させていただいた情報を基に、ご本人様・ご家族様と担当ケアマネジャーとリハビリの目標をご相談させていただきます。<br>その結果、担当させていただく職員の提案をさせていただき、ご利用曜日・ご利用回数の調整をさせていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">04</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">契約</h3>
                                        <p class="service-page__flow__message">
                                            ご利用の前に契約を締結させていただきます。
                                        </p>
                                    </div>
                                </li>
                                <li class="service-page__flow__item">
                                    <div class="service-page__flow__index">
                                        <span class="service-page__flow__index-number">05</span>
                                    </div>
                                    <div class="service-page__flow__body">
                                        <h3 class="service-page__flow__title">ご利用開始</h3>
                                        <p class="service-page__flow__message">
                                            リハビリの提供開始となります。
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="service-page__button">
                    <button type="button" class="service-page__button-link service-page__button-link--home-rehab" aria-controls="service-page-consulting-03" aria-expanded="false" data-text-expanded="閉じる" data-text-collapsed="もっと見る">
                        もっと見る
                    </button>
                </div>
            </div>

            <div class="service-page__price-section" id="price-list">
                <h2 class="service-page__price-title second-title-underline">料金表</h2>
                <div class="service-page__price-container">
                    <div class="service-page__price-table">
                        <div class="service-page__price-header">
                            <div class="service-page__price-dot"></div>
                            <h3 class="service-page__price-title">入所料金表</h3>
                        </div>
                        <div class="service-page__price-content">
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険1割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/038.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                    <a href="https://media.toriaez.jp/r1236/65027.pdf" class="service-page__price-button service-page__price-button--additional" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 加算料金</a>
                                </div>
                            </div>
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険2割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/038.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                    <a href="https://media.toriaez.jp/r1236/881.pdf" class="service-page__price-button service-page__price-button--additional" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 加算料金</a>
                                </div>
                            </div>
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険3割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/038.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                    <a href="https://media.toriaez.jp/r1236/799.pdf" class="service-page__price-button service-page__price-button--additional" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 加算料金</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-page__price-table">
                        <div class="service-page__price-header">
                            <div class="service-page__price-dot"></div>
                            <h3 class="service-page__price-title">ショートステイ料金表</h3>
                        </div>
                        <div class="service-page__price-content">
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険1割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/827.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                    <a href="https://media.toriaez.jp/r1236/827.pdf" class="service-page__price-button service-page__price-button--additional" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 介護保険負担限度額段階１～３段階</a>
                                </div>
                            </div>
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険2割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/912.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                </div>
                            </div>
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険3割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/466.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-page__price-table">
                        <div class="service-page__price-header">
                            <div class="service-page__price-dot"></div>
                            <h3 class="service-page__price-title">通所リハビリ料金表</h3>
                        </div>
                        <div class="service-page__price-content">
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険1割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/72111.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 要介護</a>
                                    <a href="https://media.toriaez.jp/r1236/352.pdf" class="service-page__price-button service-page__price-button--additional" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 要支援</a>
                                </div>
                            </div>
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険2割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/082.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 要介護</a>
                                    <a href="https://media.toriaez.jp/r1236/42824.pdf" class="service-page__price-button service-page__price-button--additional" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 要支援</a>
                                </div>
                            </div>
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険3割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/918.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 要介護</a>
                                    <a href="https://media.toriaez.jp/r1236/561.pdf" class="service-page__price-button service-page__price-button--additional" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 要支援</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-page__price-table">
                        <div class="service-page__price-header">
                            <div class="service-page__price-dot"></div>
                            <h3 class="service-page__price-title">訪問リハビリ料金表</h3>
                        </div>
                        <div class="service-page__price-content">
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険1割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/181.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                </div>
                            </div>
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険2割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/02294.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                </div>
                            </div>
                            <div class="service-page__price-row">
                                <p class="service-page__price-label">・介護保険3割負担</p>
                                <div class="service-page__price-buttons">
                                    <a href="https://media.toriaez.jp/r1236/22452.pdf" class="service-page__price-button service-page__price-button--basic" target="_blank" rel="noopener noreferrer"><span>▶︎</span> 基本料金</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-page__adl-section" id="usage-examples">
                <h2 class="service-page__adl-title second-title-underline">ご利用例の紹介</h2>
                <div class="service-page__adl-wrap">
                    <div class="service-page__adl-content">
                        <div class="service-page__adl-header">
                            <div class="service-page__adl-icon"></div>
                            <h3 class="service-page__adl-title">ADL（日常生活動作）が悪化</h3>
                            <div class="service-page__adl-arrow-icon"></div>
                        </div>
                        <div class="service-page__adl-list">
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">自宅で安心して生活が送れるようリハビリを受けたい</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">元気に歩行していたが、転倒して骨折したことにより歩行が不安定なまま退院となってしまった。このままではまた転倒してしまう可能性が高い状態である。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/629.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">自宅での介護ができるようにリハビリと介護指導を受けたい</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">今までは介護も必要なかったのだが、脳血管障害（脳梗塞・脳出血など）により介護が必要となってしまった。退院後に自宅での介護が困難である。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/699.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">介護負担が軽減するようリハビリを受けたい</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">自宅で介護しているが、徐々に体力と筋力が低下している。介護負担も大きくなっているため、自宅での介護が困難となってきている。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/285.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-page__adl-content">
                        <div class="service-page__adl-header">
                            <div class="service-page__adl-icon"></div>
                            <h3 class="service-page__adl-title">認知症の周辺症状が悪化</h3>
                            <div class="service-page__adl-arrow-icon"></div>
                        </div>
                        <div class="service-page__adl-list">
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">昼夜逆転を治してほしい。</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">昼夜逆転しており、夜中にゴソゴソと行動する。食事を作ろうとして夜間に台所で火を使うため目が離せない。家族は夜間眠れないため寝不足となり、介護疲れが増大。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/721.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">入所して主介護者を休ませたい</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">認知症の周辺症状悪化により、暴言・暴力や介護抵抗が増えてきた。主介護者である妻の介護ストレスが増大。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/595.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">通所リハビリで下肢筋力をアップしつつ、日中は預かってほしい。</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">目が見えず、認知症の周辺症状により動作にはほぼ介助が必要。しかも最近は足の筋力が低下しているのか、フラフラになっている。排便があると紙パンツの中に手を入れてしまうなどの不潔行為もあり、家族の身体的介護負担と介護ストレスが増大している。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/711.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-page__adl-content">
                        <div class="service-page__adl-header">
                            <div class="service-page__adl-icon"></div>
                            <h3 class="service-page__adl-title">医療が必要</h3>
                            <div class="service-page__adl-arrow-icon"></div>
                        </div>
                        <div class="service-page__adl-list">
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">肺炎が完治するまでショートステイで預かってほしい。その間、点滴などの処置をしてほしい。</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">肺炎と診断され、毎日点滴するために受診するよう主治医から言われた。しかし、家族は仕事があるため毎日の受診は困難である。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/896.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">食事摂取量が増えるように色々と工夫してほしい。体力が低下しているのでリハビリもしてほしい。食べれなければターミナルケアをしてほしい。</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">超高齢ということもあり、自宅での食事摂取が困難となっている。体力も徐々に低下。介護負担も増えてきた。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/098.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-page__adl-content">
                        <div class="service-page__adl-header">
                            <div class="service-page__adl-icon"></div>
                            <h3 class="service-page__adl-title">ターミナルケア（看取り）</h3>
                            <div class="service-page__adl-arrow-icon"></div>
                        </div>
                        <div class="service-page__adl-list">
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">自宅での看取りは困難なのでターミナルケアをお願いしたい。</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">緩和ケア病棟に入院していたが症状も落ち着いていることと、3か月経過したため退院の話が出た</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/538.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">入所して最後まで面倒をみてほしい。</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">重度の心不全があり、発作を起こして入院。奇跡的に一命をとりとめた。しかし、主治医からは「次に発作が起きたら助からない」と言われた。家族は遠方に住んでおり、本人が移動するのは危険だと言われた。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/840.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                            <div class="service-page__adl-item">
                                <div class="service-page__adl-item-header">
                                    <div class="service-page__adl-item-title-wrap">
                                        <p class="service-page__adl-item-title">慣れた環境で、親しみなれた職員がいる施設で最後を迎えたい。</p>
                                    </div>
                                </div>
                                <div class="service-page__adl-item-body">
                                    <div class="service-page__adl-item-content">
                                        <p class="service-page__adl-item-description">入所中に重篤な脳梗塞を発症。病院に受診するも手の施しようがないとの診断。</p>
                                    </div>
                                    <a href="https://media.toriaez.jp/r1236/469.pdf" class="service-page__adl-item-link" target="_blank" rel="noopener noreferrer">
                                        <span class="service-page__adl-item-arrow">▶︎</span>
                                        <span class="service-page__adl-item-link-text">ご利用例</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php get_template_part('template-parts/com-banner'); ?>

</main>
<?php get_footer(); ?>