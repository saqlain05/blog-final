<?php
require('top.inc.php');
$title='';
$blogtext='';
$image='';
$blogername='';
$blogtext2='';
$blogtext3='';


$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from blog where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$title=$row['title'];
		$blogtext=$row['blogtext'];
		$blogername=$row['blogername'];
		$blogtext2=$row['blogtext2'];
		$blogtext3=$row['blogtext3'];
		
	}else{
		header('location:productTest.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$title=get_safe_value($con,$_POST['title']);
	$blogtext=get_safe_value($con,$_POST['blogtext']);
	$blogername=get_safe_value($con,$_POST['blogername']);
	$blogtext2=get_safe_value($con,$_POST['blogtext2']);
	$blogtext3=get_safe_value($con,$_POST['blogtext3']);
	
	
	$res=mysqli_query($con,"select * from blog where title='$title'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Blog already exist";
			}
		}else{
			$msg="Blog already exist";
		}
	}
	
	if(isset($_GET['id']) && $_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
				$update_sql="update blog set title='$title',blogtext='$blogtext',blogername='$blogername',
				image='$image',blogtext2='$blogtext2',blogtext3='$blogtext3' where id='$id'";
			}else{
				$update_sql="update blog set title='$title',blogtext='$blogtext',blogername='$blogername',blogtext2='$blogtext2',blogtext3='$blogtext3' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
			mysqli_query($con,"insert into blog(title,blogtext,blogername,image,blogtext2,blogtext3,status) values
			('$title','$blogtext','$blogername','$image','$blogtext2','$blogtext3',1)");
		}
		header('location:productTest.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Bloger</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data" id="get-data-form">
							<div class="card-body card-block">
							   
								<div class="form-group">
									<label for="categories" class=" form-control-label">Blog Title</label>
									<input type="text" name="title" placeholder="Enter Blog title" class="form-control" required value="<?php echo $title?>">
								</div>


								<div class="form-group">
									<label for="categories" class=" form-control-label">Author Name</label>
									<input type="text" name="blogername" placeholder="Enter Author Name" class="form-control" required value="<?php echo $blogername?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>

								<!-- <div class="form-group">
									<label for="categories" class=" form-control-label">Blog Text</label>
									<textarea name="blogtext" placeholder="Enter Blog Text" class="form-control" required><?php echo $blogtext?></textarea>
								</div> -->

								<!-- <div class="form-group">
									<label for="categories" class=" form-control-label">Blog Text</label>
									<textarea name="blogtext" class="tinymce" id="texteditor" required><?php echo $blogtext?></textarea>
								</div> -->
								

								<!-- <div class="form-group">
									<label for="categories" class=" form-control-label">Best Seller</label>
									<select class="form-control" name="best_seller" required>
										<option value=''>Select</option>
										<?php
										if($best_seller==1){
											echo '<option value="1" selected>Yes</option>
												<option value="0">No</option>';
										}elseif($best_seller==0){
											echo '<option value="1">Yes</option>
												<option value="0" selected>No</option>';
										}else{
											echo '<option value="1">Yes</option>
												<option value="0">No</option>';
										}
										?>
									</select>
								</div> -->

								
								
								
								<label for="categories" class=" form-control-label">Blogger Font Page Paragraph</label>
								<textarea class="tinymce" name="blogtext"><?php echo $blogtext?></textarea> <br>
								
								<label for="categories" class=" form-control-label">Blogger ReadMore Page 1st Paragraph</label>
								<textarea class="tinymce" name="blogtext2"><?php echo $blogtext?></textarea><br>
								<label for="categories" class=" form-control-label">Blogger ReadMore Page 2nd Paragraph</label>
								<textarea class="tinymce" name="blogtext3"><?php echo $blogtext?></textarea><br>
								
								
								<!-- <div class="form-group">
									<label for="categories" class=" form-control-label">Blog Text2</label>
									<textarea name="blogtext2" placeholder="Enter Blog Text" class="form-control" required><?php echo $blogtext2?></textarea>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Blog Text3</label>
									<textarea name="blogtext3" placeholder="Enter Blog Text" class="form-control" required><?php echo $blogtext3?></textarea>
								</div> -->
								

								
								<!-- <textarea class="ckeditor"></textarea> -->
								
								
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 <!-- <script>
			function get_sub_cat(sub_cat_id){
				var categories_id=jQuery('#categories_id').val();
				jQuery.ajax({
					url:'get_sub_cat.php',
					type:'post',
					data:'categories_id='+categories_id+'&sub_cat_id='+sub_cat_id,
					success:function(result){
						jQuery('#sub_categories_id').html(result);
					}
				});
			}
		 </script> -->
         
		 <script type="text/javascript" src="tinymce/js/jquery.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/init-tinymce.js"></script>
		<script type="text/javascript" src="tinymce/js/getdata.js"></script>

		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
		
		

<?php
require('footer.inc.php');
?>
