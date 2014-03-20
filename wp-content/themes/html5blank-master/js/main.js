jQuery(window).load(function () {

    jQuery('.flexslider.flexFull').flexslider({
        animation: "fade",              //String: Select your animation type, "fade" or "slide"
        easing: "easeInOutExpo",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
        // easing types :
        // swing, easeInQuad, easeOutQuad, easeInOutQuad, easeInCubic, easeOutCubic,
        // easeInOutCubic, easeInQuart, easeOutQuart, easeInOutQuart, easeInQuint,
        // easeOutQuint, easeInOutQuint, easeInSine, easeOutSine, easeInOutSine,
        // easeInExpo, easeOutExpo, easeInOutExpo, easeInCirc, easeOutCirc,
        // easeInOutCirc, easeInElastic, easeOutElastic, easeInOutElastic, easeInBack,
        // easeOutBack, easeInOutBack, easeInBounce, easeOutBounce, easeInOutBounce
        direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
        reverse: false,                 //{NEW} Boolean: Reverse the animation direction
        animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
        startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
        slideshow: false,                //Boolean: Animate slider automatically
        slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 1100,            //Integer: Set the speed of animations, in milliseconds
        initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
        randomize: false,               //Boolean: Randomize slide order

        // Primary Controls
        controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous",           //String: Set the text for the "previous" directionNav item
        nextText: "Next",               //String: Set the text for the "next" directionNav item

        // Usability features
        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        video: true,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
        useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available

        // Secondary Navigation
        keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
        multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
        mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
        pausePlay: false,               //Boolean: Create pause/play dynamic element
        pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
        playText: 'Play',               //String: Set the text for the "play" pausePlay item

        // Callback API
        start: function () {
            jQuery(".flexslider.flexFull").removeClass("loading-slider");
        },
        before: function () {
        },           //Callback: function(slider) - Fires asynchronously with each slider animation
        after: function () {
        },            //Callback: function(slider) - Fires after each slider animation completes
        end: function () {
        },              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
        added: function () {
        },            //{NEW} Callback: function(slider) - Fires after a slide is added
        removed: function () {
        }           //{NEW} Callback: function(slider) - Fires after a slide is removed
    });


    jQuery('.flexslider.flexNews').flexslider({
        animation: "fade",              //String: Select your animation type, "fade" or "slide"
        easing: "easeInOutExpo",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
        // easing types :
        // swing, easeInQuad, easeOutQuad, easeInOutQuad, easeInCubic, easeOutCubic,
        // easeInOutCubic, easeInQuart, easeOutQuart, easeInOutQuart, easeInQuint,
        // easeOutQuint, easeInOutQuint, easeInSine, easeOutSine, easeInOutSine,
        // easeInExpo, easeOutExpo, easeInOutExpo, easeInCirc, easeOutCirc,
        // easeInOutCirc, easeInElastic, easeOutElastic, easeInOutElastic, easeInBack,
        // easeOutBack, easeInOutBack, easeInBounce, easeOutBounce, easeInOutBounce
        direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
        reverse: false,                 //{NEW} Boolean: Reverse the animation direction
        animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
        startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
        slideshow: false,                //Boolean: Animate slider automatically
        slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 900,            //Integer: Set the speed of animations, in milliseconds
        initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
        randomize: false,               //Boolean: Randomize slide order
        manualControls: ".my-controls a",

        // Primary Controls
        controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous",           //String: Set the text for the "previous" directionNav item
        nextText: "Next",               //String: Set the text for the "next" directionNav item

        // Usability features
        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        video: true,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
        useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available

        // Secondary Navigation
        keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
        multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
        mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
        pausePlay: false,               //Boolean: Create pause/play dynamic element
        pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
        playText: 'Play',               //String: Set the text for the "play" pausePlay item

        // Callback API
        start: function () {
            jQuery(".flexslider.flexNews").removeClass("loading-slider");
            var newH = jQuery(".flexNews.flexslider").outerHeight() - 270;
            jQuery(".latestNews").each(function () {
                jQuery(this).css("min-height", newH);
            });

        },
        before: function () {
        },           //Callback: function(slider) - Fires asynchronously with each slider animation
        after: function () {
        },            //Callback: function(slider) - Fires after each slider animation completes
        end: function () {
        },              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
        added: function () {
        },            //{NEW} Callback: function(slider) - Fires after a slide is added
        removed: function () {
        }           //{NEW} Callback: function(slider) - Fires after a slide is removed
    });


    jQuery('.flexslider.flexFeatured').flexslider({
        selector: ".slides2 > li",
        animation: "slide",              //String: Select your animation type, "fade" or "slide"
        easing: "easeOutQuad",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
        // easing types :
        // swing, easeInQuad, easeOutQuad, easeInOutQuad, easeInCubic, easeOutCubic,
        // easeInOutCubic, easeInQuart, easeOutQuart, easeInOutQuart, easeInQuint,
        // easeOutQuint, easeInOutQuint, easeInSine, easeOutSine, easeInOutSine,
        // easeInExpo, easeOutExpo, easeInOutExpo, easeInCirc, easeOutCirc,
        // easeInOutCirc, easeInElastic, easeOutElastic, easeInOutElastic, easeInBack,
        // easeOutBack, easeInOutBack, easeInBounce, easeOutBounce, easeInOutBounce
        direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
        reverse: false,                 //{NEW} Boolean: Reverse the animation direction
        animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
        startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
        slideshow: true,                //Boolean: Animate slider automatically
        slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 700,            //Integer: Set the speed of animations, in milliseconds
        initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
        randomize: false,               //Boolean: Randomize slide order

        // Primary Controls
        controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous",           //String: Set the text for the "previous" directionNav item
        nextText: "Next",               //String: Set the text for the "next" directionNav item

        // Usability features
        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        video: true,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
        useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available

        // Secondary Navigation
        keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
        multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
        mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
        pausePlay: false,               //Boolean: Create pause/play dynamic element
        pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
        playText: 'Play',               //String: Set the text for the "play" pausePlay item

        // Callback API
        start: function () {
        },
        before: function () {
        },           //Callback: function(slider) - Fires asynchronously with each slider animation
        after: function () {
        },            //Callback: function(slider) - Fires after each slider animation completes
        end: function () {
        },              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
        added: function () {
        },            //{NEW} Callback: function(slider) - Fires after a slide is added
        removed: function () {
        }           //{NEW} Callback: function(slider) - Fires after a slide is removed
    });


    jQuery('.flexslider.flexSimple').flexslider({
        animation: "fade",              //String: Select your animation type, "fade" or "slide"
        easing: "easeInOutExpo",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
        // easing types :
        // swing, easeInQuad, easeOutQuad, easeInOutQuad, easeInCubic, easeOutCubic,
        // easeInOutCubic, easeInQuart, easeOutQuart, easeInOutQuart, easeInQuint,
        // easeOutQuint, easeInOutQuint, easeInSine, easeOutSine, easeInOutSine,
        // easeInExpo, easeOutExpo, easeInOutExpo, easeInCirc, easeOutCirc,
        // easeInOutCirc, easeInElastic, easeOutElastic, easeInOutElastic, easeInBack,
        // easeOutBack, easeInOutBack, easeInBounce, easeOutBounce, easeInOutBounce
        direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
        reverse: false,                 //{NEW} Boolean: Reverse the animation direction
        animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
        startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
        slideshow: false,                //Boolean: Animate slider automatically
        slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 1100,            //Integer: Set the speed of animations, in milliseconds
        initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
        randomize: false,               //Boolean: Randomize slide order

        // Primary Controls
        controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous",           //String: Set the text for the "previous" directionNav item
        nextText: "Next",               //String: Set the text for the "next" directionNav item

        // Usability features
        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        video: true,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
        useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available

        // Secondary Navigation
        keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
        multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
        mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
        pausePlay: false,               //Boolean: Create pause/play dynamic element
        pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
        playText: 'Play',               //String: Set the text for the "play" pausePlay item

        // Callback API
        start: function () {
            jQuery(".flexslider.flexSimple").removeClass("loading-slider");
        },
        before: function () {
        },           //Callback: function(slider) - Fires asynchronously with each slider animation
        after: function () {
        },            //Callback: function(slider) - Fires after each slider animation completes
        end: function () {
        },              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
        added: function () {
        },            //{NEW} Callback: function(slider) - Fires after a slide is added
        removed: function () {
        }           //{NEW} Callback: function(slider) - Fires after a slide is removed
    });


    jQuery('.tickerSlider').bxSlider({
        mode: 'vertical',
        slideMargin: 5,
        pager: false,
        controls: false,
        auto: true,
        pause: 4000,
        speed: 1500,
        onSliderLoad: function () {
            jQuery('.tweets').show();
        }
    });

});


