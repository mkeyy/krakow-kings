import { tns } from 'tiny-slider/src/tiny-slider';

export default {
  init() {
    handleSliderSponsors();

    function handleSliderSponsors() {
      const container = '.kk-slider--sponsors';

      if($(container).length !== 0) {
        tns({
          container: container,
          items: 4,
          autoplay: true,
          autoplayButtonOutput: false,
          controls: false,
          nav: false,
          mouseDrag: true,
        });
      }
    }
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
