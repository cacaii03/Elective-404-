<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Document</title>
</head>
<body>
    <div class="bg">
        <img src="image/bg.jpg" alt="">
        <div class="rectangle">
            <a onclick="to_dashboard()" class="button1">HOME</a>
            <a onclick="to_about()" class="button2">ABOUT ME</a>
            <a onclick="to_project()" class="button3">PROJECTS</a>
            <a onclick="to_contact()" class="button4">CONTACT ME</a>
        </div>
        <h1>WELCOME</h1>
        <h2>to</h2>
        <h3>Maricar's</h3>
        <h4>PROFESSIONAL PORTFOLIO</h4>
        <h5>UI Designer</h5>
        <div class="pic">
            <img src="image/cai.png" alt="">
        </div>
    </div>
    
</body>
</html>

<script>
    function to_about(){
    $.post("pages/about/about.php", {}, function (data) {
        $("#pages").html(data);
            
        });

}

function to_project(){
    $.post("pages/project/project.php", {}, function (data) {
        $("#pages").html(data);
            
        });

}

function to_contact(){
    $.post("pages/contact/contact.php", {}, function (data) {
        $("#pages").html(data);
            
        });

}
</script>