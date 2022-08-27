<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maimum-scale=1,initial-scale=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
</head>
<style>
    :root{
        --main:orange;
        --bg:#0B1218;
        --bg-body:#131D28;
    }
    *{
        font-family:'Popins' sans-serif;
        box-sizing:border-box;
        text-decoration: none;
        list-style-type: none;
        margin:0;
        padding:0;
    }
    input,button{
        outline:none;
    }
    .sidebar{
        height:100%;
        left:0;
        top:0;
        position: fixed;
        background: var(--bg);
        width:280px;
        overflow-y: auto;
    }
    .brand{
        padding: .5rem 1rem ;
        display:flex;
        color:var(--main);
        align-items: center;
        height:70px;
    }
    .brand span{
        font-size: 1.8rem;
        margin-right: .5rem;
    }
    .side-user{
        margin:1.8rem 0rem;
        text-align:center;

    }
    .side-img{
        height:120px;
        width:120px;
        background-size:cover;
        background-repeat:no-repeat;
        margin:auto;
        border:4px solid #3e454d;
        border-radius: 50%;

    }
    .user{
        text-align:center;
        color:#fff;
        margin-top: .5rem;
    }
    .user small{
        display: inline-block;
        color: var(--main);
    }
    .sidemenu{
        padding:.5rem;
       
    }
    .sidemenu li{
        margin-bottom:.9rem;
    }
.sidemenu a{
    color:#fff;
    font-size:.85rem;
    display:flex;
    align-items: center;
   

}
 .sidemenu a span:first-child{
     font-size: 1.3rem;
     padding: 0rem .6rem;
 }
 .sidemenu a.active{
     background: var(--main);
     color: #fff;
     border-radius: 4px;
     height:45px;

 }
 .main-content{
     margin-left: 280px;
     min-height: 100vh;
     background: var(--bg-body);
     padding:.5rem 1rem;
 }
 header{
     height:70px;
     display:flex;
     justify-content: space-between;
     align-items: center;
     background: var(--bg);
     padding: 0rem 1rem;
     position: fixed;
     left:calc(280px + .1rem);
     right: .1rem;
     top:.5rem;
     border-radius: 3px;
 }
.menu-toggle{
    height: 45px;
    width:45px;
    background: var(--main);
    color:#fff;
    display:grid;
    place-items: center;
    border-radius: 5px;
}
.search{
    display:flex;
    width:300px;
    border-radius: 30px;
    overflow-x: hidden;
    border:3px solid #3e454d;
    align-items: center;
}
.search span{
         font-size:1.3rem;
         color:#fff;
         padding-left:1rem ;

}
.search input{
    flex:1;
    height:42px;
    border:none;
    background: transparent;
    padding:1rem;
    color:#fff;
}
.head-icons span{
    font-size: 1.5rem;
    margin-left: 1rem;
    color:#fff;

}
main{
    margin-top: calc(70px + .5rem);
    padding: 1rem 0rem;
}
.cards{
    display:grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap:3rem;
}
.card{
    background: var(--bg);
    margin-top: 35%;
    padding: 2rem 1rem;
    
}
.card-icon{
    text-align:center;
    display:grid;
    place-items: center;
}
.card-icon span{
    height:55px;
    width:55px;
    color:#fff;
    font-size:2rem;
    border-radius: 6px;
    display:grid;
    place-items: center;
}
.folllow span{
    color:#0072f2;
    background: #e5f3fe;
}
.likes span{
    color:#f42a26;
    background: #fde9ea;
}
.comment span{
    color:#ffbc01;
    background: #fff8e5;
}
.card-info{
    text-align: center;
    margin-top: .6rem;
}
.card-info h2{
    font-size: 3rem;
    color:#efefef;
}
.card-info small{
    display: inline-block;
    color: var(--main);
    font-weight:500;
}
.card-images{
    display:flex;
    justify-content: center;
    align-items: center;
    margin-top: 1.3rem;

}
.card-images div{
    height:45px;
    width:45px;
    background-size:cover;
    background-repeat: no-repeat;
    border-radius: 50%;
    border: 2px solid #efefef;
    position: relative;
    margin-left: -15px;
}
.card-images div:first-child{
    margin-left: 0;
}
.container{
    position: absolute;
    top:68%;
    left: 30%;
    transform: translate(+5%, -5%);
}
#me{
   background-color:var(--bg);
}
.button{
    position: relative;
    
    width: 50px;
    height: 20px;
    padding:40px;
    padding-left: 40px;
    padding-right: 50px;
    margin-right: 60px;
    font-size:12px;
    color:#15f4ee;
    font-family: 'Popins';
    border: 2px solid #15f4ee;
    text-transform: uppercase;
    cursor:pointer;
    border-radius: 50px;
    transition: 1.5s;

}
#col{
    font-size:12px;
    color:#15f4ee;
    font-family: 'Popins';
}
.button:hover{
    box-shadow: 0 5px 50px 0 #15f4ee inset, 0 5px 50px 0 #15f4ee,
                0 5px 50px 0 #15f4ee inset, 0 5px 50px 0 #15f4ee;
    text-shadow: 0 0 5px #15f4ee,0 0 5px #15f4ee;
}
    </style>
