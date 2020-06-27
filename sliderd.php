<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sliderd.css">
    <link rel="stylesheet" href="swiper.min.css">
    <title>Document</title>
</head>
<style>
.swiper-slide{
    width:400px;
}
/* .swiper-slide:nth-child(1) .sliderText{
    background: #2196f3;
}
.swiper-slide:nth-child(2) .sliderText{
    background: #e91e63;
}
.swiper-slide:nth-child(3) .sliderText{
    background: #c3d41a;
}
.swiper-slide:nth-child(4) .sliderText{
    background: #ff9800;
} */

</style>
<body>
<div class="swiper-container">
    
    <div class="swiper-wrapper">
    <div class="swiper-slide" >
  <div class="card">
  <div class="sliderText">
  <!-- <h3>Slide One</h3> -->
  <img id="image" src="images/skintone.jpg" alt="post img" id="img" class="pull-left img-responsive thumb margin10 img-thumbnail">
  </div>
  <div class="content">
  <h2>title1</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsa amet consequatur fugit, 
  esse, exercitationem soluta</p>
  <a href="#">Read More</a>
  </div>
  </div>
  </div>

  <div class="swiper-slide">
  <div class="card">
  <div class="sliderText">
  <!-- <h3>Slide two</h3> -->
  <img id="image" src="images/skintone.jpg" alt="post img" id="img" class="pull-left img-responsive thumb margin10 img-thumbnail">
  </div>
  <div class="content">
  <h2>title1</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsa amet consequatur fugit, 
  esse, exercitationem soluta</p>
  <a href="#">Read More</a>
  </div>
  </div>
  </div>

  <div class="swiper-slide">
  <div class="card">
  <div class="sliderText">
  <!-- <h3>Slide Three</h3> -->
  <img id="image" src="images/skintone.jpg" alt="post img" id="img" class="pull-left img-responsive thumb margin10 img-thumbnail">
  </div>
  <div class="content">
  <h2>title1</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsa amet consequatur fugit, 
  esse, exercitationem soluta</p>
  <a href="#">Read More</a>
  </div>
  </div>
  </div>


  <div class="swiper-slide" >
  <div class="card">
  <div class="sliderText">
      
  <!-- <h3>Slide Four</h3> -->
  <img id="image" src="images/skintone.jpg" alt="post img" id="img" class="pull-left img-responsive thumb margin10 img-thumbnail">
  </div>
  <div class="content">
  <h2>title1</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsa amet consequatur fugit, 
  esse, exercitationem soluta</p>
  <a href="#">Read More</a>
  </div>
  </div>
  </div>



  </div>
  </div>
  <script src="swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 500,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>
</html>