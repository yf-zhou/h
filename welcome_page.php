<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="main_theme.css" >
        <link rel="shortcut icon" type="image/png" href="images/tea_logo.png"/>
    </head>
    <body>
        <div class="header">
            <h1>Welcome! Join us.</h1>
        </div>
        <div class="login-form">
            <form>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="pwd">Password:</label><br>
                <input type="password" id="pwd" name="pwd"><br>
                <!--<input type="submit" value="Login">-->
                <!--not sure how to check if password is correct using database-->
                <script>
                    
                function cond(){
                    var u=document.getElementById("username").value;
                    var p=document.getElementById("pwd").value;
                    if(u=="guest-user" && p=="password"){
                        // redirect to welcome page
                        document.location.href="user_home_page.htm";
                    } else{
                        document.write("Invalid Name");
                    }
                }
                </script>
                <button type="button" onclick="cond()">Log In</button>
            </form>
        </div>
    </body>
</html>