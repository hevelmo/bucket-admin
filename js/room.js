/* ----------------------------------- *\
 [Route] HOME
\* ----------------------------------- */
    Finch.route('/', {
        setup: function(bindings) {
            section = "home";
            // Add favicon
            window.onload = favicon.load_favicon();
            initMethods.init();
        },
        load: function(bindings) {

        },
        unload: function(bindings) {
            section = "";
            BUC.setHTML(domEl.div_recurren, '');
        }
    });
Finch.listen();
