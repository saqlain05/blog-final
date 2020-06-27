<?php 
require('top.php');
$str=mysqli_real_escape_string($con,$_GET['str']);
if($str!=''){
	$get_product=get_product($con,'','',$str);
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}										
?>
<br>
<link rel="stylesheet" href="blog.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
  #image{
    width: 300px;
  height: 180px;
  
  }
body{
  background-color:white;
}

  @media (max-width:768px){
    #image{
    width: 500px;
  height: 250px;
  } 
}

</style>        
      
        <!-- Start Product Grid -->
        <!-- <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
					<h1>Work Under Process</h1>
				</div>
            </div>
        </section> -->
        <div class="container">
	 <div id="blog" class="row">
     <?php if(count($get_product)>0){?>
        <?php
			foreach($get_product as $list){
		?>
        <div class="col-md-10 blogShort">
                                        
                     <h1><?php echo $list['title']?></h1>
                     <img id="image" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" >
                     
                         <em>This snippet use <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank"><?php echo $list['blogername']?></a></em>
                     <article><p>
                     <?php echo $list['blogtext']?>
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="readmore.php?id=<?php echo $list['id']?>">READ MORE</a>
                                        
                 </div>
                 <?php } ?> 
                 
                 <?php } else { 
                        echo "Data not found";
                        
                        
					} ?>
     </div>
     </div>


        <!-- End Product Grid -->
        <!-- End Banner Area -->
<?php require('footer.php')?>        