<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<style>
    *{
       padding: 0;
       margin:0;
       box-sizing:border-box; 
    }
    body{
        background-color: #f3f3f3;
        font-family:'Popins', sans-serif;

    }
    .menu{
        padding:0 10px 30px 10px;
        display: grid;
        grid-template-columns: repeat( auto-fit,minmax(350px, 1fr));
         grid-gap: 20px 40px
         ;}
    .heading{
        background-color: #cb202d;
        color: #ffffff;
        margin-bottom:30px;
        padding: 30px 0;
        grid-column: 1/-1;
        text-align: center;
    }
    .heading > h1{
        font-weight: 400;
        font-size: 30px;
        letter-spacing: 10px;
        margin-bottom:10px;
    }
    .heading>h3{
        font-weight: 600;
        font-size: 22px;
        letter-spacing: 5px ;
    }
    .food-items{
        display:grid;
        position:relative;
        grid-template-rows: auto 1fr;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .food-items img{
        position: relative;
        width:100%;
        border-radius: 15px 15px 0 0;
    }
    h1{
        grid-column: 1/-1;
        text-align: center;
    }
    .details{
        padding: 20px 10px;
        display:grid;
        grid-template-rows:auto 1fr 50px;
        grid-row-gap:15px;
    }
    .details-sub{
        display: grid;
        grid-template-columns: auto auto;
    }
    .details-sub>h5{
        font-weight: 600;
        font-size:18px
    }
    .price{
        text-align: right;

    }
    .details>p{
        color:#6f6f6f;
        font-size:15px;
        line-height:28px;
        font-weight:400;
        align-self:stretch;
    }
    .details>button{
        background-color:#cb202d;
        border:none;
        color: #ffffff;
        font-size: 16px;
        font-weight: 600;
        border-radius: 5px;
        width:180px;
    }
</style>
<body>
    <div class="menu">
        <div class="heading">
            <h1>Cozy Corner Eatery</h1>
            <h3>&mdash; MENU &mdash;</h3>
        </div>
        <div class="food-items">
            <img src="assets/images/burgermenu.jpg">
            <div class="details">
                <div class="details-sub">
                <h5>Smokey Hamburger </h5>
                <h5 class="price"> $8 </h5>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nemo eius aperiam asperiores, unde distinctio vitae molestiae!</p>
            
            </div>
        </div>

        <div class="food-items">
            <img src="assets/images/Pizza.jpg">
            <div class="details">
                <div class="details-sub">
                <h5>Hot & Spicy pizza</h5>
                <h5 class="price"> $8 </h5>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nemo eius aperiam asperiores, unde distinctio vitae molestiae!</p>
            
            </div>
        </div>


        <div class="food-items">
            <img src="assets/images/steaks.jpg">
            <div class="details">
                <div class="details-sub">
                <h5>Steaks </h5>
                <h5 class="price"> $8 </h5>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Nemo eius aperiam asperiores, unde distinctio vitae mol!</p>
            
            </div>
        </div>

        <div class="food-items">
            <img src="assets/images/lasagnamenu.jpg">
            <div class="details">
                <div class="details-sub">
                <h5>Chicken cheese lasagna </h5>
                <h5 class="price"> $8 </h5>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nemo eius aperiam asperiores, unde distinctio vitae molestiae!</p>
            
            </div>
        </div>

        <div class="food-items">
            <img src="assets/images/chowmin.jpg">
            <div class="details">
                <div class="details-sub">
                <h5>Chicken chow-min </h5>
                <h5 class="price"> $8 </h5>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nemo eius aperiam asperiores, unde distinctio vitae molestiae!</p>
            
            </div>
        </div>

        <div class="food-items">
            <img src="assets/images/loli.jpg">
            <div class="details">
                <div class="details-sub">
                <h5>Spicy chicken lollipops</h5>
                <h5 class="price"> $8 </h5>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nemo eius aperiam asperiores, unde distinctio vitae molestiae!</p>
          
            </div>
        </div>
    </div>
</body>
</html>