<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update blog set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from blog where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

// $sql="select product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id desc";
$sql="select * from blog order by blog.id desc";
$res=mysqli_query($con,$sql);
?>
<link rel="stylesheet" href="blog.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			
 <style>
  #img{
    width: 300px;
  height: 180px;
  
  }
body{
  background-color:white;
}


  @media (max-width:768px){
    #img{
    width: 500px;
  height: 250px;
  } 
}

</style>

<div class="container">
	 <div id="blog" class="row">
    
                             <?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
                            <div class="col-md-10 blogShort">
                                        
                     <h1><?php echo $row['title']?></h1>
                     <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" id="img">
                     
                         <em>This snippet use <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank"><?php echo $row['blogername']?></a></em>
                     <article><p>
                     <?php echo $row['blogtext']?>
                         </p></article>
                     <!-- <a class="btn btn-blog pull-right marginBottom10" href="readmore.php">READ MORE</a> -->
                     <?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_product.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
								
                                        
                 </div>
                 <?php } ?>
				 
     </div>
     </div>


<?php
require('footer.inc.php');
?>