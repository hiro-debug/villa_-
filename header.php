<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header layout-header js-header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="ヴィラとびしまロゴ">
          </a>
        </h1>
      <?php else : ?>
        <div class="header__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="ヴィラとびしまロゴ">
          </a>
        </div>
      <?php endif; ?>

      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-modal-wrap">
            <p>施設紹介</p>
            <ul class="header__nav-modal">
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/about#facility-info')); ?>">
                  介護老人保健施設とは</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/about#facility-info2')); ?>">施設概要</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/about#access')); ?>">
                  アクセス</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/about#treatment-improvement')); ?>">
                  介護職員等特定処遇改善加算にかかる<br>情報公開</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/about#medical-fee-calculation')); ?>">
                  所定疾患施設療養費算定状況</a>
              </li>
            </ul>
          </li>
          <li class="header__nav-modal-wrap">
            <p>隣接する内科紹介</p>
            <ul class="header__nav-modal">
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/medical-institution')); ?>">
                  併設医療機関として<br>加藤胃腸科内科<br>とびしまこどもクリニックの紹介</a>
              </li>
            </ul>
          </li>
          <li class="header__nav-modal-wrap">
            <p>サービス・料金</p>
            <ul class="header__nav-modal">
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/service#residential-care')); ?>">
                  入所サービス</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/service#short-stay')); ?>">ショートステイ</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/service#day-rehab')); ?>">
                  デイケア</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/service#home-rehab')); ?>">
                  訪問サービス</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/service#price-list')); ?>">
                  料金案内</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/service#usage-examples')); ?>">
                  ご利用例の紹介</a>
              </li>
            </ul>
          </li>
          <li class="header__nav-modal-wrap">
            <p>良斉会</p>
            <ul class="header__nav-modal">
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/ryousaikai')); ?>">
                  ヴィラ飛島の基本理念</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/ryousaikai#profile')); ?>">プロフィール</a>
              </li>
            </ul>
          </li>
          <li class="header__nav-modal-wrap">
            <p>取り組み</p>
            <ul class="header__nav-modal">
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/attempt')); ?>">
                  ヴィラ飛島の基本理念</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/attempt')); ?>">プロフィール</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/attempt')); ?>">
                  料金案内</a>
              </li>
            </ul>
          </li>
          <li class="header__nav-modal-wrap">
            <p>採用情報</p>
            <ul class="header__nav-modal">
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/recruit')); ?>">
                  先輩たちの声</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
              </li>
              <li class="header__nav-modal-item">
                <a href="<?php echo esc_url(home_url('/recruit')); ?>">
                  介護助手の採用</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <div class="header__contact">
        <div class="header__tel">
          <span class="header__tel-number">0567-52-2290</span>
        </div>
        <div class="header__actions">
          <a href="<?php echo esc_url(home_url('/availability')); ?>" class="header__action-btn header__action-btn--vacancy">
            <span class="header__action-icon">
              <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.06504 2.69059H6.60564C6.8597 2.69059 7.11375 2.95097 7.11375 3.21135V9.89443C7.11375 10.1548 6.8597 10.4152 6.60564 10.4152H4.06504C3.81097 10.4152 3.55683 10.1548 3.55683 9.89443V3.21135C3.55683 2.95097 3.81097 2.69059 4.06504 2.69059ZM15.7518 10.6756L16.0905 10.4152L15.3283 9.54726C14.9896 9.80764 14.5661 9.98123 14.1427 10.068V15.7964H14.7356C15.4131 15.7964 15.4131 16.8379 14.7356 16.8379H0.508122C-0.169374 16.8379 -0.169374 15.7964 0.508122 15.7964H1.10099V0.520758C1.10099 0.260378 1.35503 0 1.60909 0H13.6346C13.8887 0 14.1427 0.260378 14.1427 0.520758V3.03776C15.7518 3.38494 16.9374 4.86042 16.9374 6.5095C16.9374 8.15857 16.5987 8.24536 16.0905 8.85291L16.8527 9.72085L17.1915 9.46046C17.3609 9.28688 17.6996 9.28688 17.8689 9.46046L19.8168 11.7171C19.9862 11.8907 19.9862 12.2379 19.8168 12.4114L18.4618 13.6265C18.2924 13.8001 17.9537 13.8001 17.7843 13.6265L15.8364 11.3699C15.6671 11.1963 15.6671 10.8492 15.8364 10.6756H15.7518ZM17.3608 10.502L16.6833 11.1095L18.0384 12.6718L18.7158 12.0643L17.3608 10.502ZM4.82714 11.1963H10.3318C10.5858 11.1963 10.84 11.4567 10.84 11.7171V15.7964H13.1265V10.1548C12.6184 10.1548 12.1103 9.98123 11.6869 9.72085V9.89443C11.6869 10.1548 11.4327 10.4152 11.1787 10.4152H8.63805C8.38399 10.4152 8.12995 10.1548 8.12995 9.89443V3.21135C8.12995 2.95097 8.38399 2.69059 8.63805 2.69059H11.1787C11.4327 2.69059 11.6869 2.95097 11.6869 3.21135V3.47173C12.1103 3.21135 12.6184 3.03776 13.1265 3.03776V1.12831H2.11719V15.8832H4.4037V11.8039C4.4037 11.5435 4.65784 11.2831 4.91191 11.2831L4.82714 11.1963ZM9.90835 15.7964V12.2379H8.12995V15.7964H9.90835ZM5.33534 12.1511V15.7096H7.11375V12.1511H5.33534ZM13.3806 3.9057C12.0256 3.9057 10.84 5.03401 10.84 6.5095C10.84 7.98498 11.9409 9.11329 13.3806 9.11329C14.8203 9.11329 15.9212 7.98498 15.9212 6.5095C15.9212 5.03401 14.8203 3.9057 13.3806 3.9057ZM6.09744 3.64532H4.57314V9.28688H6.09744V3.64532ZM10.6706 4.25287V3.64532H9.14625V9.28688H10.6706V8.76612C10.1624 8.15857 9.90835 7.37743 9.90835 6.5095C9.90835 5.64156 10.2471 4.86042 10.6706 4.25287Z" fill="white" />
              </svg> </span>
            <span class="header__action-text">空き状況</span>
          </a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__action-btn header__action-btn--contact">
            <span class="header__action-icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.7171 0H2.72411C1.45381 0 0.4375 1.04152 0.4375 2.34342L6.61969 8.15857C6.95844 8.41895 7.29714 8.59253 7.63589 8.59253C7.97464 8.59253 8.39814 8.41895 8.6522 8.15857L14.8343 2.34342C14.8343 1.04152 13.8181 0 12.5478 0H12.7171Z" fill="white" />
                <path d="M7.28306 10.1865C6.52087 10.1865 5.75871 9.92611 5.08122 9.31855L0 4.54492V12.4431C0 13.745 1.01631 14.7865 2.28661 14.7865H12.2796C13.5499 14.7865 14.5662 13.745 14.5662 12.4431V4.54492L9.485 9.31855C8.89219 9.92611 8.04524 10.1865 7.28306 10.1865Z" fill="white" />
              </svg></span>
            <span class="header__action-text">お問い合わせ</span>
          </a>
        </div>
      </div>
      <div class="header__tel-icon u-mobile"><a href="tel:0567522290"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_tel.png')); ?>" alt=""></a></div>
      <div class="header__mail u-mobile"><a href="<?php echo esc_url(home_url("/contact")); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon_mail-blue.png')); ?>" alt=""></a></div>

      <button class="header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="header__drawer js-drawer">
        <nav class="header__drawer-nav">
          <ul class="header__drawer-list">
            <li class="header__drawer-item">
              <p class="header__drawer-accordion-title js-drawer-accordion">施設紹介</p>
              <ul class="header__drawer-accordion-list">
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/about#facility-info')); ?>">-介護老人保健施設とは</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/about#facility-info2')); ?>">-施設概要</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/about#access')); ?>">-アクセス</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/about#treatment-improvement')); ?>">-介護職員等特定処遇改善加算にかかる<br>情報公開</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/about#medical-fee-calculation')); ?>">-所定疾患施設療養費算定状況</a>
                </li>
              </ul>
            </li>
            <li class="header__drawer-item">
              <p class="header__drawer-accordion-title js-drawer-accordion">隣接する内科紹介</p>
              <ul class="header__drawer-accordion-list">
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/medical-institution')); ?>">-併設医療機関として<br>加藤胃腸科内科<br>とびしまこどもクリニックの紹介</a>
                </li>
              </ul>
            </li>
            <li class="header__drawer-item">
              <p class="header__drawer-accordion-title js-drawer-accordion">サービス・料金</p>
              <ul class="header__drawer-accordion-list">
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/service#residential-care')); ?>">-入所サービス</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/service#short-stay')); ?>">-ショートステイ</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/service#day-rehab')); ?>">-デイケア</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/service#home-rehab')); ?>">-訪問サービス</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/service#price-list')); ?>">-料金案内</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/service#usage-examples')); ?>">-ご利用例の紹介</a>
                </li>
              </ul>
            </li>
            <li class="header__drawer-item">
              <p class="header__drawer-accordion-title js-drawer-accordion">良斉会</p>
              <ul class="header__drawer-accordion-list">
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/ryousaikai')); ?>">-ヴィラ飛島の基本理念</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/ryousaikai#profile')); ?>">-プロフィール</a>
                </li>
              </ul>
            </li>
            <li class="header__drawer-item">
              <p class="header__drawer-accordion-title js-drawer-accordion">取り組み</p>
              <ul class="header__drawer-accordion-list">
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/attempt')); ?>">-ヴィラ飛島の基本理念</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/attempt')); ?>">-リハビリテーション</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/attempt')); ?>">-ターミナルケア</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/attempt')); ?>">-自立介護支援</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/attempt')); ?>">-施設内研修委員会</a>
                </li>
              </ul>
            </li>
            <li class="header__drawer-item">
              <p class="header__drawer-accordion-title js-drawer-accordion">採用情報</p>
              <ul class="header__drawer-accordion-list">
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/recruit')); ?>">-先輩たちの声</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/recruit')); ?>">-採用情報</a>
                </li>
                <li class="header__drawer-accordion-item">
                  <a href="<?php echo esc_url(home_url('/recruit')); ?>">-介護助手の採用</a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="header__drawer-contact">
            <div class="header__drawer-tel">
              <a href="tel:0567522290" class="header__drawer-tel-number">0567-52-2290</a>
            </div>
            <div class="header__drawer-actions">
              <a href="<?php echo esc_url(home_url('/availability')); ?>" class="header__drawer-action-btn header__drawer-action-btn--vacancy">
                <span class="header__drawer-action-text">空き状況</span>
              </a>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__drawer-action-btn header__drawer-action-btn--contact">
                <span class="header__drawer-action-text">お問い合わせ</span>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>