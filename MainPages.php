<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
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
       color: #4008b1;
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
        top: 50%;
        background: #7bb7f6;
        border-radius: 4px;
        left: 10%;
        border: 2px solid rgb(75, 70, 70);
        /* padding: 30px; */
        text-align: center;
        /* margin-top: 30px; */
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

    .start_btn {
        border-radius: 20px;
        width: 100px;
        display: flex;
        justify-content: center;
        background: green;
    }

    .get_star {
        background-color: rgba(27, 182, 27, 0.69);
        color: white;
        padding: 11px;
        letter-spacing: 1px;
        border-radius: 5px;
        position: relative;
        justify-content: center;
    }

    .heads {
        text-align: center;
    }


    .box1 {
        width: 250px;
        padding: 15px;
        background: #e7d3d3;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        font-family: Arial, sans-serif;
        margin: 15px;
    }

    .box1:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
    }

    .box1 h3 {
        color: #333;
        font-size: 18px;
        margin-bottom: 10px;
        text-transform: capitalize;
    }

    .box1 .imgs {
        width: 100%;
        height: 150px;
        object-fit: contain;
        margin-bottom: 12px;
    }

    .box1 button {
        background: #007bff;
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .box1 button:hover {
        background: #0056b3;
    }
    .allboxes{
        display: flex;
       
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

    </nav><br><br><br><br><br>
    <div class="conatine3">
        <h1 class="heads">Converts the pdf into ....</h1>

    </div>
    <br><br>


    <div class="allboxes">
        <div class="box1">
            <h3>PDF to Image</h3>
            <img class="imgs" src="./photo/pdftojpg.png" alt="PDF to Image">
            <a href="uploadfile.php"><button>Click Here</button></a>
        </div>

        <div class="box1">
            <h3>Image comperrsion</h3>
            <img class="imgs" src="./photo/comimage.png" alt="PDF to Image">
           <a href="uploadfile.php"><button>Click Here</button></a>
        </div>
        <div class="box1">
            <h3>Image Text converter</h3>
            <img class="imgs" src="./photo/textEditor.webp" alt="PDF to Image">
           <a href="uploadfile.php"><button>Click Here</button></a>
        </div>
        <div class="box1">
            <h3>PDF to JPG</h3>
            <img class="imgs" src="./photo/pdf to png.webp" alt="PDF to Image">
<a href="uploadfile.php"><button>Click Here</button></a>
        </div>
        <div class="box1">
            <h3>Word to Image</h3>
            <img class="imgs" src="./photo/wtojpg.jpeg" alt="PDF to Image">
            <a href="uploadfile.php"><button>Click Here</button></a>
        </div>



    </div>
<br><br><br><br><br><br><br><br>

    <footer>
                © 2025 DocVision Project — All Rights Reserved
            </footer>

</body>

</html>