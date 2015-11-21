$(document).ready(function () {


    /* this function makes dropdown when its above the mouse */
    function HooverDroopDown() {
        $('ul.nav li.dropdown').hover(
                function () {
                    $('.dropdown-menu', this).fadeIn();
                },
                function () {
                    $('.dropdown-menu', this).fadeOut('fast');
                }
        );//hover
    }
    /* this function highlight the nav bar need id in the body tag */
    function highlightNav() {
        var element = $("body").attr("id");
        // $("a:contains('" + element + "')").parent().addClass('active');
        if (element !== "") {
            $(".navbar-nav > li a:contains('" + element + "')").parent().addClass('active');
        }


    }
    /*this fucntion highlight the li > a off the navbar */
    function HooverNav() {
        $('ul.nav > li').hover(
                function () {
                    $(this).addClass('active');
                },
                function () {
                    $(this).removeClass('active');
                }
        );//hover
    }
    /*this function set alerts in a modal */
    function AlertModal(){
        $('#flash-overlay-modal').modal();
    }

    function AlertSideUp(){
        $("div.alert").not(".alert-important").delay(3000).slideUp();
     }


    AlertSideUp();
    AlertModal();
    HooverDroopDown();
    highlightNav();
    HooverNav();

/*******Class Cookies*******/
    /*
    @constructor
     */
    function Cookies(){}

    Cookies.prototype.Create = function()
    {
     //   $.cookie("test", 1);

    }




});