/* ===============================================
# ヘッダー、ハンバーガーメニュー処理全体
=============================================== */
document.addEventListener("DOMContentLoaded", () => {
  // 定数：クラス名
  const BODY_CLASS = "body-hidden";
  const OPEN_CLASS = "is-open";
  const HIDE_CLASS = "is-none";

  // 要素取得
  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const contactBtn = document.querySelector(".js-contact-btn");
  const mediaQuery = window.matchMedia("(min-width: 768px)");

  // ドロワーメニューを開く
  function openDrawer() {
    document.body.classList.add(BODY_CLASS);
    drawer.classList.add(OPEN_CLASS);
    hamburger.classList.add(OPEN_CLASS);
    if (contactBtn) contactBtn.classList.add(HIDE_CLASS);
  }

  // ドロワーメニューを閉じる
  function closeDrawer() {
    if (!document.body.classList.contains(BODY_CLASS)) return;
    document.body.classList.remove(BODY_CLASS);
    drawer.classList.remove(OPEN_CLASS);
    hamburger.classList.remove(OPEN_CLASS);
    if (contactBtn) contactBtn.classList.remove(HIDE_CLASS);
  }

  // ハンバーガークリックでメニューをトグル
  function toggleDrawer(event) {
    event.preventDefault();
    const isOpen = drawer.classList.contains(OPEN_CLASS);

    if (isOpen) {
      closeDrawer();
    } else {
      openDrawer();
    }
  }

  // ハンバーガーメニュークリックイベント登録
  hamburger.addEventListener("click", toggleDrawer);

  // メニュー内リンククリックでメニューを閉じる
  drawer.addEventListener("click", (event) => {
    if (event.target.matches("a[href]")) {
      closeDrawer();
    }
  });

  // リサイズ時：メニュー閉じる処理
  let resizeTimeout;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      if (mediaQuery.matches) closeDrawer();
    }, 150);
  });

  // ブレークポイント変更時にメニュー閉じる
  mediaQuery.addEventListener("change", () => {
    if (mediaQuery.matches) closeDrawer();
  });
});

  /* ===============================================
  # アニメーション
  // =============================================== */
  function observeElements(selector, activeClass = "is-active") {
    const elements = document.querySelectorAll(selector);

    function handleIntersect(entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add(activeClass);
          observer.unobserve(entry.target);
        }
      });
    }

    const observer = new IntersectionObserver(handleIntersect);

    elements.forEach((element) => observer.observe(element));
  }

  // 使い方例
  observeElements(".js-fade-in");
  observeElements(".js-fade-up");
  observeElements(".js-slide-left");
  observeElements(".js-slide-right");
  observeElements(".js-clip-img");
  observeElements(".js-scaleImg");
  observeElements(".js-fv-content");
  observeElements(".js-text-split");
  observeElements(".js-animation");


  // =======================
  // 文字を1文字ずつ <span> に分割
  // =======================
  function wrapTextInSpans(selector) {
    document.querySelectorAll(selector).forEach(element => {
      const text = element.textContent;
      element.setAttribute('aria-label', text);
      element.setAttribute('role', 'text');
      element.textContent = '';
      [...text].forEach((char, index) => {
        const span = document.createElement('span');
        span.textContent = char;
        span.style.setProperty('--index', index);
        span.setAttribute('aria-hidden', 'true');
        element.appendChild(span);
      });
    });
  }
  wrapTextInSpans(".js-text-split");