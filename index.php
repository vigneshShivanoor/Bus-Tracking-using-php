<?php
session_start();
// $_SESSION['usnm']="Dhanush";
if(!empty($_SESSION['usnm']))
{
    // $var=$_SESSION['vali'];
    header("url:index.php");
}
else if(empty($_SESSION['usnm']))
header("url:dtproj.html")
?>
<html>
    <head>
        <title>transport services</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            *{
    margin: 0;
    padding: 0;
}
#banner{
    background: linear-gradient(rgba(0,0,0,0.5),#009688),url(l2.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;

}
.logo{
    width: 60px;
    position: absolute;
    top: 4%;
    left: 5%;
}
.banner-text{
    text-align: center;
    color: #fff;
    padding-top: 180px;

}
.banner-text h1{
    font-size: 130px;

}
.banner-text p{
    font-size: 20px;
    font-style: italic;
}
.banner-btn{
    margin: 70px auto 0;

}
.banner-btn a{
    width: 150px;
    text-decoration: none;
    display: inline-block;
    margin: 0 10px;
    padding: 12px 0;
    color: #fff;
    border :.5px solid #fff;
    position: relative;
    z-index: 1;
    transition: color 0.5s;
}
.banner-btn a span{
    width:0;
    height:100%;
    position:absolute;
    top:0;
    left:0;
    background: #fff;
    z-index: -1;
    transition: 0.5s;

}
.banner-btn a:hover span{
    width:100%;

}
.banner-btn a:hover{
    color: black;

}
#sideNav{
    width: 250px;
    height: 100vh;
    position:fixed ;
    right: -250px;
    top: 0;
    background: #06c8b5;
    z-index: 2;
    transition: 0.5s;


}
nav ul li{
    list-style-type: none;
    margin: 50px 20px;

}
nav ul li a{
    text-decoration: none;
    color: #fff;
}
#menubtn{
    width: 50px;
    height: 50px;
    background: #009688;
    text-align: center;
    position: fixed;
    right: 30px;
    top: 20px;
    border-radius: 3;
    z-index: 3;
    cursor: pointer;
}
#menubtn img{
    width: 20px;
    margin-top: 15px;

}
@media screen and (max-width:770px)
{
    .banner-text h1{
        font-size: 44px;
    }
    .banner-btn a{
        display:block;
        margin: 20 auto;
    }
}
 

