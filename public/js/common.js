window.addEventListener('DOMContentLoaded', function() {
  // ページ内リンクまでスムーズにスクロールする処理
  (() => {
    let Ease = {
      easeInOut: (t) => t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2 ) + 1
    };
    const duration = 500;
    const scrollTriggers = document.querySelectorAll('a[href^="#"]');
    scrollTriggers.forEach((scrollTrigger) => {
      scrollTrigger.addEventListener('click', (e) => {
        let href = scrollTrigger.getAttribute('href');
        let targetElement = document.getElementById(href.replace('#', ''));
        if (targetElement) {
          e.preventDefault();
          e.stopPropagation();
          const rect = targetElement.getBoundingClientRect().top;
          const header = document.getElementById('g-nav');
          const headerHeight = header.offsetHeight;
          const target = rect + window.pageYOffset - headerHeight;
          const currentPostion = document.documentElement.scrollTop || document.body.scrollTop;  // クロスブラウザ対策
          const startTime = performance.now();
          let loop = (nowTime) => {
            let time = nowTime - startTime;
            let normalizedTime = time / duration;
            if (normalizedTime < 1) {
              window.scrollTo(0, currentPostion + ((target - currentPostion) * Ease.easeInOut(normalizedTime)));
              requestAnimationFrame(loop);
            } else {
              window.scrollTo(0, target);
            }
          }
          requestAnimationFrame(loop);
        }
      });
    });
  })();

  // ページトップにスムーズにスクロールする処理
  (() => {
    let Ease = {
      easeInOut: (t) => t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2 ) + 1
    };
    const duration = 500;
    const scrollTrigger = document.getElementById('page-top');
    scrollTrigger.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const currentPostion = document.documentElement.scrollTop || document.body.scrollTop;  // クロスブラウザ対策
      const startTime = performance.now();
      let loop = (nowTime) => {
        let time = nowTime - startTime;
        let normalizedTime = time / duration;
        if (normalizedTime < 1) {
          window.scrollTo(0, currentPostion + ((0 - currentPostion) * Ease.easeInOut(normalizedTime)));
          requestAnimationFrame(loop);
        } else {
          window.scrollTo(0, 0);
        }
      }
      requestAnimationFrame(loop);
    });
  })();
});
