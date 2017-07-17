"use strict";
/*-----------------------------------
 FUNFACTSs
 -----------------------------------*/
$('.count').waypoint(function() {
    // start all the timers
    $('.count').each(count);

    function count(options) {

        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }
}, {
    offset: '70%',  // middle of the page
    triggerOnce: true
});

/*-----------------------------------
 ANIMATIONS
 -----------------------------------*/

function onScrollInit( items, trigger ) {
    items.each( function() {
        var osElement = $(this),
            osAnimationClass = osElement.attr('data-os-animation'),
            osAnimationDelay = osElement.attr('data-os-animation-delay');

        osElement.css({
            '-webkit-animation-delay':  osAnimationDelay,
            '-moz-animation-delay':     osAnimationDelay,
            'animation-delay':          osAnimationDelay
        });

        var osTrigger = ( trigger ) ? trigger : osElement;

        osTrigger.waypoint(function() {
            osElement.addClass('animated').addClass(osAnimationClass);
        },{
            triggerOnce: true,
            offset: '70%'
        });
    });
}

onScrollInit( $('.os-animation') );
onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );


// tab from footer
$(function(){
    $('.btn-circle').on('click',function(){
        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
        $(this).addClass('btn-info').removeClass('btn-default').blur();
    });

    $('.next-step, .prev-step').on('click', function (e){
        var $activeTab = $('.tab-pane.active');

        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

        if ( $(e.target).hasClass('next-step') )
        {
            var nextTab = $activeTab.next('.tab-pane').attr('id');
            $('[href="#'+ nextTab +'"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#'+ nextTab +'"]').tab('show');
        }
        else
        {
            var prevTab = $activeTab.prev('.tab-pane').attr('id');
            $('[href="#'+ prevTab +'"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#'+ prevTab +'"]').tab('show');
        }
    });
});
