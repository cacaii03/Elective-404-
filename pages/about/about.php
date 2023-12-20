<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/about.css">
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
        <div class="pic">
            <img src="image/cai.png" alt="">
        </div>
        <h1>ABOUT ME</h1>
        <div class="line"></div>
        <p>Hello! My name is Maricar Balagan. I’m 19 years old, a UI Designer. Who</br> 
        enjoy anything related with designs. I love creating modern,cute,simple</br>
         designs and illustrations with stylized color tones. My Professional goal</br>
          is to be a designer who creates inspiring designs while leaving a lasting</br>
           impression.</p>
           <h2>EDUCATION:
            <li>Oac Elementary School</li>
            <li>Bilar National High School</li>
            <li>Northern Bukidnon State College</li>
           </h2>
           <h3>HOBBIES:
            <li>MUSIC</li>
            <li>READING</li>
            <li>BADMINTON</li>
            <li>TIKTOK</li>
            <li>DIY CRAFTS</li>
           </h3>
           <h4>SKILLS:
            <li>Team Work</li>
            <li>Creativity</li>
            <li>Time Management</li>
            <li>Adaptability</li>
            <li>Good Listener</li>
            <li>Collaboration</li>
           </h4>
           <h5>Languages
            <li>ENGLISH</li>
            <li>FILIPINO</li>
            <li>BISAYA</li>
           </h5>
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