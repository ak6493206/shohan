<?php include "config.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Book Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="images/36.jpg" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
<div id="container">
	<?php include "head.php"; ?>  
  <!-- end of header -->
  <div id="content">
    <?php include "left.php"; ?>
    <div id="content_right">
      <div class="product_box" style="height:auto; width:648px;">
      <?php
	$id=$_REQUEST['id'];
	$sql="select * from best_seller  inner Join add_user on best_seller.user_id = add_user.user_id where add_user.user_id='$id'";
	$res=mysql_query($sql);
	while($arr=mysql_fetch_array($res))
	{
?>
        <h1><center><?php echo $arr['user_name']; ?></center></h1>
        
        <table width="265" align="center" style="color:#969547; font-size:12px;">
    	<tr>
        	<td width="171" height="54">Mobile No.</td>
            <td width="82"><?php echo $arr['mobile']; ?></td>
        </tr>
        <tr>
        	<td height="54">Mail Id</td>
            <td><?php echo $arr['mail_id']; ?></td>
        </tr>
        <tr>
        	<td height="54">Purchase Products</td>
            <td><?php echo $arr['p_count']; ?></td>
        </tr>
        <tr>
        	<td height="54">Purchase Amount</td>
            <td><?php echo $arr['total']; ?></td>
        </tr>
        </table>
     <?php } ?>
	</div>
    <a href="http://www.free-css.com/"><img src="images/ads.jpg" alt="ads" /></a> </div>
  </div>
  <!-- end of content -->
  <?php include "footer.php"; ?>
  <!-- end of footer -->
</div>
<!-- end of container -->
</body>
</html>
 