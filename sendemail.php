<style>
    .mailbutton{
        background: #c43b68 none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-family: Poppins;
    font-size: 15px;
    height: 50px;
    line-height: 50px;
	padding: 0 36px;
	/* padding-left:500px; */
	transition: 0.3s;
	/* display:flex; */
	/* item-align:center; */
    }

    .mailbutton:hover{
        background: black ;
    color: #c43b68;
	}
	
	/* h1{
		text-align:center;
	} */
</style>


<?php
	require('connection.inc.php');
    require('functions.inc.php');
    
    $email=$_POST['email'];
    // $pdfname=$_POST['pdfname'];
	
	$sql = "insert into mail (email) value ('$email')";
		if(!mysqli_query($con,$sql))
		{
			echo 'not inserted';
		}
		else{
			echo '<h1 id="h1">List Send Succesfully</h1>';
		}
	
		// header('location:index.php');
		// die();
	
?>
<br>
<a href="index.php" class="mailbutton">INDEX</a>
