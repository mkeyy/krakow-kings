export default {
  init() {
    handleNavbarCollapse();

    function handleNavbarCollapse() {
      let $hamburger = $('.kk-header__hamburger');

      $hamburger.on('click', function() {
        let target = $(this).data('target');

        $(this).toggleClass('is-active');
        $('#' + target).toggleClass('kk-slide-in');
      });
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
