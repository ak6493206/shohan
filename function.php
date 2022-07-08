<?php
function checkuser()
{
  if(!isset($_SESSION['a']))
  {
    header("location:index.php");
  }
}
?>