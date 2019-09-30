import {clearAllBodyScrollLocks, disableBodyScroll} from 'body-scroll-lock';
import {throttle} from 'lodash';

export default {
    init() {
        handleHeaderScroll();
        handleNavbarCollapse();

        function handleHeaderScroll() {
            const header = $('.kk-header');

            $(window).on('scroll touchmove', throttle(function () {
                if ($(document).scrollTop() > 0) {
                    header.addClass('kk-header--sticky');
                } else {
                    header.removeClass('kk-header--sticky');
                }
            }, 15));
        }

        function handleNavbarCollapse() {
            const $hamburger = $('.kk-header__hamburger');

            $hamburger.on('click', function () {
                const target = $('#' + $(this).data('target'));

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
