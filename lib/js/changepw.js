$(function(){
	$("#pre_pw").blur(function(){
		test1('pre_pw');
	}).keyup(function(){
		test1('pre_pw');
	}).focus(function(){
		test1('pre_pw');
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
})
function test1(type){
	var pre_pw= $("#pre_pw").val();
	var new_pw= $("#new_pw").val();
	var new_pw2= $("#new_pw2").val();
	switch(type){
		case 'pre_pw':
			if(pre_pw.length==0){
				$(".msg").text("请输入原密码");
			}else if(pre_pw.length>0 && pre_pw.length<6){
				$(".msg").text("请输入至少为6位的原密码");
			}else if(new_pw.length>0 && new_pw.length<6){
				$(".msg").text("新密码至少为6位");
			}else if(new_pw.length>=6 && new_pw2.length<6){
				$(".msg").text("请重复输入一次新密码");
			}else{
				$(".msg").text("");
			}
		break;
		case 'new_pw':
			if(new_pw.length==0){
				$(".msg").text("请输入密码");
			}else if(pre_pw.length==0){
				$(".msg").text("请输入原密码");
			}else if(new_pw.length>0 && new_pw.length<6){
				$(".msg").text("新密码至少为6位");
			}else if(pre_pw.length>0 && pre_pw.length<6){
				$(".msg").text("请输入至少为6位的原密码");
			}else if(pre_pw.length>=6 && new_pw2.length<6){
				$(".msg").text("请重复输入一次新密码");
			}else{
				$(".msg").text("");
			}
		break;
		case 'new_pw2':
			if(new_pw2.length==0){
				$(".msg").text("请重复输入一次新密码");
			}else if(pre_pw.length>0 && pre_pw.length<6){
				$(".msg").text("请输入至少为6位的原密码");
			}else if(new_pw.length>0 && new_pw.length<6){
				$(".msg").text("新密码至少为6位");
			}else if(new_pw2.length>0 && new_pw2.length<6){
				$(".msg").text("重复密码至少为6位");
			}else{
				$(".msg").text("");
			}
		break;
	}
}

function checksubmit(){
	var msg = $(".msg").text();
	var pre_pw = $("#pre_pw").val();
	var new_pw = $("#new_pw").val();
	var new_pw2 = $("#new_pw2").val();
	if(msg=="" && pre_pw.length>=6 && new_pw.length>=6 && new_pw2.length>=6 && new_pw==new_pw2){
		return true;
	}else if(msg=="" && pre_pw.length>=6 && new_pw.length>=6 && new_pw2.length>=6 && new_pw!=new_pw2){
		$(".msg").text("两次新密码不匹配，请检查后输入");
		return false;
	}else if(pre_pw==""){
		$(".msg").text("原密码，请检查后输入");
		return false;
	}else if(new_pw==""){
		$(".msg").text("新密码，请检查后输入");
		return false;
	}else if(new_pw2==""){
		$(".msg").text("重复输入密码，请检查后提交");
		return false;
	}else{
		test1('pre_pw');
		return false;
	}
}