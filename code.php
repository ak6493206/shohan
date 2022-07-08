<?php
session_start();
include "../library/database.php";
if(isset($_REQUEST['dvs']))
{

     if($_REQUEST['dvs']=="product")
     {
	       $nm=$_REQUEST['t1'];
		   $im=$_FILES['t2']['name'];
		    $ds=$_REQUEST['t3'];
		   move_uploaded_file($_FILES['t2']['tmp_name'],"product/".$im);
		    $sql="INSERT INTO product SET name='".$nm."',image='".$im."',des='".$ds."'";
	       mysqli_query($con,$sql);
	      header("location:view_pro.php");
	 }
  if($_REQUEST['dvs']=="slider")
     {
	       $nm=$_REQUEST['t1'];
		   $im=$_FILES['t2']['name'];
		   move_uploaded_file($_FILES['t2']['tmp_name'],"slider/".$im);
		    $sql="INSERT INTO slider SET name='".$nm."',image='".$im."'";
	       mysqli_query($con,$sql);
	      header("location:view_slider.php");
	 }
	 
	 if($_REQUEST['dvs']=="mslider")
     {
	       $nm=$_REQUEST['t1'];
		   $im=$_FILES['t2']['name'];
		   move_uploaded_file($_FILES['t2']['tmp_name'],"mslider/".$im);
		    $sql="INSERT INTO mslider SET name='".$nm."',image='".$im."'";
	       mysqli_query($con,$sql);
	      header("location:view_mslider.php");
	 }
         if($_REQUEST['dvs']=="header")
         {
           $id=$_REQUEST['uid'];
		   $st=$_REQUEST['str'];
		   $sql="UPDATE menu SET publish='$st' where id='$id'";
		    mysqli_query($con,$sql);
	         header("location:view_menu.php");
         }
		 if($_REQUEST['dvs']=="footer")
         {
           $id=$_REQUEST['uid'];
		   $st=$_REQUEST['str'];
		   $sql="UPDATE menu SET publish='$st' where id='$id'";
		    mysqli_query($con,$sql);
	         header("location:view_menu.php");
         }
		 
		 
		 if($_REQUEST['dvs']=="pubslider")
         {
           $id=$_REQUEST['uid'];
		   $st=$_REQUEST['str'];
		   $sql="UPDATE slider SET publish='$st' where id='$id'";
		    mysqli_query($con,$sql);
	         header("location:view_slider.php");
         }
		 if($_REQUEST['dvs']=="unpubslider")
         {
           $id=$_REQUEST['uid'];
		   $st=$_REQUEST['str'];
		   $sql="UPDATE slider SET publish='$st' where id='$id'";
		    mysqli_query($con,$sql);
	         header("location:view_slider.php");
         }


    if($_REQUEST['dvs']=="pubmslider")
         {
           $id=$_REQUEST['uid'];
		   $st=$_REQUEST['str'];
		   $sql="UPDATE mslider SET publish='$st' where id='$id'";
		    mysqli_query($con,$sql);
	         header("location:view_mslider.php");
         }
		 if($_REQUEST['dvs']=="unpubmslider")
         {
           $id=$_REQUEST['uid'];
		   $st=$_REQUEST['str'];
		   $sql="UPDATE mslider SET publish='$st' where id='$id'";
		    mysqli_query($con,$sql);
	         header("location:view_mslider.php");
         }		 
		 
		 if($_REQUEST['dvs']=="pubpro")
         {
           $id=$_REQUEST['uid'];
		   $st=$_REQUEST['str'];
		   $sql="UPDATE product SET publish='$st' where id='$id'";
		    mysqli_query($con,$sql);
	         header("location:view_pro.php");
         }
		 if($_REQUEST['dvs']=="unpubpro")
         {
           $id=$_REQUEST['uid'];
		   $st=$_REQUEST['str'];
		   $sql="UPDATE product SET publish='$st' where id='$id'";
		    mysqli_query($con,$sql);
	         header("location:view_pro.php");
         }
		 
		 
		 
  if($_REQUEST['dvs']=="menu")
     {
     $nm=$_REQUEST['t1'];
	 $tit=$_REQUEST['t2'];
	 $cetegory=$_REQUEST['s1'];
	 $des=$_REQUEST['txt'];
	 $sql="INSERT INTO menu SET name='".$nm."',title='".$tit."',cet='".$cetegory."',des='".$des."'";
	 mysqli_query($con,$sql);
	 header("location:view_menu.php");
  }
  
  if($_REQUEST['dvs']=="contact")
     {
     $nm=$_REQUEST['t1'];
	 $em=$_REQUEST['t2'];
	 $mb=$_REQUEST['t3'];
	 $fed=$_REQUEST['t4'];
	 $sql="INSERT INTO contact SET name='".$nm."',email='".$em."',mob='".$mb."',feed='".$fed."'";
	 mysqli_query($con,$sql);
	 header("location:../contact.php");
  }
  if($_REQUEST['dvs']=="info")
     {
     $em=$_REQUEST['t1'];
	 $mb=$_REQUEST['t2'];
	 $fb=$_REQUEST['t3'];
	 $lk=$_REQUEST['t4'];
	 $tw=$_REQUEST['t5'];
	 $tube=$_REQUEST['t6'];
	 $adr=$_REQUEST['t7'];
	  $im=$_FILES['f1']['name'];
		   
   move_uploaded_file($_FILES['f1']['tmp_name'],"logo/".$im);
	  $sql="INSERT INTO  information SET em='".$em."',mb='".$mb."',fb='".$fb."',lk='".$lk."',tw='".$tw."',tube='".$tube."',logo='".$im."',addr='".$adr."'";
	 mysqli_query($con,$sql);
	 header("location:view_info.php");
  }
  if($_REQUEST['dvs']=="out")
  {
    session_destroy();
	 header("location:index.php");
  }
  if($_REQUEST['dvs']=="login")
  {
     $nm=$_REQUEST['t1'];
	 $ps=$_REQUEST['t2'];
	 $sql="select * from login where name='$nm' and pass='$ps'";
	 $res=mysqli_query($con,$sql);
	 $arr=mysqli_fetch_array($res);
	 $nums=mysqli_num_rows($res);
	 if($nums>0)
	 {
	   $_SESSION['a']=$arr['name'];
	   header("location:home.php");
	 }
	 else
	 {
	 header("location:index.php");
	 }
  }
}
?>
