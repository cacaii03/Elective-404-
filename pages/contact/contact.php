<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
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
        <h1>CONTACT</h1>
        <div class="line"></div>
        <div class="rectangle1">
            <h2>NAME:</h2>
            <input type="text" name="" id="name">
            <h3>EMAIL:</h3>
            <input type="email" name="" id="email">
            <h4>MESSAGE:</h4>
            <input type="text" name="" id="message">
        </div>
        <a class="f" href="https://www.facebook.com/cacaii.03?mibextid=ZbWKwL">Maricar Balagan</a>
        <a class="n" href="">09976756463/09702611739</</a>
        <a class="i" href="https://instagram.com/sns3t.icaii_?igshid=YzAwZjE1ZTI0Zg==">suns3t.icaii_</a>
        <a class="e" href="">daparmaricar3@gmail.com</a>
        <a class="l" href="">St.Joseph, Manolo Fortich</a>
        <div class="icon1">
        <img src="image/fb.png" alt="">
        </div>
        <div class="icon2">
        <img src="image/call.jpg" alt="">
        </div>
        <div class="icon3">
        <img src="image/insta.jpg" alt="">
        </div>
        <div class="icon4">
        <img src="image/mail.jpg" alt="">
        </div>
        <div class="icon5">
        <img src="image/loc.jpg" alt="">
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