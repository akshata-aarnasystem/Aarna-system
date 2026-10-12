window.addEventListener('load', function () {
        const bar = document.getElementById('bar');
        let width = 0;
        const timer = setInterval(function () {
          width += 7;
          if (width >= 100) {
            clearInterval(timer);
            width = 100;
          }
          bar.style.width = width + '%';
        }, 45);
      });
