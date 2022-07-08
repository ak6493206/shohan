<?php
session_start();
include "../library/database.php";
include "function.php";
checkuser();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->
<?php include "leftbar.php"; ?>
<?php include "header-1.php"; ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <!--/.col-->

                  <div class="col-lg-12">
				  <form method="post" action="code.php?dvs=menu">
                    <div class="card">
                      <div class="card-header"><strong>Company</strong><small> Form</small></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">Menu Name</label><input type="text" name="t1"   class="form-control"></div>
                        <div class="form-group"><label for="vat" class=" form-control-label">Menu Title</label><input type="text" name="t2" class="form-control"></div>
                        <div class="form-group"><label for="street" class=" form-control-label">Menu Cetegory</label>
						
						<select name="s1" class="form-control">
						<option value="" selected="selected">--Select Menu--</option>
						<option value="0">Parent</option>
						<?php
						$sql="select * from menu";
						$rs=mysqli_query($con,$sql);
						while($arr=mysqli_fetch_array($rs))
						{
						?>
						<option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
						<?php } ?>
						</select>
						
						
						
						
						</div>
                        <div class="row form-group">
                          <div class="col-12">
                            <div class="form-group"><label for="city" class=" form-control-label">Menu Descripation</label>
							<textarea name="txt" class="form-control"></textarea>
							
							
							</div>
                          </div>
                          
                        </div>
						
						
						
						<div class="row form-group">
                          <div class="col-12">
                            <div class="form-group">
							<input type="submit" name="sub" value="Add Menu" class="btn btn-success btn-flat m-b-30 m-t-30">
							
							
							</div>
                          </div>
                          
                        </div>
                        
                      </div>
                    </div>
					 </form>
                  </div>
                      
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
