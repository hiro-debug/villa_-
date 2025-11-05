
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
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

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


  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
 // ページ内リンク(headerの高さ分を計算)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let offset = 50; // 追加でずらすピクセル数分変更
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

});

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
    
    // ※これを使う場合sassに.currrent{}を追加

      // 下からフワッと出てくるアニメーション
      $(window).on("scroll", function () {
        $(".js-fadeIn").each(function () {
            if ($(this).offset().top < $(window).scrollTop() + $(window).height() * 0.75) {
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
      const filterButtons = document.querySelectorAll('.news-page__filter-btn');
      const newsPosts = document.querySelectorAll('.news-page__post-item');

      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          // アクティブボタンの切り替え
          filterButtons.forEach(btn => btn.classList.remove('news-page__filter-btn--active'));
          this.classList.add('news-page__filter-btn--active');

          // フィルターカテゴリの取得
          const filterCategory = this.textContent.trim();

          // 表示・非表示する要素を事前に分類
          const postsToShow = [];
          const postsToHide = [];

          newsPosts.forEach(post => {
            const postTag = post.querySelector('.news-page__post-tag');
            const postCategory = postTag ? postTag.textContent.trim() : '';

            if (filterCategory === 'すべて' || postCategory === filterCategory) {
              postsToShow.push(post);
            } else {
              postsToHide.push(post);
            }
          });

          // 非表示にする要素を処理
          postsToHide.forEach(post => {
            // すでに非表示の場合はスキップ
            if (post.classList.contains('is-display-none')) {
              return;
            }

            // トランジション終了後にdisplay: noneを追加
            const handleTransitionEnd = (e) => {
              if (e.propertyName === 'opacity') {
                e.target.classList.add('is-display-none');
                e.target.removeEventListener('transitionend', handleTransitionEnd);
              }
            };

            post.addEventListener('transitionend', handleTransitionEnd);
            post.classList.add('is-hidden');
          });

          // 表示する要素を処理
          // まずdisplay: noneを解除
          postsToShow.forEach(post => {
            if (post.classList.contains('is-display-none')) {
              post.classList.remove('is-display-none');
              // 初期状態を透明に設定
              post.classList.add('is-hidden');
            }
          });

          // リフローを一度だけ強制
          if (postsToShow.length > 0) {
            postsToShow[0].offsetHeight;
          }

          // 一度のrequestAnimationFrameで全要素をフェードイン
          requestAnimationFrame(() => {
            postsToShow.forEach(post => {
              post.classList.remove('is-hidden');
            });
          });
        });
      });
});
