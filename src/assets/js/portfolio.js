import $ from 'jquery';

window.$ = $;

$(() => {

    $(document).on('click touchend', '[data-portfolio-preview]', function (e) {

        e.preventDefault();

        let i      = $(this).attr('data-portfolio-preview');
        let $frame = $("#portfolio-frame");

        console.log(i);

        $frame.data('portfolio_current_i', i);
        $frame.data('portfolio_current_view', false);
        $frame.addClass('open');
        $('body').addClass('portfolio-open');

        $frame.find('[data-portfolio-site]').click();
    });

    $(document).on('click touchend', '[data-portfolio-close]', function (e) {

        e.preventDefault();

        $("#portfolio-frame").removeClass('open');
        $('body').removeClass('portfolio-open');
    });

    $(document).on('click touchend', '[data-portfolio-site]', function (e) {

        e.preventDefault();

        let $frame = $("#portfolio-frame");
        let i      = $frame.data('portfolio_current_i');
        let view   = $frame.data('portfolio_current_view');

        if (view === 'site') {
            return;
        }

        $frame.data('portfolio_current_view', 'site');
        $frame.addClass('site').removeClass('mobile');
        $frame.find('img').remove();
        $frame.find('.portfolio-frame-image').append(
            `<img src="${JW_Data.template_directory_uri}/dist/assets/images/portfolio/portfolio-${i}-full-site.png" />`
        );
    });

    $(document).on('click touchend', '[data-portfolio-mobile]', function (e) {

        e.preventDefault();

        let $frame = $("#portfolio-frame");
        let i      = $frame.data('portfolio_current_i');
        let view   = $frame.data('portfolio_current_view');

        if (view === 'mobile') {
            return;
        }

        $frame.data('portfolio_current_view', 'mobile');
        $frame.addClass('mobile').removeClass('site');
        $frame.find('img').remove();
        $frame.find('.portfolio-frame-image').append(
            `<img src="${JW_Data.template_directory_uri}/dist/assets/images/portfolio/portfolio-${i}-full-mobile.png" />`
        );
    });
});