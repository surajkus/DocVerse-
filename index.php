<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>



<style>
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

    .container {
        max-width: 100%;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    h1 {
        text-align: center;
        color: #0056b3;
        font-weight: 600;
        font-size: 32px;
        position: relative;
        top: 40px;
    }

    .tagline {
        text-align: center;
        font-size: 14px;
        z-index: 200;
        position: relative;
        top: 30px;
        font-family: 'Times New Roman', Times, serif;
        color: #555;
    }

    .works {
        padding: 40px;
        line-height: 37px;

    }

    
    .btn-container {
        display: flex;

    }
    .btn {
       padding: 5px;
    font-size: 11px;
    font-weight: 600;
    border-radius: 8px;
    border: 2px solid rgb(24, 24, 25);
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
       color: #450adb;
    }

    .btn-login {
        background-color: #f7f1f2;
    }

    .btn-login:hover {
        background-color: #e63946;
        color: #000;
    }

    .Main_container {

        /* background: rgb(240, 248, 255); */

    }



    .img_logo {
        display: flex;
        width: 90vw;
        height: 80vh;
        justify-items: center;
        position: relative;
        margin-left: 40px;
        border-radius: 10px;
        bottom: 70px;

    }

    p {
        font-size: 21px;
        padding: 40px;
        line-height: 37px;
        color: #555;
        /* margin-bottom: 18px; */
        font-family: system-ui;
        letter-spacing: 2px;
        /* margin-top: -30px; */
        
    }

    h2 {
        color: #0056b3;
        margin-top: 25px;
        font-size: 22px;
        font-weight: 600;
        border-bottom: 3px solid #007bff;
        display: inline-block;
        padding-bottom: 4px;
    }

    ul {
        margin-top: 10px;
        padding-left: 20px;
    }

    ul li {
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 10px;
    }

    strong {
        color: #222;
    }

    .btns {
        width: 100%;
    }

    .btn_l {
        margin: 0px;
    }

    .get_star {
        background-color: #1db909;
        color: white;
        padding: 11px;
        border: 2px solid blue;
        font-size: 14px;
        border-radius: 6px;
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        justify-content: center;
    }
    .get_star:hover{
         transform: translateY(-5px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
    }

    .image-container {
        display: flex;
        justify-content: center;
        width: 100%;
        gap: 15px;
    }

    .imgbox {
        width: 180px;
        height: 180px;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .imgbox:hover {
        transform: scale(1.08);
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
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
</head>

<body>
    <nav>
        <!-- <h3>DocVerse</h3> -->
        <a href="index.php">Home</a>
        <a href="Contact">Contact</a>
        <a href="Document">Document</a>
        <a href="details">Details</a>
        <a style="margin: 2px; position: relative;top:16px;" href="signup.html" class="btn btn-signup">Signup</a>
        <a style="margin: 7px; position: relative; top: 16px;" href="Login.html" class="btn btn-login">Login</a>

    </nav>
    <div class="Main_container">
        <div class="container">
            <h1>PDF & Image Processing Tool</h1>
            <p class="tagline">Smart Document Tools — Fast • Simple • Powerful</p>

            <img class="img_logo" src="./photo/aiease_1761107034149.jpg" alt="">
            <p>
                This web-based application provides essential tools for working with PDF documents and images.
                It is built to offer high performance, accuracy, and ease of use. Whether you're a student,
                office user, or developer, this tool simplifies document conversion and editing tasks.
            </p>

            <div class="works">

                <h2>✅ works On</h2>

                <li><strong>PDF Editing:</strong></li>
                <li><strong>PDF to Image:</strong></li>
                <li><strong>Image to PDF:</strong></li>
                <li><strong>Image Converter:</strong></li>
                </ul>

            </div>

            <p>
                The main goal of this project is to deliver a professional platform that helps users manage
                documents
                efficiently with fast file handling and high-quality output. It can be extended for OCR,
                watermarking,
                smart compression, and cloud save features.
            </p>
            <div class="btns">
               <a href="secondPage.php" ><button class="get_star">Get Started 👉</button></a>

            </div>
            <div style="display: flex; display: flex;justify-content: center;width: 98%;">
                <img class="imgbox" src="./photo/pdf to png.webp" alt="">
                <img class="imgbox" src="./photo/textEditor.webp" alt="">
                <img class="imgbox" src="./photo/comimage.png" alt="">
                <img class="imgbox" src="./photo/pdftojpg.png" alt="">
            </div>


            <footer>
                © 2025 DocVision Project — All Rights Reserved
            </footer>
        </div>





    </div>
</body>

</html>