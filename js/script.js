
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

// 360px以下は縮小
  !(function () {
    const viewport = document.querySelector('meta[name="viewport"]');
    function switchViewport() {
      const value =
        window.outerWidth > 360
          ? 'width=device-width,initial-scale=1'
          : 'width=360';
      if (viewport.getAttribute('content') !== value) {
        viewport.setAttribute('content', value);
      }
    }
    addEventListener('resize', switchViewport, false);
    switchViewport();
  })();
  

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ヘッダーのスクロール時の背景色変更
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('.header').addClass('is-scrolled');
    } else {
      $('.header').removeClass('is-scrolled');
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  // topBtn.click(function () {
  //   $('body,html').animate({
  //     scrollTop: 0
  //   }, 300, 'swing');
  //   return false;
  // });

  

 // ハンバーガーメニュー
 $(function () {
  $(".js-hamburger").click(function () {
      $(this).toggleClass("is-open");
      $(".js-drawer").fadeToggle();
      $("body").toggleClass("active");
  });

  // ドロワーの背景をクリックで閉じる
  $(".header__drawer").on("click", function (e) {
    // ドロワーが表示されていない場合は何もしない
    if (!$(this).is(":visible")) return;
    
    // aタグ、li、ボタン、ナビをクリックした場合は何もしない
    if ($(e.target).closest("a, li, .header__drawer-nav, .header__drawer-action-btn").length) return;
    
    // 背景部分をクリックした場合はドロワーを閉じる
    $(".js-hamburger").removeClass("is-open");
    $(".js-drawer").fadeOut();
    $("body").removeClass("active");
  });
  

  // ドロワーナビのaタグをクリックで閉じる
  $(".js-drawer a[href]").on("click", function () {
      $(".js-hamburger").removeClass("is-open");
      $(".js-drawer").fadeOut();
      $("body").removeClass("active");
  });

  // resizeイベント
  $(window).on('resize', function() {
      if (window.matchMedia("(min-width: 768px)").matches) {
          $(".js-hamburger").removeClass("is-open");
          $(".js-drawer").fadeOut();
          $("body").removeClass("active");
      }
  });
});

  // サービスページ コンサルティングアコーディオン
  $(".service-page__button-link").each(function () {
    const $button = $(this);
    const wrapId = $button.attr("aria-controls");
    const $wrap = $("#" + wrapId);

    if ($wrap.length) {
      const expandedText = $button.attr("data-text-expanded") || "閉じる";
      const collapsedText = $button.attr("data-text-collapsed") || "もっと見る";

      // 初期状態を閉じた状態にする
      $wrap.hide();
      $button.text(collapsedText).attr("aria-expanded", "false").removeClass("is-active");

      $button.on("click", function (e) {
        e.preventDefault();

        const isExpanded = $(this).attr("aria-expanded") === "true";
        const nextState = !isExpanded;

        $(this)
          .attr("aria-expanded", nextState.toString())
          .text(nextState ? expandedText : collapsedText)
          .toggleClass("is-active", nextState);

        $wrap.stop().slideToggle(600, function () {
          $wrap.toggleClass("is-open", $wrap.is(":visible"));
        });
      });
    }
  });

  // ドロワーアコーディオンの初期状態を閉じた状態にする
  $(".js-drawer-accordion").each(function () {
    $(this).next().hide();
    $(this).removeClass("is-open");
  });

  $(".js-drawer-accordion").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("is-open");
  });
});

// ページ内スクロール
// $(function () {
//   // ヘッダーの高さ取得
//   const headerHeight = $(".header").height();
//   const offset = 500; // 追加のオフセット（ヘッダーの下に余白を確保）

//   console.log('スクロール処理初期化 - ヘッダー高さ:', headerHeight, 'オフセット:', offset);

//   // 絶対パスと相対パスの両方に対応（href*="#" は#を含むすべてのリンクにマッチ）
//   $(document).on('click', 'a[href*="#"]', function (e) {
//     // 最初にデフォルト動作を停止
//     e.preventDefault();
//     e.stopPropagation();

//     console.log('===== リンククリック検出 =====');

//     const href = $(this).attr("href");
//     console.log('1. href:', href);

//     // ハッシュ部分を取得
//     let hash = href.indexOf('#') !== -1 ? href.substring(href.indexOf('#')) : '';
//     console.log('2. ハッシュ:', hash);

//     // ハッシュがない、または別ページへのリンクの場合はページ遷移を許可
//     if (!hash || hash === '#' || hash === '#!') {
//       console.log('❌ スキップ: ハッシュがないか無効 - ページ遷移を許可');
//       window.location.href = href;
//       return false;
//     }

//     // 同じページ内のリンクかチェック
//     const currentPath = location.pathname;
//     const linkPath = this.pathname || '';
//     console.log('3. パス比較:', {現在: currentPath, リンク: linkPath});

//     // 別ページへのリンクの場合はページ遷移を許可
//     if (linkPath && linkPath !== currentPath) {
//       console.log('❌ スキップ: 別ページへのリンク - ページ遷移を許可');
//       window.location.href = href;
//       return false;
//     }

//     const speed = 600;
//     let target = $(hash);
//     console.log('4. ターゲット要素:', target.length > 0 ? 'あり' : 'なし');

//     if (!target.length) {
//       console.log('❌ ターゲットが見つかりません:', hash, '- ページ遷移を許可');
//       window.location.href = href;
//       return false;
//     }

//     console.log('✅ 同ページ内スクロール実行');

