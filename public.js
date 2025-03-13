$(document).ready(function () {
    function fetchstudents() {
        $.ajax({
            url: "StudentController.php", 
            type: "GET", 
            data: { action: "fetch" }, 
            success: function (response) {
                $("").html(response); 
            }
        });
    }


    $.ajax({
        url: "StudentController.php", 
        type: "POST", 
        data: { action: "add", name: $name, age: $age }, 
        success: function (response) {
            index(); 
            $("")[0].reset();
        },
        error: function (xhr, status, error) {
            console.log("Error: " + xhr.responseText); 
        }
    });

});

