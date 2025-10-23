<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second page</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;

    }

    body {
        /* background: rgb(226, 228, 229); */
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
       color: #2208b7;
    }

    .btn-login {
        background-color: #f7f1f2;
    }

    .btn-login:hover {
        background-color: #e63946;
        color: #000;
    }
    .conatiners {
        height: 400px;
        width: 80%;
        display: flex;
        justify-content: center;
        position: relative;
        top:50%;
        background: #e7d3d3;
        border-radius: 5px;
        left: 10%;
        border:2px solid rgb(75, 70, 70);
        text-align: center;
       
    }

    p {
        width: 100%;
        
        text-align: center;
    }
    .btns {
        width: 100%;
    }

    .boxes {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .start_btn{
        border-radius:100%;
        width: 100px;
        display: flex;
        justify-content: center;
        background: green;
    }
    
    .get_star {
        width: 80px;
        font-size: 15px;
        background-color: rgba(27, 182, 27, 0.69);
        color: white;
        padding: 11px;
        letter-spacing: 1px;
        border-radius: 5px;
        position: relative;
        justify-content: center;
    }
      footer {
       text-align: center;
        margin-top: 20px;
        color: #777;
        height: 100px;
        background: #d9d4d4;
        font-size: 14px;
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

    </nav>
    <br><br><br><br><br>


    <div class="conatiners">
        <div class="boxes">
            <h1>Welcome to DocVision ❤️❤️🤞</h1><br>
            <p>Let's start converting, editing, and managing your PDFs & images. <br>
                Click the button below to begin!</p><br>
<!-- <a href="#" c            lass="start_btn"><button>Starts</button></a> -->
        

        <div class="btns">
               <a href="MainPages.php" ><button class="get_star"> Starting</button></a>

            </div>
</div>
    </div>
<br><br><br><br><br><br><br><br><br>
    <footer>
                © 2025 DocVision Project — All Rights Reserved
            </footer>
</body>

</html>