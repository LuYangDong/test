<?php
  include "header.php";
?>
    <ol class="breadcrumb">
			<li><a href="index.php">首页</a></li>
			<li class="active">登录</li>
		</ol>
</div>
</div>
<div class="container" style="margin-bottom: 50px;">
<div class="page-header">
	   <h3>用户登录</h3> 
	</div>
<form class="form-horizontal" role="form" method="post" action="php/dologin.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" value="<?php echo $c_user; ?>" name="user">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="输入密码 " name="pass">
    </div>
  </div>
   <div class="form-group">
        <label for="inputPassword4" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <input type="checkbox"  id="inputPassword4" name="iscookie"> 保存十天免登录状态
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" class="btn btn-success" value="登录"> <input type="reset" class="btn btn-default" value="重置" /> <a href="register.php" class="btn btn-danger">还没有账号，去注册</a>
        </div>
      </div>
</form>
</div>
<?php
 include "footer.php";

?>