#feature{
    width:100%;
    padding: 70px 0;
}
.title-text{
    text-align: center;
    padding-bottom: 70px;
}
.title-text p{
    margin: auto;
    font-size: 20px;
    color: #009688;
    font-weight: bold;
    position: relative;
    z-index: 1;
    display: inline-block;
}
.title-text  p::after{
    content: '';
    width: 50px;
    height: 35px;
    background: linear-gradient(#019587,#fff);
    position: absolute;
    top: -20px;
    left: 0;
    z-index: -1;
    transform: rotate(10deg);
    border-top-left-radius: 35px;
    border-bottom-left-radius: 35px;


}
.title-text h1{
    font-size: 50px;
}
.feature-box{
    width: 80%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    text-align: center;
}
.features{
    flex-basis: 50%;
}
.features-img{
    flex-basis: 50%;
    margin: auto;

}
.features-img img{
width: 70%;
border-radius: 10px;

}
.features h1{
    text-align: left;
    margin-bottom: 10px;
    font-weight: 100;
    color: #009688;
}
.features-desc{
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
 .features-icon .fa{
    width: 50px;
    height: 50px;
    font-size: 30px;
    line-height:50px ;
    border-radius: 8px;

    color: #009688;
    border: 1px solid;

} 
.features-text p{
    padding:0 20px;
    text-align: initial;

}
@media screen and (max-width:770px) {
    .title-text h1{
        font-size: 30px;
    text-align: left;

    }
    .features{
        flex-basis:100% ;

    }
    .features-img{
        flex-basis: 100%;

    }
    .features-img img{
        flex-basis: 100%;
    }
}

#service
{

width: 100%;
padding: 70px 0;
background-color: #efefef;
}
.service-box{
 width: 80%;
 display: flex;
 flex-wrap: wrap;
 justify-content: space-around;
 margin: auto;   
}
.single-time-servivce{
    flex-basis: 48%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 20px;
    color: white;
    position: relative;
}

.single-time-servivce img{
    width: 100%;
    border-radius: 10px;
}
.overlay{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    border-radius: 7px;
    cursor: pointer;
    background: linear-gradient(rgba(0,0,0.5),#009688);
    opacity: 0;
    transition: 1s;
}
.single-time-servivce:hover .overlay{
opacity:1 ;
}
.service-desc{
    width: 80%;
    position:absolute;
    bottom: 0%;
    left: 50%;
    opacity: 0;
    transition: 1s;
    transform: translateX(-50%);

}
hr{
    background: #fff;
    height: 2px;
    border: 0;
    margin: 15px auto;
    width: 60%;
}
.service-desc p{
 font-size: 14px;   
}
.single-time-servivce:hover .service-desc{
 bottom: 40%;
opacity: 1;
}
@media  screen and (max-width:770px) {
    .single-time-servivce{
        flex-basis: 100%;
        margin-bottom: 30px;

    }
    .service-desc p{
        font-size: 12px;
    }
    hr{
        margin: 5px auto;
    }
    .single-time-servivce:hover .service-desc{
        bottom: 25% !important;
        
       }
}
#testimonial{
 width: 100%;
 padding:70px 0;

}
.testimonial-row{
    width:80%;
    margin: auto;
    display: flex;
    justify-content:space-between ;
    align-items: flex-start;
    flex-wrap: wrap;
}
.testmonial-col{
    flex-basis: 28%;
    padding: 10px;
    margin-bottom: 30px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 3px #00968814;
    cursor: pointer;
}

.testmonial-col p{
    font-size: 14px;

}
.user{
    display: flex;
    align-items: center;
    margin: 20px 0;
}
.user img{
    width: 40%;
    margin-right: 20px;
    border-radius:3px;



}
#ses
{
    color: green;
}
        </style>
    <!-- <link rel="stylesheet" href="l.css"> -->


<meta name="viewport" content="width=device-width,initial-scale=1">
    </head>

    <body>
        <section id="banner">
            <img src="lo.png" alt="loading" class="logo">
            <div class="banner-text">
            <?php
        echo "<h2 align='center' id='ses'>Welcome ".$_SESSION['usnm']."</h2>";
        ?>
                <h1>TRANSPORT SERVICES</h1>
                <p>reach  home safe with lifes</p>
                <div class="banner-btn">
                    <a href="#"><span></span>locate</a>
                    <a href="#"><span></span>track</a>
                </div>
            </div>
        </section>
        <div id="sideNav">
            <nav>
                <ul>
                    <li>
                        <a href="#">PROFILE</a> </li>
                        
                     <li>   <a href="complain.php" target="_self">COMPLAINT BOX</a></li>
                        
                        <li>   <a href="#">SERVICES</a></li>
                        
                            <li>  <a href="#">CONTACT US</a></li>
                        
                                <li>  <a href="bp.php">APPLY</a></li>
                                    <li>  <a href="#"> about us</a></li>
                                    <li>  <a href="logout.php"> Log-Out</a></li>
                        </ul>
            </nav>
        </div>
        <div id="menubtn">
            <img src="menu.png" alt="loading" id="menu">

        </div>
        <section id="feature">
            <div class="title-text">
                <p>Complaint box</p>
                <h1>WHY CHOOSE US </h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>EXPERIENCIED DRIVERS</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-shield"></i> 
                        </div>
                        <div class="features-text">
                            <p>The college is situated at a distance of 8 Kms from the ECIL X Roads
                               
                 </p>
                        </div>
                    </div>
                    <h1>SAFE JOURNEY</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                             <i class="fa fa-bus"></i> 
                        </div>
                        <div class="features-text">
                           <pre> <p>The college is situated at a distance of 8 Kms from the ECIL X Roads,
                          </p></pre>
                        </div>
                    </div>
                    <h1>AFFORDABLE COST</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                             <i class="fa fa-inr"></i>
                        </div>
                        <div class="features-text">
                           <pre> <p>The college is situated at a distance of 8 Kms from the ECIL X Roads,
                 </p></pre>
                        </div>
                    </div>
                </div>
                <div class="features-img">
                    <img src="bus.jpg" alt="">
                </div>
            </div>
        </section>
        <!-- service -->
        <section id="service">
            <div class="title-text">
                <p>SERVICES</p>
                <h1>WHY  PROVIDE BETTER</h1>

            </div>
<div class="service-box">
    <div class="single-time-servivce">
        <img src="bus2.jpg" alt="">
        <div class="overlay"></div>
        <div class="service-desc">
            <h3>
                operations
            </h3>
            <hr>
            <p> this nothing but doing time pass with Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias enim error autem? </p>
        </div>
        
    </div>
        <div class="single-time-servivce">
            <img src="bus2.jpg" alt="">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>
                    operations
                </h3>
                <hr>
                <p> this nothing but doing time pass with Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias enim error autem? </p>
            </div>
        </div>
            <div class="single-time-servivce">
                <img src="bus2.jpg" alt=""> 
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>
                        operations
                    </h3>
                    <hr>
                    <p> this nothing but doing time pass with Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias enim error autem? </p>
                </div>
    </div>

                <div class="single-time-servivce">

                    <img src="bus2.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>
                            operations
                        </h3>
                        <hr>
                        <p> this nothing but doing time pass with Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias enim error autem? </p>
                    </div>
</div>
</div>
        </section>
</section>
<!-- testimonial -->
<section id="testimonial">
    <div class="title-text">
        <p>TESTING</p>
        <h1>WHAT STUDENT SAYS</h1>
        

    </div>
    <div class="testimonial-row">
        <div class="testmonial-col">
            <div class="user">
                <img src="img1.jpg" alt="">
                <div class="user-info">
                    <h4>virat</h4>
                    <small>@virat</small>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate debitis libero aliquam nulla ducimus autem adipisci maxime nostrum, perferendis commodi nobis saepe facere mollitia eum repellendus consectetur enim consequuntur eveniet. Sapiente, aperiam. Beatae ratione optio quae incidunt repellendus, numquam, distinctio harum, dolorem est voluptas atque!</p>
        </div>
        <div class="testmonial-col">   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate debitis libero aliquam nulla ducimus autem adipisci maxime nostrum, perferendis commodi nobis saepe facere mollitia eum repellendus consectetur enim consequuntur eveniet. Sapiente, aperiam. Beatae ratione optio quae incidunt repellendus, numquam, distinctio harum, dolorem est voluptas atque!</p></div>
        <div class="testmonial-col">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate debitis libero aliquam nulla ducimus autem adipisci maxime nostrum, perferendis commodi nobis saepe facere mollitia eum repellendus consectetur enim consequuntur eveniet. Sapiente, aperiam. Beatae ratione optio quae incidunt repellendus, numquam, distinctio harum, dolorem est voluptas atque!</p>
        </div>
    </div>
</section>
<section id="testimonial">
    <div class="title-text">
        <p>TESTING</p>
        <h1>WHAT STUDENT SAYS</h1>
        

    </div>
    <div class="testimonial-row">
        <div class="testmonial-col">
           .
        </div>
    </div>
</section>


    </body>
    <script>
        var menubtn=document.getElementById("menubtn");
        var sideNav=document.getElementById("sideNav");
        var menu=document.getElementById("menu");
        
        menubtn.onclick= function(){
            if(sideNav.style.right  == "-250px")
            {
                sideNav.style.right = "0px";
                menu.src="close.png";
            }
            else{
                sideNav.style.right = "-250px";
                menu.src="menu.png";
            }
        }
    </script>
</html>