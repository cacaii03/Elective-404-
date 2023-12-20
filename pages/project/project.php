<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/project.css">
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
        <h1>PROJECTS</h1>
        <div class="line"></div>
        <p>1.Creating our Ordering Management System Design (Coffee Shop)</</p>
        <div class="p">
            <img src="image/p1.png" alt="">
            <img src="image/p2.png" alt="">
            <img src="image/p3.png" alt="">
        </div>
        <h2>2. Coffee Haven Menu</h2>
        <div class="p2">
            <img src="image/haven.png" alt="">
        </div>
        <h3>3. Counter</h3>
        <div class="p3">
            <img src="image/counter.png" alt="">
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