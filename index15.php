<?php require('top.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    

  <style>
  /* Make the image fully responsive */
  
  .carousel-inner img {
    width: 100%;
    height: 100%; 
  }
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

  @media (max-width:768px){
    #slider-h1{
    color:Black;
    font-size: 50px;
    width:100%;
  } 
  /* #video-photo{
    width: 500px;
    height: 500px;
  } */
  
}
 
  </style>
    <title>Document</title>
</head>
<body>
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
      <img src="images/skintone.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <!-- <h3>Los Angeles</h3> -->
        <h2 class="para-more">Love Your Skin No Matter What <span id="dots">...</span><span id="more">
        m dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. 
        Donec vitae dui eget tellus gravida venenatis. Intege </span> </h2><br>
        <a class="lernmore" style="cursor:pointer;" onclick="myFunction()" id="myBtn">Lern More</a>
      </div>   
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
<video width="400" controls id="video-photo">
  <source src="video/videoBeauty.mp4" type="video/mp4">
  <source src="video/videoBeauty.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<div class="wrapper1">
<?php require('slider.php')?>

</div>
<br>



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
</script>
<!-- <br> -->
<?php require('footer.php')?>