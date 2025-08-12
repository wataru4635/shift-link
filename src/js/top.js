/* ===============================================
# トップページのスライダー機能（はみ出し時のみスクロールバー表示）
=============================================== */
document.addEventListener("DOMContentLoaded", function () {
  const carouselWrap = document.querySelector(".top-scene_carousel_wrap");

  if (!carouselWrap) return;

  const swiper = new Swiper(".top-scene_carousel_wrap", {
    loop: false,
    centeredSlides: false,
    slidesPerView: "auto",
    grabCursor: true,
    scrollbar: {
      el: ".top-scene_carousel_scrollbar",
      hide: false,       // ← Swiper側の自動フェードは使わず、手動で制御
      draggable: true,
      dragSize: 120,
    },
    freeMode: {
      enabled: true,
      sticky: false,
      momentumBounce: false,
    },
    breakpoints: {
      800: {
        scrollbar: { dragSize: 200 },
      },
    },
    on: {
      init()    { toggleScrollbar(this); },
      resize()  { toggleScrollbar(this); },
      update()  { toggleScrollbar(this); },
      imagesReady() { toggleScrollbar(this); } // 画像で幅が変わる場合に備える
    }
  });

  // 初期化直後に一度遅延チェック（フォント読み込み等で幅が変わる対策）
  requestAnimationFrame(() => toggleScrollbar(swiper));

  function toggleScrollbar(swiper) {
    const scrollbarEl = swiper.scrollbar?.el;
    if (!scrollbarEl) return;

    // 全スライドの合計幅を算出（余白も含めた実寸で判定）
    const totalWidth = Array.from(swiper.slides).reduce((sum, slide) => {
      // スライド幅 + spaceBetween を概算
      const w = slide.getBoundingClientRect().width;
      return sum + w + (swiper.params.spaceBetween || 0);
    }, 0);

    // 表示領域（コンテナの可視横幅）
    const containerWidth = swiper.width;
    
    // カルーセル要素を取得
    const carousel = document.querySelector('.top-scene_carousel');

    if (totalWidth > containerWidth + 1) {
      // はみ出している → 表示
      scrollbarEl.style.display = "";
      // サイズ再計算（念のため）
      swiper.scrollbar.updateSize?.();
      // カルーセルのポインターイベントを有効化
      if (carousel) {
        carousel.style.pointerEvents = "auto";
      }
    } else {
      // 収まっている → 非表示
      scrollbarEl.style.display = "none";
      // カルーセルのポインターイベントを無効化
      if (carousel) {
        carousel.style.pointerEvents = "none";
      }
    }
  }
});


/* ===============================================
# よくある質問のアコーディオン機能
=============================================== */
const setupFaqAccordion = () => {
  const faqQuestions = document.querySelectorAll('.js-faq-question');

  if (!faqQuestions.length) return;

  faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
      // 親要素のfaq__itemを取得
      const faqItem = question.closest('.top-faq__item');
      // is-openクラスをトグル
      const isOpen = faqItem.classList.toggle('is-open');

      // 回答部分を取得
      const answer = faqItem.querySelector('.top-faq__item-answer');

      if (isOpen) {
        // 開く場合は高さを設定
        const scrollHeight = answer.scrollHeight;
        answer.style.maxHeight = scrollHeight + 'px';
      } else {
        // 閉じる場合は高さを0に
        answer.style.maxHeight = '0';
      }
    });
  });
};

// DOM読み込み後に実行
document.addEventListener('DOMContentLoaded', () => {
  setupFaqAccordion();
});