

<?php $sql="select * from best_seller  inner Join add_user on best_seller.user_id = add_user.user_id order by total desc";
$res=mysql_query($sql);
?>        
<ul style="margin-top:10px;">
  <?php while($arr=mysql_fetch_array($res)) { ?>
         
          <li><a href="best_seller_action.php?id=<?php echo $arr['user_id'] ?>"><?php echo $arr['user_name'] ?></a></li>
          
          
		  
		  
		  <?php } ?>
          
          </ul>
