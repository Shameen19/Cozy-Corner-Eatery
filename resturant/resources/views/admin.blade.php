<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Popins',sans-serif;
    }
    section{
        position:relative;
        width:100%;
        height:100vh;
        display:flex;
    }
    section .imgBx{
        position:relative;
        width:50%;
        height:100%;
    }
    section .imgBx:before{
        content:'';
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:linear-gradient(225deg,#e91e63,#03a9f4);
        z-index:1;
        mix-blend-mode: screen;
    }
    section  .imgBx img{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        object-fit:cover;
    }
    section .contentBx{
        display:flex;
        justify-content:center;
        align-items:center;
        width:50%;
        height:100%;
    }
    section .contentBx .formBx{
        width: 50%;
    }
    section .contentBx .formBx h2{
        color:#607d8b;
        font-weight:600;
        font-size:1.5em;
        text-transform: uppercase;
        margin-bottom:20px;
        border-bottom: 4px solid #ff4584;
        display:inline-block;
        letter-spacing:1px;

    }
    section .contentBx.formBx .inputBx{
        margin-bottom:20px;
    }
    section .contentBx .formBx  .inputBx span{
        font-size:16px;
        margin-bottom: 5px;
        display: inline-block;
        color:#607d8b;
        font-weight: 300;
        font-size: 16px;
        letter-spacing: 1px;
}
section .contentBx .formBx  .inputBx input{
    width:100%;
    padding:10px 20px;
    outline:none;
    font-weight: 400;
    border:1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    color:#607d8b;
    background:transparent;
    border-radius:30px;

}
section .contentBx .formBx  .inputBx input[type="submit"]
{
    padding:10px;
    background: #ff4584;
    color:#fff;
    outline:none;
    border:none;
    font-weight:500;
    cursor:pointer;
}
section .contentBx .formBx  .inputBx input[type="submit"]:hover{
    background:#f53677;
}
section .contentBx .formBx .remember 
{
    margin-bottom: 10px;
    color: #607d8b;
    font-weight: 400;
    font-size:14px;
}
#me{
    font-family: 'Popins';
    color: white;
}
#me
{
    width:100%;
    padding:10px 20px;
    outline:none;
    font-weight: 400;
    border:1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    background:transparent;
    border-radius:30px;
    padding:10px;
    background: #ff4584;
    outline:none;
    border:none;
    font-weight:500;
    cursor:pointer;
}
#me{
    background:#f53677;
}
@media (max-width: 768px)
{
      section .imgBx{
          position:absolute;
          top:0;
          left:0;
          width:100%;
          height:100%;
      }
      section .contentBx{
          display:flex;
          justify-content: center;
          align-items:Center;
          width:100%;
          height:100%;
          z-index:1;
      }
      section .contentBx .formBx{
          width:100%;
          padding:40px;
          background:rgb(255 255 255 /0.9);
          margin:50px;
      }
      section .contentBx.formBx h3{
          color:#607d8b;
          text-align: center;
          margin: 30px 0 10px;
          font-weight:500;
      }
}
    </style>

<body>
    <section>
        <div class="imgBx">
             <img src="assets/images/adminrest.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Admin Login</h2>
                <form action="/admin" method="POST">
                @csrf 
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username" required="required"/><span id="uname"></span><br/>
                      </div>
                      <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password" required="required"/><span id="password" ></span><br/>
                      </div>
                      <br>
                      <div class="remember">
                        <label><input type="checkbox" name="">Remember me</label>
                      </div>
                      <div class="inputBx">
                        <input type="submit" value="Login">
                      </div>
                      <br>
                      <br>
                      <div class="inputBx">
                      <button id="me" class="button" type="button"><a href="home" id="col">Home</a></button>
                      </div>

                </form>
            </div>

        </div>
    </section>
    <?php
            
        ?>
    
</body>
</html>