import {clearAllBodyScrollLocks, disableBodyScroll} from 'body-scroll-lock';

export default {
  init() {
    handleNavbarCollapse();

    function handleNavbarCollapse() {
      let $hamburger = $('.kk-header__hamburger');

      $hamburger.on('click', function() {
        let target = $('#' + $(this).data('target'));

        clearAllBodyScrollLocks();

        $(this).toggleClass('is-active');
        target.toggleClass('kk-slide-in');

        if (target.hasClass('kk-slide-in'))
          disableBodyScroll(target[0], {
            reserveScrollBarGap: true,
          });
      });
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
