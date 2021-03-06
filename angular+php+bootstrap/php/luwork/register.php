<?php
  include "header.php";
?>
				<ol class="breadcrumb">
					<li>
						<a href="index.php">首页</a>
					</li>
					<li class="active">注册</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="page-header">
				<h3>用户注册</h3>
			</div>
	<form class="form-horizontal" role="form" onSubmit="return preg_match()" method="post" action="php/doregister.php">
				<div class="form-group">
					<label for="inputUser" class="col-sm-2 control-label">用户名</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputUser" placeholder="用户名" name="user">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="col-sm-2 control-label">输入密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword" placeholder="输入密码" name="password">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword1" class="col-sm-2 control-label">确认密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword1" placeholder="确认密码" name="passdb">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPhone" class="col-sm-2 control-label">手机号</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPhone" placeholder="手机号" name="phone">
					</div>
				</div>
                 <div class="form-group">
                    <label for="area" class="col-sm-2 control-label">地区</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="area" name="area">
                        <option>请选择省份</option>
                        <option>河北</option>
                        <option>山东</option>
                        <option>河南</option>
                        <option>福建</option>
                      </select>
                    </div>
                  </div>

				<div class="form-group">
					<label class="col-sm-2 control-label">性别</label>
					<div class=" col-sm-10">
						<label class="radio-inline">
		  <input type="radio" name="sex" id="inlineRadio1" value="men"> 男
		</label>
						<label class="radio-inline">
		  <input type="radio" name="sex" id="inlineRadio2" value="women"> 女
		</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">爱好</label>
					<div class=" col-sm-10">
						<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" value="option1" name="hobby[]"> 音乐
		</label>
						<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox2" value="option2" name="hobby[]">旅游
		</label>
						<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox3" value="option3" name="hobby[]">登山
		</label>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10 checkbox">
						<label><input type="checkbox" value="">
					    阅读并接收 </label>
					    <a data-toggle="modal" data-target=".bs-example-modal-lg">《用户协议》</a>
					    
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="padding: 10px;">
		     <h3> 用户协议</h3>
		<p>特别提示</p>
		
		<p>北京陌陌科技有限公司（以下简称“陌陌科技”）在此特别提醒您（用户）在注册成为用户之前，请认真阅读本《用户协议》（以下简称“协议”），确保您充分理解本协议中各条款。请您审慎阅读并选择接受或不接受本协议。除非您接受本协议所有条款，否则您无权注册、登录或使用本协议所涉服务。您的注册、登录、使用等行为将视为对本协议的接受，并同意接受本协议各项条款的约束。
		
		本协议约定陌陌科技与用户之间关于“陌陌”软件服务（以下简称“服务”）的权利义务。“用户”是指注册、登录、使用本服务的个人。本协议可由陌陌科技随时更新，更新后的协议条款一旦公布即代替原来的协议条款，恕不再另行通知，用户可在本网站查阅最新版协议条款。在陌陌科技修改协议条款后，如果用户不接受修改后的条款，请立即停止使用陌陌科技提供的服务，用户继续使用陌陌科技提供的服务将被视为接受修改后的协议。
		一、帐号注册
		
		1、用户在使用本服务前需要注册一个“陌陌”帐号。“陌陌”帐号应当使用手机号码绑定注册，请用户使用尚未与“陌陌”帐号绑定的手机号码，以及未被陌陌科技根据本协议封禁的手机号码注册“陌陌”帐号。陌陌科技可以根据用户需求或产品需要对帐号注册和绑定的方式进行变更，而无须事先通知用户。
		
		2、“陌陌”系基于地理位置的移动社交产品，用户注册时应当授权陌陌科技公开及使用其地理位置信息方可成功注册“陌陌”帐号。故用户完成注册即表明用户同意陌陌科技提取、公开及使用用户的地理位置信息。如用户需要终止向其他用户公开其地理位置信息，可自行设置为隐身状态。
		
		3、鉴于“陌陌”帐号的绑定注册方式，您同意陌陌科技在注册时将使用您提供的手机号码及/或自动提取您的手机号码及自动提取您的手机设备识别码等信息用于注册。
		
		4、在用户注册及使用本服务时，陌陌科技需要搜集能识别用户身份的个人信息以便陌陌科技可以在必要时联系用户，或为用户提供更好的使用体验。陌陌科技搜集的信息包括但不限于用户的姓名、性别、年龄、出生日期、身份证号、地址、学校情况、公司情况、所属行业、兴趣爱好、常出没的地方、个人说明；陌陌科技同意对这些信息的使用将受限于第三条用户个人隐私信息保护的约束。
			   </p>
			    </div>
			  </div>
			</div>
					</div>
				</div>

					<div class="form-group" style="margin-top:50px;">
						<div class="col-sm-offset-2 col-sm-10">
							  <input type="submit" class="btn btn-success" value="注册"> <input type="reset" class="btn btn-default" value="重置" /> <a href="enter.php" class="btn btn-danger">已有账号，去登录</a>
						</div>
					</div>
			</form>
			</div>

<?php
 include "footer.php";

?>