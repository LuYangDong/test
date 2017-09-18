<?php
  include "header.php";
?>
    <ol class="breadcrumb">
			<li><a href="index.html">首页</a></li>
			<li class="active">搜索</li>
		</ol>
</div>
</div>
<div class="container">
<form class="form-inline  " style="text-align: center;margin:200px 0;" method="post" action="searchlist.php">
    <div class="form-group clearfix">
    <input type="text" class="form-control" placeholder="请输入要搜索的内容" name="search">
    <button type="submit" class="btn btn-default">搜索</button>
   </div>
</form>
</div>
<?php
 include "footer.php";

?>