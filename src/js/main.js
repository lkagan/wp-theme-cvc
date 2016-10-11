(function () {
    'use strict';

    window.addEventListener('DOMContentLoaded', function () {

        // iOS-specific functionality.
        (function() {
            // Get a flag telling us if this is an iOS device.
            var iOS = /iPad|iPhone|iPod|CriOS/.test(navigator.userAgent) && !window.MSStream;

            // Change fixed background to scroll.
            if (iOS) {
                var fixedBgElements = document.getElementsByClassName('fixed-bg');

                if (fixedBgElements != undefined) {
                    for (var i = 0; i < fixedBgElements.length; ++i) {
                        fixedBgElements[i].style.backgroundAttachment = 'scroll';
                    }
                }
            }
        })();

        // Disable the google map iframe from capturing scroll until clicked.
        document.addEventListener('click', function() {
            var map = document.getElementById('google-map');

            if(map == undefined) {
                return true;
            }

            document.getElementById('google-map').classList.remove('scrolloff');
        });


        // Small screen menu open
        document.getElementsByClassName('menu-open')[0]
            .addEventListener('click', function(e) {
                document.getElementsByClassName('main-nav-wrapper')[0].classList.add('open');
            });


        // Small screen menu close 
        document.getElementsByClassName('menu-close')[0]
            .addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementsByClassName('main-nav-wrapper')[0].classList.remove('open');
            });

        // Disable the google map iframe from capturing scroll until clicked.
        document.addEventListener('click', function() {
            var map = document.getElementById('google-map');

            if(map == undefined) {
                return true;
            }

            document.getElementById('google-map').classList.remove('scrolloff');
        });

        setContentTopMargin();
    });


    window.addEventListener('resize', setContentTopMargin);
    document.addEventListener( 'click', closeMenu);
    document.addEventListener( 'touchstart', closeMenu);
    document.addEventListener( 'scroll', animateItems );


    /**
     * Animate items in viewport.
     */
    function animateItems()
    {
        var intro = document.getElementById('intro-section');
        var services = document.querySelectorAll('.services .links a');
        var awards = document.getElementsByClassName('plaque');

        // Animate the intro block
        if (intro) {
            if ( inViewport( intro, 300 ) ) {
                intro.classList.add('animate');
            } else {
                intro.classList.remove('animate');
            }
        }

        // Animate the services links
        if (services) {
            for (var i = 0; i < services.length; ++i) {
                if ( inViewport( services[i], 50 ) ) {
                    services[i].classList.add('animate');
                } else {
                    services[i].classList.remove('animate');
                }
            }
        }

        // Animate the awards
        if (awards) {
            for (var i = 0; i < awards.length; ++i) {
                if ( inViewport( awards[i], 50 ) ) {
                    awards[i].classList.add('animate');
                } else {
                    awards[i].classList.remove('animate');
                }
            }
        }
    }

    /**
     * Add enough margin to the content to push it below the header
     * since the header is fixed.
     */
    function setContentTopMargin()
    {
        document.getElementById('content').style.marginTop =
            document.getElementById('masthead').clientHeight + 'px';
    }


    /**
     * Check if an element is within the window viewport.
     */
    function inViewport(element, padding)
    {
        if(element == undefined) {
            return false;
        }

        padding = padding || 0;
        var boundingBox = element.getBoundingClientRect();
        var windowHeight = document.documentElement.clientHeight;
        var topLimit = padding;
        var bottomLimit = windowHeight - padding;

        if ( ( boundingBox.top > topLimit || boundingBox.bottom > topLimit ) &&
                ( boundingBox.top < bottomLimit || boundingBox.bottom < bottomLimit ) ) {
            return true;
        }

    }


    /**
     *  Close the the main nav if clicking or tapping outside of the nav on small screens.
     *
     * @param event
     * @returns {boolean}
     */
    function closeMenu(event)
    {
        //var container = document.getElementById( 'site-navigation' );
        var container = document.getElementById('site-navigation');
        
        if ( ! container ) {
            return false;
        }
        
        if( event.target === container || isChild( event.target, container )) {
            return false;
        }

        document.getElementsByClassName('main-nav-wrapper')[0].classList.remove('open');
    }


    /**
     * Is the given node a child of the supplied parent?
     *
     * @param node
     * @param parent
     * @returns {boolean}
     */
    function isChild(node, parent)
    {
        while ( node.parentNode !== null ) {
            if ( node === parent ) {
                return true;
            }

            node = node.parentNode;
        }

        return false;
    }

})();
