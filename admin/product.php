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
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Blogs </h4>
				   <h4 class="box-link"><a href="manage_product.php">Write Your Blogs</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th width="2%">ID</th>
							   <th width="10%">Title</th>
							   <th width="70%">Blog Text</th>
							   <th width="10%">Image</th>
							   <th width="100%">Bloger Name</th>
							   <th width="70%">text2</th>
							   <th width="70%">text3</th>
							   <th width="26%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['title']?></td>
							   <td><?php echo $row['blogtext']?></td>
							   <td><img style="height:80px; width:100px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"/></td>
							   <td><?php echo $row['blogername']?></td>
							   <td><?php echo $row['blogtext2']?></td>
							   <td><?php echo $row['blogtext3']?></td>
							   <td>
							   <div style="width:170px;">
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
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>
