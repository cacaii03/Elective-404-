$(document).ready(function () {
    to_Navigation();
    to_dashboard();
});

function to_dashboard(){
    $.post("pages/home/home.php", {}, function (data) {
        console.log(data)
        $("#pages").html(data);
            
        });

}