//     // ヘッダーの高さ分 + オフセット分下げる
//     let position = target.offset().top - headerHeight - offset;

//     console.log('5. スクロール計算:', {
//       'ターゲット位置': target.offset().top,
//       'ヘッダー高さ': headerHeight,
//       'オフセット': offset,
//       '最終位置': position
//     });

//     console.log('6. スクロール実行中...');
//     $("body,html").stop().animate({ scrollTop: position }, speed, "swing", function() {
//       console.log('✅ スクロール完了');
//     });

//     return false;
//   });




// });

// メールアドレスが一致しないと送れないように
// メールアドレスフィールドのバリデーションを追加
const links = document.querySelectorAll(".header__nav-item > a");

links.forEach(function (link) {
  // トレーリングスラッシュを除去して比較
  const linkUrl = link.href.replace(/\/$/, "");
  const currentUrl = location.href.replace(/\/$/, "");

  if (linkUrl === currentUrl) {
    link.closest(".header__nav-item").classList.add("current");
  }
});

// ※これを使う場合sassに.currrent{}を追加

// 下からフワッと出てくるアニメーション
$(window).on("scroll", function () {
  $(".js-fadeIn").each(function () {
    if (
      $(this).offset().top <
      $(window).scrollTop() + $(window).height() * 0.75
    ) {
      $(this).addClass("is-active");
    }
  });
}).trigger("scroll");

// document.querySelectorAll(".js-stagger-list").forEach((list) => {
//   const targets = list.querySelectorAll(".js-target");
//   gsap.fromTo(
//     targets,
//     { y: 100, autoAlpha: 0 },
//     {
//       y: 0,
//       autoAlpha: 1,
//       stagger: 0.2,
//       duration: 0.8,
//       ease: "power3.out",
//       scrollTrigger: {
//         trigger: list, // ← セクション単位でトリガー発火
//         start: "top 70%",
//         toggleActions: "play none none none",
//       },
//     }
//   );
// });

// ニュースフィルター機能
const filterButtons = document.querySelectorAll(".news-page__filter-btn");
const newsPosts = document.querySelectorAll(".news-page__post-item");
const postsContainer = document.querySelector(".news-page__posts");

filterButtons.forEach((button) => {
  button.addEventListener("click", function () {
    filterButtons.forEach((btn) =>
      btn.classList.remove("news-page__filter-btn--active")
    );
    this.classList.add("news-page__filter-btn--active");

    const filterCategory = this.getAttribute("data-category");

    const postsToShow = [];
    const postsToHide = [];

    newsPosts.forEach((post) => {
      const postCategory = post.getAttribute("data-category");

      if (filterCategory === "all" || postCategory === filterCategory) {
        postsToShow.push(post);
      } else {
        postsToHide.push(post);
      }
    });

    // Step 1: 現在の高さを固定
    const currentHeight = postsContainer.offsetHeight;
    postsContainer.style.height = currentHeight + "px";
    postsContainer.style.overflow = "hidden";

    // Step 2: すべてフェードアウト
    newsPosts.forEach((post) => {
      post.classList.add("is-hidden");
    });

    // Step 3: フェードアウト完了後に処理
    setTimeout(() => {
      // 非表示要素
      postsToHide.forEach((post) => {
        post.classList.add("is-display-none");
      });

      // 表示要素
      postsToShow.forEach((post) => {
        post.classList.remove("is-display-none");
      });

      // リフロー
      if (postsToShow.length > 0) {
        postsToShow[0].offsetHeight;
      }

      // Step 4: 新しい高さを計算して適用
      requestAnimationFrame(() => {
        // 一時的にautoにして新しい高さを取得
        postsContainer.style.height = "auto";
        const newHeight = postsContainer.offsetHeight;
        postsContainer.style.height = currentHeight + "px";

        // リフロー
        postsContainer.offsetHeight;

        // 高さのトランジションを設定
        postsContainer.style.transition = "height 0.3s ease";

        // 次のフレームで新しい高さとフェードインを同時実行
        requestAnimationFrame(() => {
          postsContainer.style.height = newHeight + "px";

          // フェードイン
          postsToShow.forEach((post) => {
            post.classList.remove("is-hidden");
          });
        });
      });

      // Step 5: アニメーション完了後に高さをautoに戻す
      setTimeout(() => {
        postsContainer.style.height = "";
        postsContainer.style.overflow = "";
        postsContainer.style.transition = "";
      }, 500); // 0.2s (フェードアウト) + 0.3s (高さ変更) = 0.5s
    }, 200); // フェードアウトの時間
  });
});

    // FAQアコーディオン
    $('.js-faq-question').on('click', function () {
        $(this).next().slideToggle();
        $(this).toggleClass('is-open');
    });

    // サービスページ ADLアコーディオン
    $('.service-page__adl-content').on('click', function () {
        $(this).find('.service-page__adl-list').slideToggle();
        $(this).find('.service-page__adl-header').toggleClass('is-open');
    });

    window.addEventListener('load', () => {
      const header = document.getElementById("js-header");
      const headerHeight = header ? header.clientHeight : 0;
      console.log("ヘッダー高さ:", headerHeight); // デバッグ用
      
      const target = document.querySelector(location.hash);
      if (target) {
        console.log("ターゲット位置:", target.offsetTop); // デバッグ用
        const targetY = target.offsetTop - headerHeight - 70;
        window.scrollTo({
          top: targetY,
          behavior: 'smooth'
        });
      }
    });