$('body').scrollspy({target: '#doc-navmenu'});
//$('body').scrollspy({target: '#glossaire-navmenu'});

$( document ).ready(function () { // this has to be done after the document has been rendered
    $("[data-toggle='tooltip']").tooltip({html: true}); // enable bootstrap 3 tooltips

    var docHeight = $(document).height();
    var limit = docHeight - 1600;
    var menu = $(".glossaire-menu");
    if (menu.length > 0) {
        $(window).scroll(function() {
            var menuOffset = menu.offset();

            if (menuOffset.top >= limit) {
                menu.hide();
            }
            else {
                menu.show()
            }
        });
    }
});

