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

(function(){
    'use strict';
    var $ = jQuery;
    $.fn.extend({
        filterTable: function(){
            return this.each(function(){
                $(this).on('keyup', function(e){
                    $('.filterTable_no_results').remove();
                    var $this = $(this),
                        search = $this.val().toLowerCase(),
                        target = $this.attr('data-filters'),
                        $target = $(target),
                        $rows = $target.find('tbody tr');

                    if(search == '') {
                        $rows.show();
                    } else {
                        $rows.each(function(){
                            var $this = $(this);
                            $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                        })
                        if($target.find('tbody tr:visible').size() === 0) {
                            var col_count = $target.find('tr').first().find('td').size();
                            var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
                            $target.find('tbody').append(no_results);
                        }
                    }
                });
            });
        }
    });
    $('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
    $('[data-action="filter"]').filterTable();

    $('.container').on('click', '.panel-heading span.filter', function(e){
        var $this = $(this),
            $panel = $this.parents('.panel');

        $panel.find('.panel-body').slideToggle();
        if($this.css('display') != 'none') {
            $panel.find('.panel-body input').focus();
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
})

//tabla  link
function CrearEnlace(url) {
    location.href=url;
}