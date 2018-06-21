import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

import "./portfolio";

let $animations = [];

$(window).load(function () {

    $('.animate').each(function () {
        $animations.push($(this));
    });

    onScrollAnimations();
});

$(window).scroll(onScrollAnimations);

function onScrollAnimations() {

    if ( !$animations.length ) {
        return;
    }

    let animated = [];

    for ( let i = 0; i < $animations.length; i++ ) {

        let $el = $animations[i];

        if ( $(window).scrollTop() < ($el.offset().top - ($(window).height() * 0.60)) ||
            $(window).scrollTop() > $el.offset().top ) {
            continue;
        }

        $animations[i] = false;
        $el.addClass('animated');
    }

    $animations = $animations.filter((el) => {
        return el !== false;
    });
}