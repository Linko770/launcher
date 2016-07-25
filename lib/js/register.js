$(function(){
	$("#username").blur(function(){
		test1('username');
	}).keyup(function(){
		test1('username');
	}).focus(function(){
		test1('username');
	});

	$("#new_pw").blur(function(){
		test1('new_pw');
	}).keyup(function(){
		test1('new_pw');
	}).focus(function(){
		test1('new_pw');
	});

	$("#new_pw2").blur(function(){
		test1('new_pw2');
	}).keyup(function(){
		test1('new_pw2');
	}).focus(function(){
		test1('new_pw2');
	});

	$("#code").blur(function(){
		test1('code');
	}).keyup(function(){
		test1('code');
	}).focus(function(){
		test1('code');
	});

	$(".type").click(function(){
		var id = $(this).attr("id");
		id = id.substr(id.length-1,1);
		var pre_id = $("#ac_type").attr("value");
		if(pre_id != id){
			$("#ac_type").attr("value",id);
			changetext(id);
		}
	});
})
function changetext(type){
	if(type==0){
		$("#username_label").text("用户名");
		$("#username").attr("placeholder","请输入用户名");
	}else{
		$("#username_label").text("邮箱");
		$("#username").attr("placeholder","请输入邮箱");
	}
	checksubmit();
}

function test1(type){
	var username= $("#username").val();
	var new_pw= $("#new_pw").val();
	var new_pw2= $("#new_pw2").val();
	var code= $("#code").val();
	switch(type){
		case 'username':
			if(username.length==0){
				$(".msg").text("请输入用户名");
			}else if(username.length>0 && username.length<6){
				$(".msg").text("请输入至少为6位的用户名");
			}else if(new_pw.length>0 && new_pw.length<6){
				$(".msg").text("密码至少为6位");
			}else if(new_pw.length>=6 && new_pw2.length<6){
				$(".msg").text("请重复输入一次密码");
			}else{
				$(".msg").text("");
			}
		break;
		case 'new_pw':
			if(new_pw.length==0){
				$(".msg").text("请输入密码");
			}else if(username.length==0){
				$(".msg").text("请输入用户名");
			}else if(new_pw.length>0 && new_pw.length<6){
				$(".msg").text("密码至少为6位");
			}else if(username.length>0 && username.length<6){
				$(".msg").text("请输入至少为6位的用户名");
			}else if(username.length>=6 && new_pw2.length<6){
				$(".msg").text("请重复输入一次密码");
			}else{
				$(".msg").text("");
			}
		break;
		case 'new_pw2':
			if(new_pw2.length==0){
				$(".msg").text("请重复输入一次密码");
			}else if(username.length>0 && username.length<6){
				$(".msg").text("请输入至少为6位的用户名");
			}else if(new_pw.length>0 && new_pw.length<6){
				$(".msg").text("密码至少为6位");
			}else if(new_pw2.length>0 && new_pw2.length<6){
				$(".msg").text("重复密码至少为6位");
			}else{
				$(".msg").text("");
			}
		break;
		case 'code':
			if(code.length==0){
				$(".msg").text("请输入验证码");
			}else if(username.length>0 && username.length<6){
				$(".msg").text("请输入至少为6位的用户名");
			}else if(new_pw.length>0 && new_pw.length<6){
				$(".msg").text("密码至少为6位");
			}else if(new_pw2.length>0 && new_pw2.length<6){
				$(".msg").text("重复密码至少为6位");
			}else{
				$(".msg").text("");
			}
		break;
	}
}

function checksubmit(){
	var type=$("#ac_type").attr("value");
	var msg = $(".msg").text();
	var username = $("#username").val();
	var new_pw = $("#new_pw").val();
	var new_pw2 = $("#new_pw2").val();
	var xuke = $("#xuke").is(":checked");
	$test =/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
	if(xuke==false){
		$(".msg").text("请同意许可协议");
		return false;
	}
	if(type==1){
		if(!username.match($test)){
			$(".msg").text("邮箱规则不匹配");
			return false;
		}
	}else{
		if(username.match($test)){
			$(".msg").text("系统检测到邮箱类型的用户名，请在邮箱项中注册");
			return false;
		}
	}
	if(msg=="" && username.length>=6 && new_pw.length>=6 && new_pw2.length>=6 && new_pw==new_pw2){
		return true;
	}else if(msg=="" && username.length>=6 && new_pw.length>=6 && new_pw2.length>=6 && new_pw!=new_pw2){
		$(".msg").text("两次密码不匹配，请检查后输入");
		return false;
	}else if(username==""){
		$(".msg").text("用户名错误，请检查后输入");
		return false;
	}else if(new_pw==""){
		$(".msg").text("密码错误，请检查后输入");
		return false;
	}else if(new_pw2==""){
		$(".msg").text("重复输入密码错误，请检查后提交");
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