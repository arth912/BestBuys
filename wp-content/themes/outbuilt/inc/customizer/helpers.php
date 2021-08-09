<?php

/**
 * Theme Customizer Helpers
 */
if (!function_exists('outbuilt_primary_colors')) :
    /**
     * Selectors for primary color
     */
    function outbuilt_primary_colors($return) {

        $colors = array(
            'a:hover',
            'a:visited:hover',
            '.menu a:hover',
            '.menu li:hover > a',
            '.menu li.current-menu-item > a',
            '.more-link',
            '.more-link:visited',
            '.contact-info-widget.default i',
            '.entry-meta a:hover',
            '.entry-meta a:visited:hover',
            '.entry-content a',
            '.sidebar-footer a:hover',
            '.sidebar-footer .widget a:hover',
            '.tag-links a',
            '.post-pagination .post-detail a',
            '.author-bio .description .name a:hover',
            '.author-bio .author-social-links a:hover',
            '.search-icon .search-toggle:hover',
            '.search-icon .search-toggle:visited:hover',
            '.post-slider .entry-title a:hover',
            '.post-featured .entry-title a:hover',
            '.post-featured-grid .entry-title a:hover',
            '.logged-in-as a',
            '.entry-meta .sermon-speaker a',
            '.widget-tj-recent-posts .tj-recent-posts .recent-posts-comments a:hover',
            '.footer-text a',
            '.pagination .page-numbers.current',
            '.pagination .page-numbers:hover',
            '.widget a:hover',
            '.outbuilt-recent-posts .recent-posts-comments a:hover',
            '.post-carousel .cat-links a',
            '.tribe-events .tribe-events-c-ical__link',
            '.tribe-events-back a:visited',
            '.single-tribe_events a.tribe-events-gcal',
            '.single-tribe_events a.tribe-events-gcal:hover',
            '.single-tribe_events a.tribe-events-ical',
            '.single-tribe_events a.tribe-events-ical:hover',
            '#tribe-events-content a',
            '.woocommerce-account .woocommerce-MyAccount-navigation li.is-active a',
            '.woocommerce-account .woocommerce-MyAccount-navigation li.is-active a:hover'
        );

        $backgrounds = array(
            '.menu li.btn a',
            '.contact-info-widget li.skype a',
            '.author-badge',
            '.site-header-cart .cart-contents .count',
            '.cat-links.cat-bg a',
            '.review-score',
            '.review-heading',
            '.point-type .review-bar .bar',
            '.percentage-type .review-bar .bar',
            'button.mfp-close:hover',
            'button:hover',
            'input[type="button"]:hover',
            'input[type="reset"]:hover',
            'input[type="submit"]:hover',
            'button:focus',
            'input[type="button"]:focus',
            'input[type="reset"]:focus',
            'input[type="submit"]:focus',
            '.button:hover',
            '.button:focus',
            '.back-to-top',
            '.tribe-common .tribe-common-c-btn',
            '.tribe-common a.tribe-common-c-btn',
            '.tribe-common .tribe-common-c-btn:hover',
            '.tribe-common a.tribe-common-c-btn:hover',
            '.tribe-events .tribe-events-c-ical__link:hover',
            '.mobile-navigation .menu-mobile',
            '.wc-button-actions li i:hover',
            '.site-header-cart .woocommerce-mini-cart__buttons a.checkout',
            '.site-header-cart .woocommerce-mini-cart__buttons a:hover',
            '.site-header-cart .woocommerce-mini-cart__buttons a:visited:hover',
            '::selection',
            '::-moz-selection'
        );

        $borders = array(
            '.widget-title::after',
            '.more-link',
            '.menu .sub-menu li:hover',
            '.tribe-events .tribe-events-c-ical__link',
        );

        // Return array
        if ('colors' == $return) {
            return $colors;
        } elseif ('backgrounds' == $return) {
            return $backgrounds;
        } elseif ('borders' == $return) {
            return $borders;
        }
    }
endif;

if (!function_exists('outbuilt_heading_selector')) :
    /**
     * Heading selector
     */
    function outbuilt_heading_selector() {

        $headings = array(
            'h1',
            'h1 a',
            'h1 a:visited',
            'h2',
            'h2 a',
            'h2 a:visited',
            'h3',
            'h3 a',
            'h3 a:visited',
            'h4',
            'h4 a',
            'h4 a:visited',
            'h5',
            'h5 a',
            'h5 a:visited',
            'h6',
            'h6 a',
            'h6 a:visited'
        );

        return $headings;
    }
endif;

if (!function_exists('outbuilt_button_selector')) :
    /**
     * Button selector
     */
    function outbuilt_button_selector() {

        $buttons = array(
            'button',
            'input[type="button"]',
            'input[type="reset"]',
            'input[type="submit"]',
            '.button',
            '.contact-info-widget li.skype a'
        );

        return $buttons;
    }
endif;

if (!function_exists('outbuilt_forms_selector')) :
    /**
     * Form selector
     */
    function outbuilt_forms_selector() {

        $forms = array(
            'form input[type="text"]',
            'form input[type="password"]',
            'form input[type="email"]',
            'form input[type="url"]',
            'form input[type="date"]',
            'form input[type="month"]',
            'form input[type="time"]',
            'form input[type="datetime"]',
            'form input[type="datetime-local"]',
            'form input[type="week"]',
            'form input[type="number"]',
            'form input[type="search"]',
            'form input[type="tel"]',
            'form input[type="color"]',
            'form select',
            'form textarea'
        );

        return $forms;
    }
endif;
