(function($) {
    $(document).on('facetwp-loaded', function() {
        if ( FWP.loaded && 'undefined' !== typeof elementorFrontend ) {
            elementorFrontend.elementsHandler.runReadyTrigger('.facetwp-template');
        }
    });
    $(document).on('click', '.facetwp-template.elementor-widget-archive-posts .elementor-pagination a', function(e) {
        e.preventDefault();
        var matches = $(this).attr('href').match(/\/page\/(\d+)/);
        FWP.paged = null !== matches ? parseInt(matches[1]) : 1;
        FWP.soft_refresh = true;
        FWP.refresh();
    });
    $(document).on('click', '.facetwp-template.elementor-widget-posts .elementor-pagination a', function(e) {
        e.preventDefault();
        var matches = $(this).attr('href').match(/\/(\d+)/);
        FWP.paged = null !== matches ? parseInt(matches[1]) : 1;
        FWP.soft_refresh = true;
        FWP.refresh();
    });
    $(document).on('click', '.facetwp-template .woocommerce-pagination a', function(e) {
        e.preventDefault();
        var matches = $(this).attr('href').match(/product-page=(\d+)/);
        if (null !== matches) {
            FWP.paged = parseInt(matches[1]);
            FWP.soft_refresh = true;
            FWP.refresh();
        }
    });
})(jQuery);