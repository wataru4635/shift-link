"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
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
observeElements(".js-clip-img");
observeElements(".js-scaleImg");

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