$(function(){

	$("#bg").attr("src","./lib/img/bg.jpg");
	//tab几个选项卡的切换
	var $div_li = $("div.tab_menu ul li");
	$div_li.click(function(){
		$(this).addClass("selected")
				.siblings().removeClass("selected");
		var index = $div_li.index(this);
		$("div.tab_box > div")
			.eq(index).show()
			.siblings().hide();
	});

	$("#username1").blur(function(){
		test1('username');
	}).keyup(function(){
		test1('username');
	}).focus(function(){
		test1('username');
	});

	$("#password1").blur(function(){
		test1('password');
	}).keyup(function(){
		test1('password');
	}).focus(function(){
		test1('password');
	});

	$("#code").blur(function(){
		test1('code');
	}).keyup(function(){
		test1('code');
	}).focus(function(){
		test1('code');
	});
})

function test1(type){
	var username= $("#username1").val();
	var password= $("#password1").val();
	var code= $("#code").val();
	switch(type){
		case 'username':
			if(username.length==0){
				$(".msg").text("请输入用户名");
			}else if(username.length>0 && username.length<6){
				$(".msg").text("请输入至少为6位的文件名");
			}else if(password.length>0 && password.length<6){
				$(".msg").text("请输入至少为6位的密码");
			}else if(password.length>=6 && code.length==0){
				$(".msg").text("请输入验证码");
			}else{
				$(".msg").text("");
			}
		break;
		case 'password':
			if(password.length==0){
				$(".msg").text("请输入密码");
			}else if(username.length==0){
				$(".msg").text("请输入用户名");
			}else if(password.length>0 && password.length<6){
				$(".msg").text("请输入至少为6位的密码");
			}else if(username.length>0 && username.length<6){
				$(".msg").text("请输入至少为6位的用户名");
			}else if(username.length>=6 && code.length==0){
				$(".msg").text("请输入验证码");
			}else{
				$(".msg").text("");
			}
		break;
		case 'code':
			if(code.length==0){
				$(".msg").text("请输入验证码");
			}else if(username.length>0 && username.length<6){
				$(".msg").text("请输入至少为6位的用户名");
			}else if(password.length>0 && password.length<6){
				$(".msg").text("请输入至少为6位的密码");
			}else{
				$(".msg").text("");
			}
		break;
	}
}

function checksubmit(){
	var msg = $(".msg").text();
	var username = $("#username1").val();
	var password = $("#password1").val();
	var code = $("#code").val();
	if(msg=="" && username.length>=6 && password.length>=6 && code.length>=1){
		return true;
	}else if(username==""){
		$(".msg").text("用户名为空，请检查后输入");
		return false;
	}else if(password==""){
		$(".msg").text("密码为空，请检查后输入");
		return false;
	}else if(code==""){
		$(".msg").text("验证码为空，请检查后提交");
		return false;
	}else{
		test1('username');
		return false;
	}
}

function code_refresh(){
	var temp_url = './lib/model/captcha.class.php?r='+Math.random();
	$("#codeimg").attr("src",temp_url);
}