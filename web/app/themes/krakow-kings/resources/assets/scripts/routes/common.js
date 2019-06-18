export default {
  init() {
    handleNavbarCollapse();

    function handleNavbarCollapse() {
      let $hamburger = $('#primaryNavigation');

      $hamburger.on('click', function() {
        $(this).toggleClass('is-active');
        $(this).siblings('.js-menu').fadeToggle(300);
      });
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
