$(document).ready(function() {
    $.fn.viewport_info();
    console.log('viewport size: '+$viewport_size);
    console.log('screen_height: '+$screen_height);
    console.log('avail_height: '+$avail_height);
    console.log('orientation: '+$orientation);
    console.log('device: '+$device);
    
}); // end of $(document).ready(function()

$(window).resize(function() {    
    $.fn.viewport_info();
    console.log('viewport size changed!');
    console.log('viewport size: '+$viewport_size);
    console.log('orientation: '+$orientation);
    console.log('device: '+$device);
    
}); // end of $(window).resize(function()

$(window).on('beforeunload', function() {
    //$(window).scrollTop(0);
}); // end of $(window).on('beforeunload', function()

$.fn.viewport_info = function() {    
    var viewport_width, viewport_height, viewport_size, device, orientation;
    
    viewport_width = $(window).width();
    viewport_height = $(window).height();
    viewport_size = viewport_width+' x '+viewport_height;

    $viewport_width = viewport_width;
    $viewport_height = viewport_height;
    $viewport_size = viewport_size;
    
    $screen_height = window.screen.height;
    $avail_height = window.screen.availHeight;

    if (viewport_width < 768) {
        $('body').addClass('mobile');
        device = 'mobile';
    } // end of if (viewport_width < 768)
    else if (viewport_width >= 768 && viewport_width <= 1024) {
        $('body').removeClass('mobile');
        device = 'tablet';
    }
    else {
        device = 'desktop';
    }
    
    $device = device;
    
    if (viewport_width >= viewport_height) {
        orientation = 'landscape';
    }
    else {
        orientation = 'portrait';
    }
    
    $orientation = orientation;    
    
} // end of $.fn.viewport_size = function()

$.fn.resize_body_size = function() {
    $('body').css('min-height', $viewport_height);
} // end of $.fn.resize_body_height = function()

$.fn.scroll_top_pos = function() {
    var scroll_top_pos = $(window).scrollTop();
    $scroll_top_pos = scroll_top_pos;
    console.log('scroll_top_pos: '+scroll_top_pos);
} // end of $.fn.scroll_top_pos = function()

$.fn.listen_scroll = function() {        
    $(window).on( 'scroll', function (e) {        
        $.fn.scroll_top_pos();        
    }); // end of $(window).on( 'scroll', function (e)
} // end of $.fn.listen_scroll = function()

$.fn.listen_swipe = function() {
    $('body').swipe({
        swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
            console.log('swiping!');
            console.log('you swiped '+direction);           
        },
        threshold: 0
    }); // end of $('body').swipe({
} // end of $.fn.listen_swipe = function()

$.fn.vcenter = function() {
    $('.vcenter').parent().css({
        'display': 'table',
        'width': '100%'
    });    
} // end of $.fn.vcenter = function()

$.fn.initiate_skrollr = function() {

    if ($device == 'desktop') {
        console.log('initiating skrollr!');        
        var s = skrollr.init({
            render: function(data) {
                //console.log('current_top: '+data.curTop);                
            }
        }); // end of var s = skrollr.init({  
    } // end of if ($viewport_width > 1024)              

} // end of $.fn.initiate_skrollr = function()