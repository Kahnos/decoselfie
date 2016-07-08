/*
    This .js contains all the scripts related to the creation of a new product.
    Author: kahnos
*/
$(document).ready(function(){

    var getURL = window.location;
    var baseURL = getURL .protocol + "//" + getURL.host + "/" + getURL.pathname.split('/')[1];

    /*
    * Setups jQuery Steps for the creation module.
    */
    $("#steps").steps({
        headerTag: "h3",
        bodyTag: "step",
        transitionEffect: "slideLeft",
        autoFocus: true,
        labels: {
            next: "Siguiente",
            previous: "Volver",
            loading: "Cargando..."
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            return true;
        }
    });

    /*
    * Setups slick jQuery library for image carousel.
    */

    /*$('.carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });*/
    $('.carousel').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                    settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    /*---------- Functions ----------*/

    /**
     * Loads the correct step in the creation module, calling the server and then replacing the data shown.
     * @author José Díaz
     * @param int step contains the step number to load.
     */
    /*function loadStep(step) {
        switch (step) {
            case 1:
                if (ajaxCall('/src/assets/views/external-pattern.php', '#orientation'))
                    return true;
                break;
        }

        console.log("Shit.");
        return false;
    }

    function ajaxCall(stepURL, stepID) {
        $.ajax({
            url: baseURL + stepURL,
            type: 'GET',
            async: false,
            timeout: 30000,
            error: function(){
                console.log('Error loading via AJAX.');
                return false;
            },
            success: function(result){
                console.log('Data loaded via AJAX.');
                $(stepID).replaceWith(result);
                return true;
            }
        });
    }*/

});

