jQuery(document).ready(function () {
    jQuery('.printer-link').click(function () {
        window.print();
    });
    jQuery('.product_list form select').change(function () {
        jQuery(this).closest('form').submit();
        return true;
    });

    /* colorbox init */

    if (jQuery().colorbox) {
        jQuery('a.videoPopup').colorbox({
            inline: true,
            maxWidth: "95%",
            height: "auto",
            href: ".video-container"
        });

    }

    // main menu sections
    /*
     jQuery("#mainMenu .container > a").click(function () {
     var $section = jQuery(this).next(".subMenuSection");
     jQuery(".subMenuSection").not($section).slideUp(600, "easeInOutCubic", function () {
     // Animation complete.
     });
     $section.stop().slideToggle(600, "easeInOutCubic", function () {
     // Animation complete.
     if ($section.is(':visible')) {
     jQuery("#mainMenu").addClass("expanded");
     } else {
     jQuery("#mainMenu").removeClass("expanded");
     }
     });

     return false;
     })
     */

    jQuery('.megamenu').megaMenuCompleteSet({
        menu_speed_show: 350, // Time (in milliseconds) to show a drop down
        menu_speed_hide: 200, // Time (in milliseconds) to hide a drop down
        menu_speed_delay: 10, // Time (in milliseconds) before showing a drop down
        menu_effect: 'open_close_slide', // Drop down effect, choose between 'hover_fade', 'hover_slide', etc.
        menu_click_outside: 0, // Clicks outside the drop down close it (1 = true, 0 = false)
        menu_show_onload: 0, // Drop down to show on page load (type the number of the drop down, 0 for none)
        menu_responsive: 1 // 1 = Responsive, 0 = Not responsive
    });

    // jQuery(".megamenu .container > a, .megamenu > li").click(function (e) {
    jQuery(".megamenu > li").click(function (e) {
        var $section = jQuery(this).find(".dropdown_container");

        if ($section.is(':visible')) {
            jQuery(".megamenu").removeClass("expanded");
        } else {
            jQuery(".megamenu").addClass("expanded");
        }

        e.preventDefault();
    })


    // set submenu list height
    /*
     jQuery('.dropdown_container .inner').each(function(){
     var $this = jQuery(this);
     var max = 0;
     jQuery('ul', $this).each(function() {
     var $this2 = jQuery(this);
     var elements = $this2.children().size();
     if(elements > max) {
     max = elements;
     }
     });
     $this.find('> ul').addClass('items_'+ max).css("min-height",10+max*21);
     });
     */


    // show submenu list on hover
    jQuery(".megamenu > li > div .dropdown_container ul > li.menu-item-has-children > a").click(function () {
        jQuery(".megamenu ul").removeClass("current");
        var $current = jQuery(this).closest("ul")
        $current.addClass("current");
        var $prev = $current.parent().closest("ul");
        $prev.addClass("current");

        // hide all submenus
        // var $others = jQuery(".megamenu li.sub-dropdown ul:not(.current)")

        // hide submenus in this section
        var $others = $current.closest(".inner").find("li.menu-item-has-children ul:not(.current)");

        $others.fadeOut(200);
        $others.closest("li.menu-item-has-children").removeClass("open");
        var $next = jQuery(this).next("ul");

        // adjust height
        var max = $next.children().size();
        var $section = jQuery(this).closest(".inner > ul");

        var oldHeight = $section.outerHeight();
        var newHeight = 10 + max * 21;

        // wait for adjusting height (left slide in callback
        if (newHeight > oldHeight) {
            $section.addClass('items_' + max).stop().animate({'min-height': newHeight}, 300, function () {
                // slide from left
                $next.toggle("slide", { direction: "left" }, 200);
            });
            // not wait
        } else {
            $section.addClass('items_' + max).stop().animate({'min-height': newHeight}, 1000, function () {
            });
            // slide from left
            $next.stop().toggle("slide", { direction: "left" }, 200);
        }


        $next.closest("li.menu-item-has-children").addClass("open");

        return false;
    });
    /*
     jQuery(".megamenu > li > div .dropdown_container ul > li.sub-dropdown").hoverIntent({
     over: showMenu,
     out: hideMenu,
     interval:0
     });


     function showMenu() {
     jQuery(this).find("> a").next("ul").show("slide", { direction: "left" }, 200);
     }
     function hideMenu() {
     jQuery(this).find("> a").nextAll("ul").hide("slide", { direction: "left" }, 200);
     }
     */


    // stop slider when new li appear
    jQuery(".my-controls a").click(function () {
        jQuery('.flexslider.flexFeatured').each(function () {
            jQuery(this).flexslider("stop");
        })
    })

    // enable HTML5 placeholder behavior for browsers that aren’t trying hard enough yet
    jQuery('input, textarea').placeholder();


    jQuery('#showCartItems').click(function () {
        jQuery(this).toggleClass("active").next('.cartItems').stop().slideToggle(500, "easeInOutCubic", function () {
            // Animation complete.

        });

        return false;
    });

    // adjust search width
    var searchWidth = jQuery(".topArea .nav.navbar-right").outerWidth();
    jQuery(".topArea .search-form input[type=text]").css("width", searchWidth);
});