<body>
    <div class="sidebar">
        <div class="brand">
            <span class="lab la-affiliatetheme"></span>
            <h2>Artstat</h2>
        </div>
        <div class="sidemenu">
            <div class="side-user">
                <div class="side-img" style="background-image:url(assets/images/blackback.jpg)"></div>
                <div class="user">
                    <small>Admin</small>
                    <p> Cozy Corner Eatery</p>
                </div>
            </div>

            <ul>
                <li>
                    <a href="">
                        <span class="las la-home"></span>
                        <span>dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="active" href="addproduct">
                        <span class="las la-balance-scale"></span>
                        <span>Add dishes</span>
                    </a>
                </li>
                <li>
                    <a href="deleteproduct">
                        <span class="las la-chart-pie"></span>
                        <span>Delete dishes</span>
                    </a>
                </li>
                <li>
                    <a href="updateproduct">
                        <span class="las la-calendar"></span>
                        <span>Update dishes</span>
                    </a>
                </li>
                <li>
                    <a href="updatepass">
                        <span class="las la-envelope"></span>
                        <span>Settings</span>
                    </a>
                </li>
                 
                <li>
                    <a href="menu">
                        <span class="las la-check-circle"></span>
                        <span>Menu</span>
                    </a>
                </li>
                <li>
                    <a href="home">
                        <span class="las la-shopping-cart"></span>
                        <span>Log out</span>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
    <div  class="main-content">
        <header>
            <label for="" class="menu-toggle">
                <span class="las la-bars "></span>
            </label>
            <div class="search">
                <span class="las la-search"></span>
                <input type="search" placeholder="Enter keyword">
            </div>
            <div class="head-icons"> 
                <span class="las la-bell"></span>
                <span class="las la-bookmark"></span> 
                <span class="las la-comment"></span>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card">
                    <div class="card-icon follow">
                        <span class="las la-users"></span>
                    </div>
                    <div class="card-info">
                        <h2> 3,821</h2>
                        <small>Total followers</small>
                    </div>
                    <div class="card-images">
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-icon likes">
                        <span class="las la-heart"></span>
                    </div>
                    <div class="card-info">
                        <h2> 19,8555</h2>
                        <small>Total likes</small>
                    </div>
                    <div class="card-images">
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon comment">
                        <span class="las la-comment"></span>
                    </div>
                    <div class="card-info">
                        <h2> 667</h2>
                        <small>Total comments</small>
                    </div>
                    <div class="card-images">
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                        <div style="background-image:url(assets/images/blackback.jpg)"></div>
                    </div>
                </div>
            </div>
            <div class="chart-grid">
            <div id="myfirstchart" style="height: 250px;"></div>

</div>
        </main>
    </div>

    


</body>
</html>