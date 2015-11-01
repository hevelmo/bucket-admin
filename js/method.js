/* ------------------------------------------------------ *\
 [Variables] 'Zone'
\* ------------------------------------------------------ */
    var section;
    var IS_MOBILE = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    // Browser supports HTML5 multiple file?
    var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
        isIE = /msie/i.test( navigator.userAgent );
/* ------------------------------------------------------ *\
    [functions] validateEmail
\* ------------------------------------------------------ */
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\., ;:\s@\"] + (\.[^<>()[\]\\., ;:\s@\"] + )*)|(\". + \"))@((\[[0-9] {1, 3}\.[0-9] {1, 3}\.[0-9] {1, 3}\.[0-9] {1, 3}\])|(([a-zA-Z\-0-9] + \.) + [a-zA-Z] {2, }))$/;
        //return re.test(email);
        return true;
    }
/* ------------------------------------------------------ *\
    [functions] Alert Custom
\* ------------------------------------------------------ */
    function resetAlert () {
        alertify.set({
            labels : {
                ok     : "OK",
                cancel : "Cancel"
            },
            delay : 5000,
            buttonReverse : false,
            buttonFocus   : "ok"
        });
    }
/* ------------------------------------------------------ *\
    [Metodos] Favicon
\* ------------------------------------------------------ */
    var favicon = {
        load_favicon: function() {
            favicon.change("../resources/public/img/PROcaricon.ico");
        },
        change: function(iconURL, optionalDocTitle) {
            if (arguments.length == 2) {
              document.title =  optionamDocTitle;
            }
            this.addLink(iconURL, "shortcur icon");
        },
        addLink: function(iconURL, relValue) {
            var link = document.createElement("link");
            link.type = "image/x-icon";
            link.rel = relValue;
            link.href = iconURL;
            this.removeLinkIfExists(relValue);
            this.docHead.appendChild(link);
        },
        removeLinkIfExists: function(relValue) {
            var links = this.docHead.getElementsByTagName("link");
            for (var i=0; i<links .length; i++) {
              var link = links[i];
              if (link.type=="image/x-icon" && link.rel==relValue) {
                this.docHead.removeChild(link);
                return; // Assuming only one match at most.
              }
            }
        },
        docHead:document.getElementsByTagName("head")[0]
    }
/* ------------------------------------------------------ *\
    [Methods] initMethods
\* ------------------------------------------------------ */
    var initMethods = {
        init : function () {
            dcAccordionMethod.fn_dcAccordion();
            sliScrollMethod.fn_slimScroll();
            naceScrollMethod.fn_niceScroll();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] dcAccordionMethod
\* ------------------------------------------------------ */
    var dcAccordionMethod = {
        fn_dcAccordion : function() {
            /*==Left Navigation Accordion ==*/
            if ($.fn.dcAccordion) {
                $('#nav-accordion').dcAccordion({
                    eventType: 'click',
                    autoClose: true,
                    saveState: true,
                    disableLink: true,
                    speed: 'slow',
                    showCount: false,
                    autoExpand: true,
                    classExpand: 'dcjq-current-parent'
                });
            }
        }
    }
/* ------------------------------------------------------ *\
    [Methods] slim Scroll
\* ------------------------------------------------------ */
    var sliScrollMethod = {
        fn_slimScroll :function () {
            /*==Slim Scroll ==*/
            if ($.fn.slimScroll) {
                $('.event-list').slimscroll({
                    height: '305px',
                    wheelStep: 20
                });
                $('.conversation-list').slimscroll({
                    height: '360px',
                    wheelStep: 35
                });
                $('.to-do-list').slimscroll({
                    height: '300px',
                    wheelStep: 35
                });
            }
        }
    }
/* ------------------------------------------------------ *\
    [Methods] nice Scroll
\* ------------------------------------------------------ */
    var naceScrollMethod = {
        fn_niceScroll : function () {
            /*==Nice Scroll ==*/
            if ($.fn.niceScroll) {
                $(".leftside-navigation").niceScroll({
                    cursorcolor: "#1FB5AD",
                    cursorborder: "0px solid #fff",
                    cursorborderradius: "0px",
                    cursorwidth: "3px"
                });

                $(".leftside-navigation").getNiceScroll().resize();
                if ($('#sidebar').hasClass('hide-left-bar')) {
                    $(".leftside-navigation").getNiceScroll().hide();
                }
                $(".leftside-navigation").getNiceScroll().show();

                $(".right-stat-bar").niceScroll({
                    cursorcolor: "#1FB5AD",
                    cursorborder: "0px solid #fff",
                    cursorborderradius: "0px",
                    cursorwidth: "3px"
                });
            }
        }
    }
/* ------------------------------------------------------ *\
    [Methods] sidebarToggleMethod
\* ------------------------------------------------------ */
    var sidebarToggleMethod = {
        sidebarToggle : function(event) {
            var o = ($(this).offset());
            var diff = 80 - o.top;
            if (diff > 0)
                $(".leftside-navigation").scrollTo("-=" + Math.abs(diff), 500);
            else
                $(".leftside-navigation").scrollTo("+=" + Math.abs(diff), 500);
        }
    }
/* ------------------------------------------------------ *\
    [Methods] sidebarToggleBoxMethod
\* ------------------------------------------------------ */
    var sidebarToggleBoxMethod = {
        sidebarToggleBox : function(event) {
            $(".leftside-navigation").niceScroll({
                cursorcolor: "#1FB5AD",
                cursorborder: "0px solid #fff",
                cursorborderradius: "0px",
                cursorwidth: "3px"
            });

            $('#sidebar').toggleClass('hide-left-bar');
            if ($('#sidebar').hasClass('hide-left-bar')) {
                $(".leftside-navigation").getNiceScroll().hide();
            }
            $(".leftside-navigation").getNiceScroll().show();
            $('#main-content').toggleClass('merge-left');
            event.stopPropagation();
            if ($('#container').hasClass('open-right-panel')) {
                $('#container').removeClass('open-right-panel')
            }
            if ($('.right-sidebar').hasClass('open-right-bar')) {
                $('.right-sidebar').removeClass('open-right-bar')
            }

            if ($('.header').hasClass('merge-header')) {
                $('.header').removeClass('merge-header')
            }
        }
    }
/* ------------------------------------------------------ *\
    [Methods] toggleRightBoxMethod
\* ------------------------------------------------------ */
    var toggleRightBoxMethod = {
        toggleRightBox : function(event) {
            $('#container').toggleClass('open-right-panel');
            $('.right-sidebar').toggleClass('open-right-bar');
            $('.header').toggleClass('merge-header');
            event.stopPropagation()
        }
    }
/* ------------------------------------------------------ *\
    [Methods] evenHastMethod
\* ------------------------------------------------------ */
    var evenHastMethod = {
        evenHas : function(event) {
            if ($('#container').hasClass('open-right-panel')) {
                $('#container').removeClass('open-right-panel')
            }
            if ($('.right-sidebar').hasClass('open-right-bar')) {
                $('.right-sidebar').removeClass('open-right-bar')
            }

            if ($('.header').hasClass('merge-header')) {
                $('.header').removeClass('merge-header')
            }
        }
    }
