<?php 
// $x = $_GET['un'];
// $y = $_GET['pass'];
if(isset($_GET['un'],$_GET['pass'])===false){
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>"; echo "Document"; echo "</title>";
echo "    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>"; 
echo "</head>";
echo "<body>";
echo "    <form action='login.php'>";
echo "    <div>"; echo "<h1>"; echo "WELCOME"; echo "</h1>"; echo "</div>";
echo "        <div class='mb-3'>";
            // <!-- <label>Enter a number:</label> -->
            // <!-- <input type="number" name="en" class="form-control"/>  -->
            echo "       <label>"; echo "Username"; echo "</label>"; 
            echo "          <input type='text' name='un' class='form-control'/>";
            echo "        </div>";
            echo "        <div class='mb-3'>";
            echo "<label for='exampleInputPassword1' class='form-label'>"; echo "Password"; echo "</label>";
            echo "<input type='password' name='pass' class='form-control' id='exampleInputPassword1'>";
            echo "        </div>";
            echo "    </div>";
            echo "    <button type='submit' class='btn btn-primary'>"; echo "LOGIN"; echo "</button>";
            echo "  </form>";
            echo "</body>";
            echo "</html>";
 
    
            echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm' crossorigin='anonymous'>"; echo "</script>";
}
       else{
     if($_GET['un']==="Pranto" && $_GET['pass']==="8584_7044"){
   echo " <!DOCTYPE html>";
   echo "<html lang='en'>";
   echo "<head>";
   echo " <meta charset='UTF-8'>";
   echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
   echo " <title>"; echo "Project"; echo "</title>";
   echo "</head>";
   echo "<body>";
   echo "<h1>"; echo "Welcome to our Website"; echo "</h1>";
   echo " <h2>"; echo "This is my first project"; echo "</h2>";
   echo "<hr/>";
   echo " <h3>"; echo "<a href='./public/movie-ranking.html'>"; echo "Movie Ranking"; echo "</a>"; echo "</h3>";
   echo "<img src='./assets/images/movie-ranking.png' height='200'/>";
   echo " <h3>"; echo "<a href='./public/birthday-invite.html'>"; echo "Birthday Invite Project"; echo "</a>"; echo "</h3>";
   echo "<img src='./assets/images/birthday-invite.png' height='200'/>";
   echo "<a href='./public/about.html'>"; echo "About Me"; echo "</a>";
   echo "<h3>"; echo "<a href='./public/contact.html'>"; echo "Contact Me"; echo "</a>"; echo "</h3>";
   echo "</body>";
   echo "</html>";}
   else{
    // include 'login-failure.php';//after enter the else statement the login-failure will be exicuted in login.php
    header("Location:login-failure.php");//after enter the else statement the login-failure will be exicuted in login-failure.php
   }
   }
  ?>
