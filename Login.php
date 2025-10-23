<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
  


    .form-container {
        padding: 40px 30px;
        width: 70%;
        border-radius: 20px;
        /* border-radius: 20px; */
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        text-align: center;
        height: 400px;
        margin: 80px;
    }

    .form-container h2 {
        margin-bottom: 20px;
        color: #333;
        font-weight: 600;
    }

    form input {
        width: 100%;
        padding: 12px 15px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 10px;
        outline: none;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    form input:focus {
        border-color: #2575fc;
        box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
    }

    button {
        width: 100%;
        background: #2575fc;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.3s ease;
        margin-top: 10px;
    }

    button:hover {
        background: #1a5dd8;
    }

    p {
        margin-top: 15px;
        color: #555;
        font-size: 14px;
    }

    p span a {
        color: #2575fc;
        text-decoration: none;
        font-weight: 500;
    }

    p span a:hover {
        text-decoration: underline;
    }

    .main_conatiner {
       display: flex;
       /* background-color: #16aaa0; */
    }
    
    
    .left_container{
       width: 50%;
       margin: 0px;
       background: #e7d3d3;
       display: flex;
       flex-direction: column;
       justify-content: center;
       border-radius: 2px 2px 2px;
    }
    .left_container img{
        width: 60%;
        left: 18%;
        position: relative;
       /* margin-top: 120px; */
       height: 400px;
    }

    .right_container{
     width: 50%;
    }
    .pss{
       
        text-align: center;
        font-size: 30px;
        font-weight: bolder;
       
    }
      * {
        margin: 0;
        padding: 0;

    }

   

    nav {
        width: 100%;
        height: 60px;
        z-index: 1000;
        position: fixed;
        text-align: end;
        background: rgb(89, 14, 360);
    }

    nav a {
        margin: 40px;
        /* padding: 30px; */
        position: relative;
        top: 20px;
        color: white;
        font-size: 18px;
        margin-right: 10px;
        text-decoration: none;

    }

    nav a:hover {
        color: #16aaa0;
        box-shadow: 0px 2px 0px 0px;

    }

    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }


    .btn-container {
        display: flex;

    }

    .btn {
        padding: 5px;
        font-size: 11px;
        font-weight: 600;
        border-radius: 8px;
        border: 2px solid rgb(8, 8, 8);
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
        color: rgb(62, 61, 61);
    }

    
    .btn-signup {
        background-color: #f3f6f5;
    }

    .btn-signup:hover {
       background-color: #10a50d;
       color: #2308d2;
    }

    .btn-login {
        background-color: #f7f1f2;
    }

    .btn-login:hover {
        background-color: #e63946;
        color: #000;
    }
   
    .btn_get{
        /* width: 100vh; */
        /* background-color: #333; */
        display: flex;
        justify-content: center;
    }
</style>

<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="Contact">Contact</a>
        <a href="Document">Document</a>
        <a href="details">Details</a>
        <a style="margin: 2px; position: relative;top:16px;" href="signup.html" class="btn btn-signup">Signup</a>
        <a style="margin: 7px; position: relative; top: 16px;" href="login.html" class="btn btn-login">Login</a>
    </nav><br><br><br>1 
    <div class="main_conatiner">
        <div class="left_container">
           <p class="pss">Welcome to <span style="color: #2575fc;">DocVerse</span></p><br><br>
           <img src="./photo/pngtree-pdf-document-download-on-the-laptop-concept-png-image_7845791.png" alt="">
       <span style="padding: 20px;color: #2575fc; text-align: center;">This project is a PDF and Image Editing and Conversion Tool.......</span>
       
       
        </div>
        <div class="right_container">
            <div class="form-container">
                <h2>Login Page</h2>
                <form action= "login_checker.php" method="POST">
                    <!-- <input type="text" name="name" placeholder="Enter your name" required> -->
                    <input type="email" name="email" placeholder="Enter your email address" required>
                    <!-- <input type="tel" name="phone" placeholder="Enter your phone number" required> -->
                    <input type="password" name="password" placeholder="Enter your password" required>

                    <button type="submit">Login</button>

                    <p>DO you  have on account?
                        <span><a href="signup.php">signup Page</a></span>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>