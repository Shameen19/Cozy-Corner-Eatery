<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
</head>
<style>
    body{
        background-image:url('assets/images/f1.jpg');
        background-repeat:no-repeat;
        height:100%;
        background-size: cover;
        background-position:center;
        font-family:sans-serif;
    }
    .loginbox{
        width:320px;
        height:520px;
        background: #000;
        color: white;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding:70px 30px;
    }
    .avatar{
        width:100px;
        height:100px;
        border-radius:50%;
        position: absolute;
        top:-50px;
        left: calc(50%,-50px);

    }
    h1{
        margin:0;
        padding: 0 0 20px;
        text-align:center;
        font-size:22px;

    }
    .loginbox p{
        margin:0;
        padding:0;
        font-weight: bold;
    }
    .loginbox input{
        width:100%;
        margin-bottom: 20px;
    }
    .loginbox input[type="text"]
    {
        border: none;
        border-bottom:1px solid #fff;
        background:transparent;
        outline:none;
        height:40px;
        color:#fff;
        font-size:16px;


    }
    .loginbox input[type="password"]
    {
        border: none;
        border-bottom:1px solid #fff;
        background:transparent;
        outline:none;
        height:40px;
        color:#fff;
        font-size:16px;
    }
    .loginbox input[type="submit"]
    {
        border:none;
        outline:none;
        height:40px;
        background: #fb2525;
        color:#fff;
        font-size: 18px;
        border-radius:20px;
    }
    .loginbox input[type="submit"] :hover{
        cursor:pointer;
        background: #ffc107;
        color:#000;
    }
    .loginbox a{
        text-decoration:none;
        font-size:12px;
        line-height:20px;
        color:darkgrey;
    }
    #me
    {
        border:none;
        outline:none;
        width:97%;
        height:40px;
        background: #fb2525;
        color:#fff;
        font-size: 18px;
        border-radius:20px;
    }
  
    </style>
<body>

   <div class="loginbox">
   <div  class="col-lg-6 col-sm-12" >
    <img src="assets/images/loginavatar.png" class="avatar">
    </div>
    <h1>Login Here</h1>
    <form class="loginform">
    <div  class="col-lg-6 col-sm-12" >
        <input type="text" name="" placeholder="Enter username" required="required"><span id="uname"></span><br/>
        </div>
        <div  class="col-lg-6 col-sm-12" >
        <input type="password" name="" placeholder="Enter password" required="required"><span id="pass"></span><br/>
        </div>
        <div  class="col-lg-6 col-sm-12" >
        <input type="submit" name="" value="Login">
        </div>
        <div  class="col-lg-6 col-sm-12" >
        
        <button id="me" class="button" type="button"><a href="home" id="col">Home</a></button>
        </div>
        <div  class="col-lg-6 col-sm-12" >
        <a href="">Forgot your Password?</a><br>
        </div>
        <div class="col-lg-6 col-sm-12" >
        <a href="">Register here</a><br>
        </div>
    </form>
   </div>
   
</body>
</html>