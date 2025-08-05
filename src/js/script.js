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
  observeElements(".js-clip-img");
  observeElements(".js-scaleImg");
