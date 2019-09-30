export default {
    init() {
        handleSliderSponsors();

        function handleSliderSponsors() {
            const container = $('.kk-slider--sponsors'),
                items = container.length;

            if (items !== 0) {
                container.slick({
                    rows: 0,
                    infinite: true,
                    autoplay: true,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    variableWidth: true,
                    dots: false,
                    arrows: false,
                    speed: 400,
                    useTransform: items >= 6,
                })
            }
        }
    },
    finalize() {
        // JavaScript to be fired on the home page, after the init JS
    },
};
