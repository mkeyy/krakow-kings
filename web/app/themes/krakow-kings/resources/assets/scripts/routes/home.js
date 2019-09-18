import Siema from 'siema';

export default {
  init() {
    handleSliderSponsors();

    function handleSliderSponsors() {
      const selector = '.kk-slider--sponsors';

      if($(selector).length !== 0) {
        const items = $(selector).length;

        new Siema({
          selector: selector,
          duration: 200,
          easing: 'ease-in-out',
          perPage: items >= 5 ? 5 : items,
          loop: true,
        });
      }
    }
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
