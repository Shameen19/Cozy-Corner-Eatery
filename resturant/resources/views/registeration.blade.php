<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
</head>
<style>
    *{
        box-sizing: border-box;
    }
    body{
        background: url('assets/images/back2.jpg');
        background-size: cover;
        font-family: arial;
        color:#333;
        font-size:13px;
        margin:0;
    }
    input, select, button{
        font-family:arial;
        color:#333;
        font-size:14px;
    }
    h3,h4{
        margin:0;
    }
    img{
        width:100%;
        height:100%;
    }
    :focus{
        outline:none;
    }
    .wrapper{
        min-height:100vh;
        background-size: cover;
        background-repeat: no-repeat;
        display:flex;
        align-items: center;
        justify-content: center;
    }
    .inner{
        padding:20px;
        background:#fff;
        max-width:850px;
        margin:auto;
        display:flex;
    }
    .inner .image-holder{
          width:90%;
          height:100%;
     }
     

     .inner form{
         width:50%;
         padding-top:36px;
         padding-left:45px;
         padding-right: 45px;
     }
     .inner h3{
         text-transform: uppercase;
         font-size:25px;
         text-align:center;
         margin-bottom:28px;
     }
     .form-group{
         display:flex;
     }
     .form-group input{
         width: 50%;
     }
     .form-group input:first-child{
         margin-right:25px;
     }
     .form-wrapper{
         position:relative;
     }
     .form-control{
         border:1px solid #333;
         border:none;
         border-bottom: 1px solid #333;
         display:block;
         width:100%;
         height:30px;
         padding-right:0;
         margin-bottom:25px;
     }
    
     button{
         border:none;
         width:164px;
         height:51px;
         margin:auto;
         margin-top:40px;
         cursor:pointer;
         display:flex;
         align-items:center;
         justify-content:center;
         padding-left: 0;
         background:#333;
         font-size: 15px;
         color:#fff;
     }
     button:hover{
         background:purple;
     }
     @media (max-width:767px)
     {
         .inner{
             display:block;
         }
         .inner .image-holder{
             width:100%;
         }
         .inner form{
             width:100%;
             padding:40px 0 30px;
         }
         button{
             margin-top:60px;
         }

     }
    </style>
<body>
    <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
               <img src="assets/images/register.jpeg" alt="Image" class="img1">
            </div>
            <form action="/registeration" method="Post">
            @csrf 
            <h3>Registeration Form</h3>
                
                <div class="form-group">
                    <input type="text" name="firstname" placeholder="First name"class="form-control" required="required"/><span id="first_name"></span><br/>
                    <input type="text" name="lastname"  placeholder="Last name"class="form-control" required="required"/><span id="last_name"></span><br/>
                </div>

                <div class="form-wrapper">
                <input type="text" name="username" placeholder="Username"class="form-control" required="required"/><span id="username"></span><br/>
                </div>

                <div class="form-wrapper">
                <input type="text" name="address" placeholder="Address"class="form-control" required="required"/><span id="address"></span><br/>
               
                </div>

                <div class="form-wrapper">
                <input type="text" name="email" placeholder="Email"class="form-control" required="required"/><span id="email"></span><br/>
                </div>

                <div class="form-wrapper">
                    <input type="password" name="password" placeholder="Password" class="form-control" required="required"/><span id="password"></span><br/>
                </div>
                <button>Register</button>
            </form>
        </div>
    </div>
    <?php
    echo '<script>alert("Registeration successful")</script>';
    ?>

</body>
</html>