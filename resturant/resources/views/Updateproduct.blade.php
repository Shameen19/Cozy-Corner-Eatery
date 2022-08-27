<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Update dishes</title>
</head>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing:border-box;
        font-family: 'Popins',sans-serif;
    }
    body{
        display:flex;
        height:100vh;
        justify-content: center;
        align-items:center;
        background:linear-gradient(135deg, #71b7e6,#9b59b6);
    }
    .container{
        max-width: 700px;
        width:100%;
        background:#fff;
        padding:25px 30px;
        border-radius:5px;
    }
    .container .title{
        font-size:25px;
        font-weight: 500;
        position: relative;
    }
    .container .title::before{
        content:'';
        position: absolute;
        left:0;
        bottom:0;
        height:3px;
        width:30px;
        background: #9b59b6;

    }
    .container form .user-details{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    form .user-details .input-box{
        margin: 20px 0 12px 0;
        width: calc(100% / 2 - 20px);
    }
    .user-details .input-box .details{
        display: block;
        font-weight:  500;
        margin-bottom:5px;
    }
    .user-details .input-box input{
        height:45px;
        width:100%;
        outline:none;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding-left:15px;
        font-size:16px;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
        border-color:#9b59b6;
    }
    form .button{
        height: 45px;
        margin: 45px 0;
    }
    form .button input{
        height: 100%;
        width: 100%;
        outline: none;
        color: #fff;
        border:none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 5px;
        letter-spacing: 1px;
        background: linear-gradient(135deg ,#71b7e6,#9b59b6)
    }
    form .button input:hover{
        background: linear-gradient(-135deg ,#71b7e6,#9b59b6)
    }
    @media (max-width: 584px)
    {
        .container{
            max-width: 100%;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width:100%;
        }
        .container form .user-details{
            max-height: 300px;
            overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar{
            width:8;

        }
    }
    </style>
<body>
    <div class="container">
        <div class="title">Update Dishes</div>
        <form action="/updateproduct" method="post">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Dish name</span>
                    <input type="text" name="dish" palceholder="Enter dish name" required> <span id="dish"></span>
                </div>
                <div class="input-box">
                    <span class="details">Price</span>
                    <input type="number" name="price" palceholder="Enter price" required><span id="price"></span>
                </div>
            </div>
            <div class="button">
                <input type="submit"value="Submit">
            </div>
        </form>
    </div>
    
</body>
</html>