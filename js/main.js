$(document).ready(function() {
    /* ------------------------------------------------------ *\
     [METHOS Control] Serialize Form
    \* ------------------------------------------------------ */
        //This method change a form into a JSON
        $.fn.serializeFormJSON = function() {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name]) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };
    /* ------------------------------------------------------ *\
     [METHOS Control] Currency Format
    \* ------------------------------------------------------ */
        Number.prototype.format = function(n, x) {
            var re = '(\\d)(?=(\\d{' + (x || 3) + '}) + ' + (n > 0 ? '\\.' : '$') + ')';
            return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
        };
    /* ------------------------------------------------------ *\
        EVENT CONTROL
    \* ------------------------------------------------------ */

        $(domEl.recurrent_body).on('click', '.sidebar-toggle-box .fa-bars', sidebarToggleBoxMethod.sidebarToggleBox);
        $(domEl.recurrent_body).on('click', '.toggle-right-box .fa-bars', toggleRightBoxMethod.toggleRightBox);
        $(domEl.recurrent_body).on('click', '.header,#main-content,#sidebar', evenHastMethod.evenHas);

        /*==Sidebar Toggle==*/
        $(domEl.recurrent_body).on('click', ".leftside-navigation .sub-menu > a", sidebarToggleMethod.sidebarToggle);

        /*==Collapsible==*/
        $(domEl.recurrent_body).on('click', '.widget-head', collapsibleMethod.collapsible);

        /*==Panel Tools==*/
        $(domEl.recurrent_body).on('click', '.panel .tools .fa', panelToolsMethod.panelToolsFa);
        $(domEl.recurrent_body).on('click', '.panel .tools .fa-times', panelToolsMethod.panelToolsFaTimes);
});
