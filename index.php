<?php require('top.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    

  <style>
  /* Make the image fully responsive */

  .fp-text {
  width: 100%;
  height: 25%;
  background-color: white;
  display: flex;
  flex-direction:column;
  /* flex-wrap: wrap; */
  /* position: absolute; */
  justify-content: center;
  align-items: center;
  font-family: "Raleway", sans-serif;
}

.fp-text h1 {
  font-size: 22px;
  /* font-family: "Raleway", sans-serif; */
  font-family: "Poppins", sans-serif;
  font-size: 22px;
  text-align: center;
  font-weight: bold;
}

#fp-text{
  font-size: 22px;
  /* font-family: "Raleway", sans-serif; */
  font-family: "Poppins", sans-serif;
  font-size: 22px;
  text-align: center;
  font-weight: bold;
  padding-bottom: 50px;
}
.button {
  
  background-color: #4caf50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  
}

.button5 {
  background-color: black;
  color: white;
  border-radius: 3px;
  /* border: 2px solid #555555; */
}

.button5:hover {
  background-color: gray;
  color: white;
}

  
  .carousel-inner img {
    padding: 0 250px;
    width: 100%;
    height: 100%; 
  }
  /* #image_model{
    padding-left: 300px;
    width:1000px;
    height:500px;
  } */
  #slider-h1{
    color:Black;
    font-size: 75px;
    width:100%;
  }
  #sider-id{
    background-color:white;
  }
  #demo{
    padding-bottom:50px;
  }

  .videobeauty{
  padding: 0px 250px;
}

#image-image{
  width:500px;
  height:300px;
}

  @media (max-width:768px){
    #slider-h1{
    color:Black;
    font-size: 50px;
    width:100%;
  } 
  .carousel-inner img {
    padding: 0 40px;
    width: 100%;
    height: 100%; 
  }
  .videobeauty{
    padding: 0px 40px;
  }
  #image-image{
  /* padding-left:50px; */
  width:400px;
  height:300px;
}
#title-blog{
  padding-left:50px;
}
#t-h1{
  text-align:center; padding-bottom:50px; font-size:30px;
}
  
}

 
  </style>
    <title>Document</title>
</head>
<body>
<div class="containertry">
<div class="wrapper">
<div class="main_container">
    <!-- <div class="content">
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
    </div> -->
    <div id="demo" class="carousel slide" data-ride="carousel">
  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img id="image_model" src="images/Models.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <!-- <h3>Los Angeles</h3> -->
       
      </div>   
    </div>
    <!-- <h2 class="para-more">Love Your Skin No Matter What <span id="dots">...</span><span id="more">
        m dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. 
        Donec vitae dui eget tellus gravida venenatis. Intege </span> </h2><br>
        <a class="lernmore" style="cursor:pointer;" onclick="myFunction()" id="myBtn">Lern More</a> -->
<br>

        <div class="fp-text">
            <h1>
              Love your skin <br />
              no matter <br />
              what!
            </h1>
            <button class="button button5">Learn More</button>
          </div>
          
        
    <!-- <div class="carousel-item">
      <img src="image/2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div> -->
    <!-- <div class="carousel-item">
      <img src="image/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div> -->
  </div>
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
  
</div>
<div class="videobeauty">
<video width="400" controls id="video-photo">
  <source src="video/videoBeauty.mp4" type="video/mp4">
  <source src="video/videoBeauty.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

</div>
<br>
<div class="fp-text">
            <h1>
            Stop: Slow down before buying another product
            </h1>
            <button class="button button5">Learn More</button>
           
          </div>

<br>
<!-- <div class="center">
    <div class="cookie-container">
        <form action="sendmail2.php" method="post">
        <p class="cookie-p">
            
            <span class="spanmail">Send mail:</span> &nbsp; <input type="email" class="inputtext" placeholder="Enter Email" name="email" required> &nbsp;
            <button type="submit" class="cookie-btn">Send Mail</button>
        </p>
        </form>
        <!-- <button class="cookie-btn">ok</button> -->
    </div>
</div> 


            <div class="body__overlay"></div>
        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3" style="background:transparent;">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <?php
                        $get_product = get_product1($con,3);
                        foreach($get_product as $list){
                        ?>
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                    <h1 id="fp-text">Trending blog</h1>
                        <div class="row align-items__center">
                        <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img id="image-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="slider images">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner" id="title-blog">
                                    <h2><?php echo $list['title']?></h2><br>
                                        <!-- <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                          Commodi ipsum eius obcaecati architecto veritatis nemo.</h2>
                                           -->
                                        
                                        <!-- <p><?php echo $list['blogtext']?></p> -->
                                        <div class="cr__btn">
                                            <a href="readmore.php?id=<?php echo $list['id']?>">View Blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <?php } ?>
            </div>


            <div class="fp-text">
          <!-- <h1>Follow us on social media:</h1> -->
          <div class="ft__social__link">
                                      <ul class="social__link">
                                          <li style="background: #00acee;"><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                          <li style="background:radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);"><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                          <li style="background:#3b5998;"><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                          <!-- <li style="background:black;"><a href="#"><i class="icon-social-google icons"></i></a></li> -->

                                          <li style="background:#c4302b;"><a href="#"><i class="icon-social-youtube icons"></i></a></li>
                                      </ul>
                                  </div>
        </div>
        <br>
        </div>
      
