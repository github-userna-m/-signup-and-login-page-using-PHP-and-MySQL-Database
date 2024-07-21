<?php
require('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Login and Signup page</title>
</head>
<body>
    
    <nav class="nav">
        <h2>CODEMaster</h2>
        <div class="navbar">
            <a href="#">HOME</a>
            <a href="#">TUTORIALS</a>
            <a href="#">RESOURCES</a>
            <a href="#">ABOUT US</a>
        </div>
     <?php
        if(isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true){
            echo "<div style='color:white '>
         $_SESSION[username] .<a style='color:white ' href='logout.php'>LOGOUT</a>
            </div>";

        }else{
            echo'<div class="sing-in-up">
            <button class="btn" onclick="popup2()" >LOGIN</button>
            <button class="btn" onclick="popup1()">SIGN UP</button>
        </div>';

        }
     ?>

    </nav>

    <header>

        <h1>WELCOME CODERS</h1>
        <p>Welcome to CodeMaster, your go-to resource for coding tutorials,
         latest tech news, and community support. Whether you're a beginner or a seasoned developer, we have something for everyone!</p>
        <BUtton class="login-btn"  >GET STARTED</BUtton>


        <div class="popup-container" id="login-popup">
         <div class="login popup" >
            <form action="login_register.php" method="POST">
                <span>
                    <h2>USER LOGIN</h2>
                    <button type="reset" onclick="popup2()">X</button>
               </span>
                <p>
                    <input type="text" placeholder="EMAIL OR USERNAME" name="email_username" required>
                </p>
                <p>
                <input type="password" placeholder="PASSWORD"  name="password"  required>

                </p>
                <button class="login-btn" type="submit" name="login">LOGIN</button>
            </form>
         </div>
        </div>


        <div class="popup-container" id="signup-popup">
          <div class="signup popup">
            <form action="login_register.php" method="POST">
                <span>
                    <h2>SIGN UP</h2>
                    <button type="reset" onclick="popup1()">X</button>
               </span>
               <p>
                    <input type="text" placeholder="FULL NAME" name="fullname" required >
                </p>
                <p>
                    <input type="text" placeholder="USERNAME" name="username" required>
                </p>
                <p>
                    <input type="text" placeholder="EMAIL" name="email" required>
                </p>
                <p>
                <input type="password" placeholder="PASSWORD" name="password" required>

                </p>
                <button class="login-btn" type="submit" name="register">SIGNUP</button>
            </form>
          </div>
        </div>

    </header>

    <main>
    <section id="beginner">
        <h2>Beginner Guides</h2>
        <article class="card">
            <h3>HTML Basics</h3>
            <p>Learn the fundamentals of HTML, the standard markup language for creating web pages.</p>
            <a href="html-basics.html">Read more</a>
        </article>
        <article class="card">
            <h3>Introduction to CSS</h3>
            <p>Get started with CSS, the language used to style and layout web pages.</p>
            <a href="intro-to-css.html">Read more</a>
        </article>
    </section>
        <section id="advanced">
            <h2>Advanced Tutorials</h2>
            <article>
                <h3>Mastering JavaScript</h3>
                <p>Dive deep into JavaScript and learn advanced concepts and techniques.</p>
                <a href="mastering-js.html">Read more</a>
            </article>
            <article>
                <h3>Building Web Apps with React</h3>
                <p>Explore React, a powerful library for building user interfaces.</p>
                <a href="react-web-apps.html">Read more</a>
            </article>
        </section>

        <h2>Resources</h2>
        <section id="snippets">
            <article>
                <h2>Code Snippets</h2>
                <h3>Useful Snippets</h3>
                <p>Find useful code snippets for your projects, from simple loops to complex algorithms.</p>
                <a href="snippets.html">Read more</a>
            </article>
            <article>
                <h2>Tools and Software</h2>
                <h3>Best Coding Tools</h3>
                <p>Explore our curated list of the best code editors and IDEs for developers.</p>
                <a href="tools.html">Read more</a>
            </article>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 CodeMaster. All rights reserved.</p>
    </footer>
    


<?php

 if(isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true){
    echo "<h1 style='text-align:center'>WELCOME TO WEBSITE . $_SESSION[username]</h1>";
 }

?>

    <script>
        function popup1(){
            let id=document.getElementById("signup-popup");
            if(id.style.display=="flex"){
                id.style.display="none";
            }
            else{
                id.style.display="flex";
            }
        }
        function popup2(){
            let id=document.getElementById("login-popup");
            if(id.style.display=="flex"){
                id.style.display="none";
            }
            else{
                id.style.display="flex";
            }
        }
    </script>
</body>
</html>