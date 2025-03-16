<!-- ページ内遷移用 -->
<script type="text/javascript">
$(function() {
  $('a[href^="#"]').click(function() {
    var speed = 200;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});
</script>

<!-- PC時左に固定するコンテンツの高さを動的にする -->
<!-- position: sticky;の時（フッターでずれる） -->
<!-- <script>
const content = document.querySelector(".bz-pc__content");

function adjustScale() {
  const windowHeight = window.innerHeight;
  const contentHeight = content.offsetHeight;
  const paddingSpace = 20;

  const adjustedContentHeight = contentHeight + paddingSpace * 2;

  if (windowHeight < adjustedContentHeight) {
    const scaleRatio = windowHeight / adjustedContentHeight;
    content.style.transform = `translate(0%, -50%) scale(${scaleRatio})`;
    content.style.marginTop = `${paddingSpace}px`;
    content.style.marginBottom = `${paddingSpace}px`;
  } else {
    content.style.transform = "translate(0%, -50%) scale(1)";
    content.style.marginTop = "0";
    content.style.marginBottom = "0";
  }
}

adjustScale();
$(window).on("resize", adjustScale);
</script> -->

<!-- position: fixed;の時（フッターでずれない） -->
<script>
// .bz-pc__content 要素を取得
const content = document.querySelector(".bz-pc__content");

// ウィンドウの高さに基づいてスケールを調整する関数
function adjustScale() {
  const windowHeight = window.innerHeight; // ウィンドウの高さを取得
  const contentHeight = content.offsetHeight; // コンテンツの高さを取得
  const paddingSpace = 20; // 上下の余白を設定

  // 上下余白を加えた調整後のコンテンツ高さを計算
  const adjustedContentHeight = contentHeight + paddingSpace * 2;

  // ウィンドウの高さが調整後のコンテンツ高さより小さい場合
  if (windowHeight < adjustedContentHeight) {
    const scaleRatio = windowHeight / adjustedContentHeight; // スケール比率を計算
    content.style.transform = `translateY(-50%) scale(${scaleRatio})`; // スケールと中央配置を適用
    content.style.paddingTop = `${paddingSpace}px`; // 上余白を設定
    content.style.paddingBottom = `${paddingSpace}px`; // 下余白を設定
  } else {
    // ウィンドウの高さが十分な場合、スケールをリセット
    content.style.transform = "translateY(-50%) scale(1)"; // 元のスケールと中央配置に戻す
    content.style.paddingTop = "0"; // 上余白をリセット
    content.style.paddingBottom = "0"; // 下余白をリセット
  }
}

// 初期実行：ページ読み込み時にスケールを調整
adjustScale();

// ウィンドウリサイズ時にスケールを再調整
window.addEventListener("resize", adjustScale);
</script>

<!-- 追従ボタン設定 CTAボタンがあるところでは非表示 -->
<script>
$(document).ready(function() {
  const koteiBtn = $('.kotei-btn');

  function toggleKoteiBtn() {
    const scrollTop = $(window).scrollTop();
    const windowHeight = $(window).height();
    const footerOffsetTop = $('.bz-footer').offset().top;

    // footer表示範囲にボタンが入っているか
    const inFooterRange = scrollTop + windowHeight >= footerOffsetTop;

    // いずれかの .cta-exist が表示範囲にあるか
    let inCtaExistRange = false;
    $('.cta-exist').each(function() {
      const ctaExistOffsetTop = $(this).offset().top;
      if (scrollTop + windowHeight >= ctaExistOffsetTop && scrollTop <= ctaExistOffsetTop + $(this).height()) {
        inCtaExistRange = true;
        return false; // 見つかったらループを終了
      }
    });

    // 表示・非表示の判定
    if (inFooterRange || inCtaExistRange) {
      koteiBtn.removeClass('is-active'); // footerやいずれかのcta-existが見えている場合は非表示
    } else {
      koteiBtn.addClass('is-active'); // それ以外では表示
    }
  }

  // ページ読み込み時に表示・非表示を判定
  toggleKoteiBtn();

  // スクロールイベントで表示・非表示を判定
  $(window).on('scroll', function() {
    toggleKoteiBtn();
  });
});
</script>

<!-- 追従ボタン設定 通常-->
<!-- <script>
$(function() {
  var btn = $('.kotei-btn');

  $(window).on('load scroll', function() {
    if ($(this).scrollTop() > 1000) {
      var height = $(document).height(),
        position = window.innerHeight + $(window).scrollTop(),
        footer = $('.c-footer').offset().top;
      if (position > footer) {
        btn.removeClass('is-active');
      } else {
        btn.addClass('is-active');
      }
    } else {
      btn.removeClass('is-active');
    }
  });

});
</script> -->

<!-- スクロールイベント用 -->
<script>
function js_scroll() {
  $(".js-scroll").each(function() {
    var position = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height() / 1.1;
    if (scroll > position - windowHeight) {
      $(this).addClass("is-active");
    }
  });
};
window.onload = function() {
  js_scroll();
}
$(window).scroll(function() {
  js_scroll();
});
</script>

<!-- 独自JS -->
<!-- アコーディオン -->
<script>
    document.querySelectorAll(".accordionImg").forEach(img => {
        img.addEventListener("click", function() {
            let defaultSrc = this.getAttribute("data-default");
            let altSrc = this.getAttribute("data-alt");

            // 画像を切り替え
            this.src = (this.src.includes(defaultSrc)) ? altSrc : defaultSrc;
        });
    });
</script>

<!-- Safariのみに使用できるクラス -->
<script>
function isSafari() {
  var ua = navigator.userAgent.toLowerCase();
  return ua.indexOf('safari') > -1 && ua.indexOf('chrome') === -1 && ua.indexOf('firefox') === -1;
}

if (isSafari()) {
  document.body.classList.add("safari");
}
</script>

<!-- Splide script 読み込み -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<!-- Splide auto-scroll 読み込み -->
<script
  src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
</script>
</body>

</html>