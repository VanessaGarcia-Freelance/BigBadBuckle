( function ($) {
    console.log('loading child functions');
    
    var glBreakpoint = 800;

    // $(window).load(function() {
    //     moveSocialNav();
    // });
    

    function moveSocialNav() {
        console.log('vp logo change');
        var windowsize = $(window).width(),
            logo = $('.logo'),
            primary = $('#primary'),
            secondary = $('#secondary');

            console.log('windowsize', windowsize);

        //for mobile
        if(windowsize < glBreakpoint) {

            logo.detach().prependTo(primary);
        }
        //for desktop
        else {
            logo.detach().prependTo(secondary);
        }
    }

    // $(window).resize(function() {
    //     moveSocialNav();
    // });

} )( jQuery )