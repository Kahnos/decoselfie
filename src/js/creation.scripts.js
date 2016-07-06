/*
    This .js contains all the scripts related to the creation of a new product.
    Author: kahnos
*/
$(document).ready(function(){

    /*
    * Setups jQuery Steps for the creation module.
    */
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true,
        labels: {
            next: "Siguiente",
            previous: "Volver",
            loading: "Cargando..."
        },
        onStepChanging: function(event, currentIndex, newIndex) {


            /*if (currentIndex === 0)
            {
                if ($("#choose > option:selected").val() === "1")
                {
                    wizard.steps("remove", 1);
                    // In this case you could also use add instead of insert
                    wizard.steps("insert", 1, {
                        title: "Result 2",
                        contentMode: "async",
                        contentUrl: "/rest/service/1"
                    });
                }
            }*/
            return true;
        }
    });

    /*---------- Functions ----------*/

    /**
     * Loads the correct step in the creation module, calling the server and then replacing the data shown.
     * @author José Díaz
     * @param int step contains the step number to load.
     */
    function creationLoadCall(step) {
        switch(step) {
            case 1:
                $("#external-pattern").load(".../resources/views/external-pattern.php", function(responseTxt, statusTxt, xhr){
                    if(statusTxt == "success")
                        console.log("External content loaded successfully!");
                    if(statusTxt == "error")
                        console.log("Error: " + xhr.status + ": " + xhr.statusText);
                });
                break;
        }
    }

});

















