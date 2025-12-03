<?php get_header(); ?>
<main class="service-page layout-page">
    <section class="related-page__mv mv">
        <div class="related-page__mv-titleWrap mv__titleWrap">
            <p class="related-page__mv-titleEn mv__titleEn">About initiatives</p>
            <h1 class="related-page__mv-titleJa mv__titleJa">ヴィラとびしまの魅力</h1>
        </div>
        <div class="related-page__mv-img mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-mv.jpg')); ?>"
                alt="入居者とスタッフが一緒にいる写真" width="1440" height="400">

        </div>
        <div class="related-page__mv-tree mv__tree">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/mv_tree.png')); ?>" alt="" loading="lazy">
        </div>
        <div class="related-page__mv-bg mv__dot">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_mv-dot.png')); ?>" alt=""
                loading="lazy">
        </div>
    </section>
    <div class="breadcrumbs inner">
        <?php if (function_exists('bcn_display')) { ?>
            <div class=vocab='http://schema.org/' typeof=>
                <?php bcn_display(); ?>
            </div>
        <?php } ?>
    </div>

    <section class="initiative-page">
        <div class="initiative-page__inner inner page-inner">

            <h3 class="initiative-page__title second-title-underline" id="home-care-support">介護老人保健施設とは</h3>
            <div class="content-wrap">
                <div class="initiative-page__container">
                    <div class="swiper js-slider">
                        <div class="swiper-wrapper">

                            <!-- ▼スライド1 -->
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-slide1.jpg')); ?>"
                                    alt="老健とは">
                            </div>

                            <!-- ▼スライド2 -->
                            <!-- <div class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-slide2.jpg')); ?>"
                                alt="病院との違い">
                        </div> -->

                            <!-- ▼スライド3 -->
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-slide3.jpg')); ?>"
                                    alt="特別養護老人ホーム">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-slide4.jpg')); ?>"
                                    alt="特別養護老人ホーム">
                            </div>

                        </div>

                        <!-- ▼左右の矢印 -->
                        <!-- <div class="swiper-button-prev js-slider-prev"></div>
                    <div class="swiper-button-next js-slider-next"></div> -->

                    </div>
                    <div class="swiper-button-prev js-slider-prev"></div>
                    <div class="swiper-button-next js-slider-next"></div>

                </div>

                <p class="initiative-page__center">出典：全国老人保健施設協会</p>

                <div class="initiative-page__texts">
                    <p class="initiative-page__text">
                        「ろうけん＝介護老人保健施設」は、介護を必要とする高齢者の自立を支援し、家庭への復帰を目指すために、医師による医学的管理の下、看護・介護といったケアはもとより、作業療法士や理学療法士等によるリハビリテーション、また、栄養管理・食事・入浴などの日常サービスまで併せて提供する施設です。<br>
                        利用者ひとりひとりの状態や目標に合わせたケアサービスを、医師をはじめとする専門スタッフが行い、夜間でも安心できる体制を整えています。</p>
                    <p class="initiative-page__text">
                        介護老人保健施設をご利用いただける方は、介護保険法による被保険者で要介護認定を受けた方のうち、病状が安定していて入院治療の必要がない要介護度１～５の方で、リハビリテーションを必要とされる方です。
                    </p>
                    <p class="initiative-page__text">
                        介護老人保健施設は、常に利用者主体の質の高い介護サービスの提供を心がけ、地域に開かれた施設として、利用者のニーズにきめ細かく応える施設です。介護予防を含めた教育・啓発活動など幅広い活動を通じ、在宅ケア支援の拠点となる事を目指して、ご利用者・ご家族の皆様が、快適に自分らしい日常生活を送れるよう支援をしています。
                    </p>
                    <p class="initiative-page__text">
                        老健に入所してからリハビリを受けていただいてから自宅等の在宅生活へ戻り、通所リハビリやショートステイ、訪問リハビリを利用しながら在宅生活を継続していただくことを支援していきます。<br>
                        また入所が必要となったら再入所（リピート利用）していただくという流れが理想的な利用方法です。<br>
                        もちろん、在宅生活が困難になってしまった際には、長期入所することも可能です。</p>
                    <p class="initiative-page__pamphlet">一般向け老健施設パンフレットはこちら</p>
                    <a class="initiative-page__pamphlet-link">老健ってなに？！</a>
                </div>

            </div>

            <h3 class="initiative-page__title initiative-page__title--second second-title-underline" id="rehabilitation">リハビリテーション</h3>
            <div class="content-wrap">
                <div class="initiative-page__flex">
                    <div class="initiative-page__flex-left">
                        <p class="initiative-page__text">ヴィラとびしまには<br>現在以下のセラピストが在籍しています。</p>
                        <p class="initiative-page__text">・理学療法士　5名<br>
                            ・作業療法士　2名<br>
                            ・言語聴覚士　2名</p>
                        <p class="initiative-page__text">上記のセラピストが利用者様ひとり一人の状態に合わせたリハビリテーションを計画し、実施させていただきます。</p>
                    </div>
                    <div class="initiative-page__flex-right">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-img2.png')); ?>"
                            alt="セラピーの写真">
                    </div>
                </div>

                <div class="initiative-page__item">
                    <div class="service-page__price-header">
                        <div class="service-page__price-dot"></div>
                        <h3 class="service-page__price-title">短期集中リハビリテーション</h3>
                    </div>
                    <div class="initiative-page__item-wrap">
                        <p class="initiative-page__text">入所日から3カ月間、理学療法士等のセラピストによる集中的なリハビリテーションを受けていただくことができます。</p>
                        <p class="initiative-page__text">利用者様の心身の状態に合わせて、週に3回以上のリハビリテーションを提供させていただきます。</p>
                        <p class="initiative-page__text">
                            脳血管障害（脳出血・脳梗塞）の後遺症で言語障害や嚥下障害が見られる方には、専門である言語聴覚士がリハビリテーションを提供させていただきます。</p>
                        <p class="initiative-page__text">
                            ※経管栄養者（経口摂取不可）の利用者様であっても、施設医と利用者様、ご家族様と相談の上で経口摂取訓練を受けていただくことも可能です。</p>
                    </div>

                    <div class="service-page__price-header service-page__price-header--second">
                        <div class="service-page__price-dot"></div>
                        <h3 class="service-page__price-title">認知症短期集中リハビリテーション</h3>
                    </div>
                    <div class="initiative-page__item-wrap">
                        <p class="initiative-page__text">
                            入所日から3か月間、認知症の診断がある方については作業療法士等のセラピストによる集中的なリハビリテーションを受けていただくことができます。</p>
                        <p class="initiative-page__text">回数としては週に3回が限度です。</p>
                        <p class="initiative-page__text">
                            利用者様の状態に合わせて、iPadを使用する等して様々な形で脳の刺激になるようなリハビリテーションを提供させていただきます。</p>
                    </div>
                </div>

            </div>

            <h3 class="initiative-page__title initiative-page__title--second second-title-underline" id="terminal-care">ターミナルケア</h3>
            <div class="content-wrap">
                <p class="initiative-page__text">
                    ヴィラとびしまでは在宅復帰・在宅支援だけでなく、ターミナルケア（お看取り）にも力を入れています。繰り返しご利用していただいていても、いずれは終末期が来ます。最後の場所としてヴィラとびしまをご利用いただくことも可能です。開設以来、ヴィラとびしまでは老衰や末期がん等で延命治療を望まないという方を多くお看取りさせていただいております。
                </p>
                <p class="initiative-page__text">今後も延命治療を希望されない方の受け入れをさせていただきますので、まずはお問い合わせください。</p>

                <div class="service-page__price-header service-page__price-header--second">
                    <div class="service-page__price-dot"></div>
                    <h3 class="service-page__price-title">ヴィラとびしまで提供可能な医療行為</h3>
                </div>

                <div class="initiative-page__grid">
                    <div class="initiative-page__grid-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-card1.jpg')); ?>"
                            alt="カード1" loading="lazy">
                        <p class="initiative-page__grid-text">補液目的の点滴</p>
                    </div>
                    <div class="initiative-page__grid-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-card2.jpg')); ?>"
                            alt="カード1" loading="lazy">
                        <p class="initiative-page__grid-text">抗生剤投与</p>
                    </div>
                    <div class="initiative-page__grid-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-card3.jpg')); ?>"
                            alt="カード1" loading="lazy">
                        <p class="initiative-page__grid-text">酸素吸入</p>
                    </div>
                    <div class="initiative-page__grid-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-card4.jpg')); ?>"
                            alt="カード1" loading="lazy">
                        <p class="initiative-page__grid-text">エアマット</p>
                    </div>
                    <div class="initiative-page__grid-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-card5.jpg')); ?>"
                            alt="カード1" loading="lazy">
                        <p class="initiative-page__grid-text">対処療法（痛み止めや鎮静剤など）</p>
                    </div>
                </div>


            </div>

            <h3 class="initiative-page__title initiative-page__title--second second-title-underline" id="independent-care">自立支援介護</h3>
            <div class="content-wrap">

                <div class="initiative-page__flex">
                    <div class="initiative-page__flex-left">
                        <p class="initiative-page__text">以前の介護保険では、「介護＝お世話型介護」というのが一般的でした。</p>
                        <p class="initiative-page__text">しかし、令和5年現在の介護保険ではお世話型介護から脱却して、徐々に”自立支援介護”へシフトチェンジしています。</p>
                    </div>
                    <div class="initiative-page__flex-right">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/initiative/initiative-img3.jpg')); ?>"
                            alt="セラピーの写真">
                    </div>
                </div>


                <div class="service-page__price-header service-page__price-header--second">
                    <div class="service-page__price-dot"></div>
                    <h3 class="service-page__price-title">ヴィラとびしまで提供可能な医療行為</h3>
                </div>

                <div class="initiative-page__item-wrap">
                    <p class="initiative-page__text">わかりやすくいうと「画一的にすべて介助してしまう（やってしまう）介護」のこと。</p>
                </div>

                <div class="service-page__price-header service-page__price-header--second">
                    <div class="service-page__price-dot"></div>
                    <h3 class="service-page__price-title">自立支援介護とは</h3>
                </div>

                <div class="initiative-page__item-wrap">
                    <p class="initiative-page__text">わかりやすくいうと「その人の残存能力を活かすことで、より自立した生活が送れるようにする介護」のことを指します。</p>
                </div>
                <p class="initiative-page__text">介護保険の考え方を則り、ヴィラとびしまでは自立支援に力を入れています。<br>
                    ヴィラとびしまでは全国老人保健施設協会が開発したケアマネジメントシステム「R4システム」を導入。<br>
                    すべての職種（施設医、介護士、看護師、ケアマネージャー、リハビリ専門職、支援相談員など）が連携して、自立支援介護を目指しています。</p>
            </div>

            <h3 class="initiative-page__title initiative-page__title--second second-title-underline" id="training-committee">施設内研修・委員会活動</h3>
            <div class="content-wrap content-wrap--narrow">
                <div class="initiative-page__item-wrap">

                    <!-- 内部研修・外部研修（令和6年度） -->
                    <div class="initiative-page__block initiative-page__block--training">
                        <div class="service-page__price-header">
                            <div class="service-page__price-dot"></div>
                            <h3 class="service-page__price-title">内部研修・外部研修（令和6年度）</h3>
                        </div>
                        <div class="initiative-page__training-grid">
                            <!-- 左カラム -->
                            <dl class="initiative-page__training-list">
                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">4月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>個人情報に関するリスク管理①</p>
                                        <p>介護現場で気をつけたいプライバシー保護</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">5月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>事故事例、リスクマネジメント研修</p>
                                        <p>事故発生又は再発防止に関する研修</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">6月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>口腔ケア</p>
                                        <p>介護予防及び要介護度進行予防に関する研修</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">7月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>倫理及び法令遵守に関する研修</p>
                                        <p>防災（非常災害時）研修・BCP策定見直し<br>
                                            （訓練シミュレーション）</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">8月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>感染症・食中毒の予防及び蔓延防止に関する研修</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">9月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>接遇に関する研修</p>
                                    </dd>
                                </div>
                            </dl>

                            <!-- 右カラム -->
                            <dl class="initiative-page__training-list">
                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">10月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>緊急時の対応に関する研修</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">11月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>身体拘束の排除・高齢者虐待防止に関する研修</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">12月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>感染症及び災害に係る業務継続計画のための研修<br>
                                            防災（非常災害時）研修・BCP策定見直し<br>
                                            （訓練シミュレーション）</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">1月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>認知症及び認知症ケアに関する研修</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">2月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>ターミナルケアに関する研修</p>
                                    </dd>
                                </div>

                                <div class="initiative-page__training-row">
                                    <dt class="initiative-page__training-month">3月</dt>
                                    <dd class="initiative-page__training-body">
                                        <p>医療に関する教育、研修</p>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <!-- 委員会活動 -->
                    <div class="initiative-page__block initiative-page__block--top initiative-page__block--committee">
                        <div class="service-page__price-header">
                            <div class="service-page__price-dot"></div>
                            <h3 class="service-page__price-title">委員会活動</h3>
                        </div>
                        <ul class="initiative-page__committee-list">
                            <li class="initiative-page__committee-item">リスクマネジメント（事故防止）委員会</li>
                            <li class="initiative-page__committee-item">防災委員会（BCP作成委員会）</li>
                            <li class="initiative-page__committee-item">自立支援介護・科学的介護推進委員会</li>
                            <li class="initiative-page__committee-item">電子カルテ委員会</li>
                            <li class="initiative-page__committee-item">院内感染対策委員会</li>
                            <li class="initiative-page__committee-item">給食委員会</li>
                            <li class="initiative-page__committee-item">褥瘡委員会</li>
                            <li class="initiative-page__committee-item">身体的拘束適正委員会</li>
                            <li class="initiative-page__committee-item">人権擁護・虐待防止委員会</li>
                            <li class="initiative-page__committee-item">生産性向上推進委員会</li>
                            <li class="initiative-page__committee-item">レク委員会</li>
                        </ul>
                    </div>

                </div>
            </div>



        </div>
    </section>

    <?php get_template_part('template-parts/com-banner'); ?>


</main>
<?php get_footer(); ?>