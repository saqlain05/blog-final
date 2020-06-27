<?php require('top.php');
if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'',$product_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>

<style>
    #image{
        width:300px;
        height:200px;
    }
    @media (max-width:768px){
    #image{
    width: 500px;
  height: 250px;
  } 
}
</style>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="readmore.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <div class="wrapper">
<div class="container">
	<div class="row">
	        
            
        </div>  
   
                            
                            
     <div class="col-md-10 blogShort">
                     <h1><?php echo $get_product['0']['title']?></h1>
                     <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10" id='image'>
                     <em>Author Name <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank"><?php echo $get_product['0']['blogername']?></a></em>
                     <!-- <img src="http://joern-duwe.de/aquaristik/images/skalare00.jpg" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10"> -->
                     <article>
                         <!-- <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p> -->
                         <br>
                         <p>
                         <?php echo $get_product['0']['blogtext']?>
                         </p>
                     <!-- <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p> -->
                         <p>
                         <?php echo $get_product['0']['blogtext2']?>
                         </p>
                           <!-- <h2>It is so easy</h2>
                       <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p>
                         <h3>How to lose 20 pounds in 1 week!</h3>
                          <br>
                         <iframe width="100%" height="480" src="//www.youtube.com/embed/Bn_d-ghQ5HA" frameborder="0" allowfullscreen></iframe>
                         
                         <p> -->
                        
                         <?php echo $get_product['0']['blogtext3']?>
                         </p>
                        <!-- <h4>It is so easy</h4> -->
                      
                         
                     
                     
                     </article>
                
                 </div>
                
	</div>
</div>
</div>
</body>
</html>
<?php require('footer.php')?>

