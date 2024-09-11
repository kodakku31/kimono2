// 2024/8/29まで使用していたmain.js
// footer.phpのjs部分をmain.jsに移行した

$(function () {
  /*=================================================
  MENU
  ===================================================*/
  $(".gNav_primary li,.gNav_sns,.gNav_privacy,.gNav_copyright").addClass(
    "fade"
  );

  $(".gNavBtn").on("click touchstart", function (event) {
    event.preventDefault();
    if ($(this).hasClass("active")) {
      $(".gNav").removeClass("active");
      $(this).removeClass("active");
      bodyScrollPrevent(false);
      $(".gNav_primary li,.gNav_sns,.gNav_privacy,.gNav_copyright").addClass(
        "fade"
      );
    } else {
      $(".gNav").addClass("active");
      $(this).addClass("active");
      bodyScrollPrevent(true);
      $(".gNav_primary li,.gNav_sns,.gNav_privacy,.gNav_copyright").removeClass(
        "fade"
      );
    }
  });

  /*=================================================
  top   .homeClossLy_textBox
  ===================================================*/
  //特徴１
  $(".homeClossLy .contentBtn1").on("click touchstart", function (event) {
    event.preventDefault();
    if ($(this).hasClass("active")) {
      $(".first_content").removeClass("active");
      $(this).removeClass("active");
    } else {
      $(".first_content").addClass("active");
      $(this).addClass("active");
    }
  });
  //特徴2
  $(".homeClossLy .contentBtn2").on("click touchstart", function (event) {
    event.preventDefault();
    if ($(this).hasClass("active")) {
      $(".second_content").removeClass("active");
      $(this).removeClass("active");
    } else {
      $(".second_content").addClass("active");
      $(this).addClass("active");
    }
  });
  //特徴3
  $(".homeClossLy .contentBtn3").on("click touchstart", function (event) {
    event.preventDefault();
    if ($(this).hasClass("active")) {
      $(".third_content").removeClass("active");
      $(this).removeClass("active");
    } else {
      $(".third_content").addClass("active");
      $(this).addClass("active");
    }
  });

  /*=================================================
  スマホ・タブレット、メインビジュアル高さ調整とスマホ時のホバー解除
  ===================================================*/
  const ua = navigator.userAgent;
  if (
    ua.indexOf("iPhone") > -1 ||
    (ua.indexOf("Android") > -1 && ua.indexOf("Mobile") > -1) ||
    ua.indexOf("iPad") > -1 ||
    ua.indexOf("Android") > -1
  ) {
    // $(".homeWoks_list,.buildHow_list").addClass("hoverNone");
    if ($(".lyMv").length) {
      $(".lyMv").css("height", window.innerHeight);
    }
  }

  /*=================================================
  縦書き
  ===================================================*/
  if ($(".ly_vcTextJp").length) {
    $(".ly_vcTextJp")
      .children()
      .addBack()
      .contents()
      .each(function () {
        if (this.nodeType == 3) {
          $(this).replaceWith(
            $(this).text().replace(/(\S)/g, "<span>$1</span>")
          );
        }
      });
    $(".ly_vcTextJp span").each(function () {
      if (
        $(this)
          .text()
          .match(/^[（）ー]*$/)
      ) {
        $(this).css({
          transform: "rotate(90deg) rotateX(180deg)",
        });
      }
    });
  }
  /*=================================================
  ly_vcTextJpとセット
  ===================================================*/
  if ($(".movetext_jp").length) {
    $(".movetext_jp span").css({
      opacity: 0,
    });
    setTimeout(function () {
      $(".movetext_jp").each(function () {
        for (var i = 0; i <= $(this).children("span").length; i++) {
          $(this)
            .children("span")
            .eq(i)
            .delay(100 * i)
            .animate(
              {
                opacity: 1,
              },
              800
            );
        }
      });
    }, 1000);
  }

  if ($(".movetext_en").length) {
    $(".movetext_en")
      .children()
      .addBack()
      .contents()
      .each(function () {
        if (this.nodeType == 3) {
          $(this).replaceWith(
            $(this).text().replace(/(\S)/g, "<span>$1</span>")
          );
        }
      });
    $(".movetext_en span").css({
      opacity: 0,
    });
    setTimeout(function () {
      $(".movetext_en").each(function () {
        for (var i = 0; i <= $(this).children("span").length; i++) {
          $(this)
            .children("span")
            .eq(i)
            .delay(100 * i)
            .animate(
              {
                opacity: 1,
              },
              800
            );
        }
      });
    }, 2000);
  }
  /*=================================================
  トップページメインビジュアルテキスト
  ===================================================*/
  if ($(".homeMovetext").length) {
    $(".homeMovetext p")
      .children()
      .addBack()
      .contents()
      .each(function () {
        if (this.nodeType == 3) {
          $(this).replaceWith(
            $(this).text().replace(/(\S)/g, "<span>$1</span>")
          );
        }
      });
    $(".homeMovetext span").css({
      opacity: 0,
    });

    setTimeout(function () {
      $(".homeMovetext_jp").each(function () {
        for (var i = 0; i <= $(this).children("span").length; i++) {
          $(this)
            .children("span")
            .eq(i)
            .delay(100 * i)
            .animate(
              {
                opacity: 1,
              },
              800
            );
        }
      });
    }, 1000);

    setTimeout(function () {
      $(".homeMovetext_en").each(function () {
        for (var i = 0; i <= $(this).children("span").length; i++) {
          $(this)
            .children("span")
            .eq(i)
            .delay(100 * i)
            .animate(
              {
                opacity: 1,
              },
              800
            );
        }
      });
    }, 3000);
  }

  /*=================================================
  スクロールイベントの各位置取得 （グローバル変数）
  ===================================================*/
  var winPos = 0;
  var winHeight = $(window).outerHeight();
  $(window).on("scroll", function () {
    winPos = $(this).scrollTop();
    winHeight = $(window).outerHeight();
  });

  /*=================================================
  スクロールアニメーション 発火
  ===================================================*/
  scrollAnimation();
  $(".woks_list li:first-child").addClass("on");
  $(window).scroll(function () {
    scrollAnimation();
  });

  function scrollAnimation() {
    $(".scrollFade,.scrollFadeBottom,.scrollFadeBottom02").each(function () {
      targetElement = $(this).offset().top;
      if (winPos > targetElement - winHeight + 100) {
        $(this).addClass("on");
      }
    });
  }

  /*=================================================
  bodyScrollPrevent
  ===================================================*/
  function bodyScrollPrevent(flag) {
    let scrollPosition;
    const body = document.getElementsByTagName("body")[0];
    const ua = window.navigator.userAgent.toLowerCase();
    const isiOS =
      ua.indexOf("iphone") > -1 ||
      ua.indexOf("ipad") > -1 ||
      (ua.indexOf("macintosh") > -1 && "ontouchend" in document);
    const scrollBarWidth = window.innerWidth - document.body.clientWidth;
    if (flag) {
      body.style.paddingRight = scrollBarWidth + "px";
      if (isiOS) {
        scrollPosition = -window.pageYOffset;
        body.style.position = "fixed";
        body.style.width = "100%";
        body.style.top = scrollPosition + "px";
      } else {
        body.style.overflow = "hidden";
      }
    } else if (!flag) {
      body.style.paddingRight = "";
      if (isiOS) {
        scrollPosition = parseInt(body.style.top.replace(/[^0-9]/g, ""));
        body.style.position = "";
        body.style.width = "";
        body.style.top = "";
        window.scrollTo(0, scrollPosition);
      } else {
        body.style.overflow = "";
      }
    }
  }

  /*=================================================
  スライダー
  ===================================================*/
  // スライダー02
  if ($(".slider").length) {
    $(".slider").slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4000,
      fade: true,
      speed: 1000,
      dots: true,
      dotsClass: "slider_dots",
      pauseOnHover: false,
      pauseOnFocus: false,
    });
  }

  // スライダー03
  if ($(".sliderBA").length) {
    $(".sliderBA").slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4000,
      fade: true,
      speed: 1000,
      dots: true,
      dotsClass: "sliderBA_dots",
    });
  }

  // スライダー04 トップページ実例
  if ($(".homeWorks_slider").length) {
    function spSlider() {
      w = window.innerWidth;
      if (w <= 767) {
        $(".homeWorks_slider").not(".slick-initialized").slick({
          infinite: false,
          prevArrow:
            "<button class='homeWorks_slider_prev'><img src='/wp-content/themes/kimono/image/slide_arrows_prev.svg' alt=''></button>",
          nextArrow:
            "<button class='homeWorks_slider_next'><img src='/wp-content/themes/kimono/image/slide_arrows_next.svg' alt=''></button>",
        });
      } else {
        $(".homeWorks_slider.slick-initialized").slick("unslick");
      }
    }
    $(window).resize(function () {
      spSlider();
    });
    spSlider();
  }
});
