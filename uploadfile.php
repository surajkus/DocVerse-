<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Page</title>
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
        color:#16aaa0;
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
       color: #3f09be;
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
    


      .upload-btns {
      display: inline-block;
      background-color: #f86f15;
      color: white;
      width: 150px;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 20px;
      text-align: center;
    }

    .upload-btns:hover {
      background-color: #af5f14;
    }

    /* Hide the default file input */
    input[type="file"] {
      display: none;
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
    <h1 style="text-align: center;">Upload the file & document........</h1> 
 <div class="btn_get">

     <input type="file" id="fileUpload">
     
     <!-- Label used as button -->
     <label for="fileUpload" class="upload-btns">Select File </label> 
    </div>


    <footer>
                © 2025 DocVision Project — All Rights Reserved
            </footer>

</body>
</html>