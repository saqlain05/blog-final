<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        color:transparent;
    
    
    
}
.wrapper1{
  display: flex;
  width: 100%;
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev{
    display:block;
    
}
.dots{
    background-color: transparent;
    padding-top:50px;
 
}
.para-more1{
    font:bold;
    text-align: center;
    font-size: 35px;
    /* background-color: rgb(233, 158, 170,0.6); */
    color: black;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  
}
.lernmore1{
    cursor:pointer;
    background-color:brown;
    color:white;
    padding:10px;
    
}

@media (max-width:768px){
    .para-more1{
    font:bold;
    text-align: center;
    font-size: 20px;
    /* background-color: rgb(233, 158, 170,0.6); */
    color: black;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  
}
}
</style>
<body>

<div class="container">
    <div id="carouselContent" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
                <div class="dots">
            <h2 class="para-more1">Love Your Skin No Matter What <span id="dotsss">...</span><span id="moreee" class="para-more1">
         m dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. 
        Donec vitae dui eget tellus gravida venenatis. Intege </span> </h2><br>
        <button class="lernmore1" style="" onclick="myFunction1()" id="myBtn">Leran More</button>
            </div>
            
            </div>
        </div>

        
        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</body>
</html>
<script>
function myFunction1() {
  var dots = document.getElementById("dotsss");
  var moreText = document.getElementById("moreee");
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