</div>



</div>
</body>
</html>









<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");
cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed","true");
});

setTimeout(() => {
    if(!localStorage.getItem("cookieBannerDisplayed")){
    cookieContainer.classList.add("active");
}
}, 2000);

</script>
<?php require('footer.php')?>
<!-- <br><br> -->
<!-- <div class="container"> -->
<!-- <div class="center"> -->
    <div class="cookie-container">
        <!-- <form action="sendmail2.php" method="post">
        <p class="cookie-p">
            
            <span class="spanmail">Send mail:</span> <input type="email" class="inputtext"
             placeholder="Enter Email" name="email" required> &nbsp;
           <br> <button type="submit" class="cookie-btn">Send Mail</button>
        </p>
        </form> -->
        <!-- <button class="cookie-btn">ok</button> -->
    </div>
<!-- </div> -->
<!-- </div> -->

<style>
  .cookie-container{
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: #2f3640;
    color: #f5f6fa;
    padding: 0 32px;
    /* height: 100px; */
    transition: 400ms;
    box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);
}

.cookie-p{
  margin: auto;
  width: 50%;
  border: 3px solid transparent;
  padding: 10px;
}
.cookie-btn{
        background: #e84118;
        border: 0;
        color: #f5f6fa;
        margin-left:250px;
        padding: 11px 48px;
        font-size: 18px;
        margin-bottom: 18px;
        border-radius: 8px;
    cursor: pointer;
    }

    .inputtext{
        padding: 12px 10px;
        border: 2px solid black;
        border-radius: 8px;
        color:white;
    }
    .spanmail{
      font-size:18px;
      color:white;
      padding-left:300px;
    }
    @media (max-width:768px){
        .spanmail{
            margin-left: 150px;
            margin-right: 150px;
            padding-left:0px;

            /* margin-right: 150px; */
        }
        .cookie-p{
              margin: 0;
              width: 100%;
              border: 3px solid transparent;
              padding: 1px;
            }
            .inputtext{
                /* margin-top: 10px; */
                padding: 12px 30px;
                border: 2px solid black;
                border-radius: 8px;
            }
            .cookie-btn{
                background: #e84118;
                border: 0;
                color: #f5f6fa;
                padding:   7px 45px;
                /* margin-left: 120px; */
                font-size: 18px;
                margin-bottom: 18px;
                border-radius: 8px;
        cursor: pointer;
        margin-left:120px;
            }
       
      } 
      @media (max-width:568px){
        .spanmail{
            margin-left: 70px;
            margin-right: 50px;
            padding-left:0px;

            /* margin-right: 150px; */
        }
        .cookie-p{
              margin: 0;
              width: 100%;
              border: 3px solid transparent;
              padding: 1px;
            }
            .inputtext{
                /* margin-top: 10px; */
                padding: 12px 30px;
                border: 2px solid black;
                border-radius: 8px;
            }
            .cookie-btn{
                background: #e84118;
                border: 0;
                color: #f5f6fa;
                padding:   7px 45px;
                /* margin-left: 120px; */
                font-size: 18px;
                margin-bottom: 18px;
                border-radius: 8px;
        cursor: pointer;
        margin-left:35px;
            }
       
      } 
      @media only screen and 
(min-device-width : 360px) and 
(max-device-width : 640px) and 
(-webkit-min-device-pixel-ratio : 3){
  .spanmail{
            margin-left: 90px;
            margin-right: 40px;
            padding-left:0px;

            /* margin-right: 150px; */
        }
        .cookie-p{
              margin: 0;
              width: 100%;
              border: 3px solid transparent;
              padding: 1px;
            }
            .inputtext{
                /* margin-top: 10px; */
                padding: 12px 30px;
                border: 2px solid black;
                border-radius: 8px;
            }
            .cookie-btn{
                background: #e84118;
                border: 0;
                color: #f5f6fa;
                padding:   7px 45px;
                /* margin-left: 120px; */
                font-size: 18px;
                margin-bottom: 18px;
                border-radius: 8px;
        cursor: pointer;
        margin-left:50px;
            }
       
      } 

}
}
</style>








