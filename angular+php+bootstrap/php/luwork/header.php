<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>美食听说</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
      <style>
    	  .nav a{color:#fff!important;}
        .nav a:hover{background: darkgoldenrod!important;}
        .footer{background: #eee;
        width:100%;
        border:1px solid #ddd;
        line-height: 36px;
		height:36px;
        text-align:center;
             }
	 .thumbnail img{width:250px;height:200px!important;}
    </style>
  </head>
  <body >
 	 	<nav class="navbar navbar-default navbar-fixed-top" style="background: green;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav" >
          <li ><a href="index.php" >首页 </a></li>
	        <li><a href="pane.php">美食资讯</a></li>
	     	  <li><a href="information.php">地方特色</a></li>
	      	<li><a href="vote.php">投票</a></li>
	      	<li><a href="search.php">搜索</a></li>
	          <?php
			$c_user = "";
			if(isset($_COOKIE["c_user"])){
				$c_user = $_COOKIE["c_user"];
				echo "<li><a href='####'>$c_user</a></li>";
				echo "<li><a href='php/outlogin.php'>注销</a></li>";
			}else{
				if(isset($_SESSION["user"])){
					$userS = $_SESSION["user"];
					echo "<li><a href='####'>$userS</a></li>";
					echo "<li><a href='php/outlogin.php'>注销</a></li>";
				}else{
					echo "<li><a href='register.php'>注册</a></li>";
					echo "<li><a href='enter.php'>登录</a></li>";	
				}
			}
		?>    
      </ul>
          <ul class="nav navbar-nav navbar-right">
           <li><a href="#">关于我们</a></li>
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <div class="container" style="margin-top:50px;">
<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators" style="bottom: 45px;">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner " role="listbox">
        <div class="item active">
          <img src="img/ff5.jpg" alt="..." class="img-responsive" style="height:300px;width: 100%;">
        </div>
        <div class="item">
          <img src="img/ff4.jpg" alt="..." class="img-responsive" style="height:300px;width: 100%;">
      </div>
 			<div class="item ">
          <img src="img/ff3.jpg" alt="..." class="img-responsive" style="height:300px;width: 100%;">
      </div>
      <!-- Controls -->
      <a class="left carousel-control"  href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" style="margin-top:-50px;"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right " style="margin-top:-50px;"></span>
      </a>
    </div>