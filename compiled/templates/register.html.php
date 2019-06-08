<?php
echo '<form class="form cf" style="width:60%; min-width:600px;" name="frmregister" id="frmregister" action="'.$this->_tpl_vars['form_action'].'?do=submit" method="post">
    <fieldset>
		<legend>新用户注册</legend>
		<div class="frow head tc">已有账号？ 请点击 <a class="hot" href="'.$this->_tpl_vars['jieqi_url'].'/login.php">登录</a></div>

        <div class="frow">
            <label class="col3 flabel"><span class="hot">*</span>用户名：</label>
            <div class="col9 last">
			<input type="text" class="text" name="username" id="username" size="25" maxlength="30" style="width:160px" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=u&username=\'+this.value, {outid:\'usermsg\', tipid:\'usermsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="usermsg"></span>
			</div>
        </div>

		<div class="frow">
            <label class="col3 flabel"><span class="hot">*</span>密码：</label>
            <div class="col9 last">
			<input type="password" class="text" name="password" id="password" size="25" style="width:160px" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=p&password=\'+this.value, {outid:\'passmsg\', tipid:\'passmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="passmsg"></span>
			</div>
        </div>

		<div class="frow">
            <label class="col3 flabel"><span class="hot">*</span>确认密码：</label>
            <div class="col9 last">
			<input type="password" class="text" name="repassword" id="repassword" size="25" style="width:160px" value=""  onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=r&password=\'+password.value+\'&repassword=\'+this.value, {outid:\'repassmsg\', tipid:\'repassmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="repassmsg"></span>
			</div>
        </div>

		<div class="frow">
            <label class="col3 flabel"><span class="hot">*</span>Email：</label>
            <div class="col9 last">
			<input type="text" class="text" name="email" id="email" size="25" maxlength="60" style="width:160px" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=m&email=\'+this.value, {outid:\'mailmsg\', tipid:\'mailmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="mailmsg"></span>
			</div>
        </div>

		';
if($this->_tpl_vars['show_emailrand'] == 1){
echo '
		<div class="frow">
			<label class="col3 flabel">Email验证码：</label>
			<div class="col9 last">
				<input type="text" class="text" style="width:6em;" name="emailrand" id="emailrand"><input type="button" name="btnemailrand" id="btnemailrand" class="button" style="cursor:pointer;" value=" 发送验证码 " onclick="if(typeof sendemailrand != \'function\') loadJs(\''.$this->_tpl_vars['jieqi_url'].'/scripts/register.js\', function(){sendemailrand(this);}); else sendemailrand(this);" /><span class="hot">发送后请检查您的Email获取验证码</span>
			</div>
		</div>
		';
}
echo '

		<div class="frow">
            <label class="col3 flabel">性别：</label>
			<div class="col9 last">
            <label class="radio"><input type="radio" name="sex" value="1" />男</label>
			<label class="radio"><input type="radio" name="sex" value="2" />女</label>
			<label class="radio"><input type="radio" name="sex" value="0" checked="checked" />保密</label>
			</div>
        </div>

		<div class="frow">
            <label class="col3 flabel">QQ：</label>
			<div class="col9 last">
			<input type="text" class="text" name="qq" id="qq" size="25" maxlength="15" style="width:160px" value="" />
			</div>
        </div>
		';
if($this->_tpl_vars['show_checkcode'] == 1){
echo '
		<div class="frow">
            <label class="col3 flabel">图片验证码：</label>
			<div class="col9 last">
				<input type="text" class="text" style="width:6em;" name="checkcode" id="checkcode" onfocus="if(this.form.imgccode.style.display == \'none\'){this.form.imgccode.src = \''.$this->_tpl_vars['jieqi_url'].'/checkcode.php?rand='.$this->_tpl_vars['jieqi_time'].'\';this.form.imgccode.style.display = \'\';}" title="点击显示验证码"><img name="imgccode" src="" style="cursor:pointer;vertical-align:middle;margin-left:3px;display:none;" onclick="this.src=\''.$this->_tpl_vars['jieqi_url'].'/checkcode.php?rand=\'+Math.random();" title="点击刷新验证码">
			</div>
        </div>
		';
}
echo '
        <div class="frow">
            <label class="col3 flabel">&nbsp;</label>
			<div class="col9 last" style="position:relative;">
            <!-- <button type="submit" class="button" name="submit">注 册</button> -->
            <button type="button" name="Submit" class="button" style="cursor:pointer;" onclick=" Ajax.Update(\'frmregister\',{outid:\'returnmsg\', timeout:4000});">注 册</button>
			<input type="hidden" name="act" value="newuser" />
			'.$this->_tpl_vars['jieqi_token_input'].'
			<div class="fss hot textbox" style="width:160px;position:absolute;right:0;bottom:0;display:none;" id="returnmsg"></div>
			</div>
        </div>
    </fieldset>
</form>';
?>