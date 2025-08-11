"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
/* ===============================================
# ヘッダー、ハンバーガーメニュー処理全体
=============================================== */
document.addEventListener("DOMContentLoaded", function () {
  // 定数：クラス名
  var BODY_CLASS = "body-hidden";
  var OPEN_CLASS = "is-open";
  var HIDE_CLASS = "is-none";

  // 要素取得
  var hamburger = document.querySelector(".js-hamburger");
  var drawer = document.querySelector(".js-drawer");
  var contactBtn = document.querySelector(".js-contact-btn");
  var mediaQuery = window.matchMedia("(min-width: 768px)");

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
    var isOpen = drawer.classList.contains(OPEN_CLASS);
    if (isOpen) {
      closeDrawer();
    } else {
      openDrawer();
    }
  }

  // ハンバーガーメニュークリックイベント登録
  hamburger.addEventListener("click", toggleDrawer);

  // メニュー内リンククリックでメニューを閉じる
  drawer.addEventListener("click", function (event) {
    if (event.target.matches("a[href]")) {
      closeDrawer();
    }
  });

  // リサイズ時：メニュー閉じる処理
  var resizeTimeout;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(function () {
      if (mediaQuery.matches) closeDrawer();
    }, 150);
  });

  // ブレークポイント変更時にメニュー閉じる
  mediaQuery.addEventListener("change", function () {
    if (mediaQuery.matches) closeDrawer();
  });
});

/* ===============================================
# フローティングボタン
=============================================== */
document.addEventListener("DOMContentLoaded", function () {
  var floatingButton = document.querySelector(".js-floating-button");
  if (floatingButton) {
    window.addEventListener("scroll", function () {
      if (window.scrollY > 100) {
        floatingButton.classList.add("is-scroll");
      } else {
        floatingButton.classList.remove("is-scroll");
      }
    });

    // 初期状態のチェック
    if (window.scrollY > 100) {
      floatingButton.classList.add("is-scroll");
    }
  }
});

/* ===============================================
# アニメーション
// =============================================== */
function observeElements(selector) {
  var activeClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "is-active";
  var elements = document.querySelectorAll(selector);
  function handleIntersect(entries, observer) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add(activeClass);
        observer.unobserve(entry.target);
      }
    });
  }
  var observer = new IntersectionObserver(handleIntersect);
  elements.forEach(function (element) {
    return observer.observe(element);
  });
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
  document.querySelectorAll(selector).forEach(function (element) {
    var text = element.textContent;
    element.setAttribute('aria-label', text);
    element.setAttribute('role', 'text');
    element.textContent = '';
    _toConsumableArray(text).forEach(function (_char, index) {
      var span = document.createElement('span');
      span.textContent = _char;
      span.style.setProperty('--index', index);
      span.setAttribute('aria-hidden', 'true');
      element.appendChild(span);
    });
  });
}
wrapTextInSpans(".js-text-split");