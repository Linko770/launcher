$(function(){
	$("#new_pw").blur(function(){
		test1('new_pw');
	}).keyup(function(){
		test1('new_pw');
	}).focus(function(){
		test1('new_pw');
	});
function test1(type){
	var new_pw= $("#new_pw").val();
	if(new_pw.length==0){
		$(".msg").text("密码至少为6位");
	}else{
		$(".msg").text("");
	}
	}		
}

function checksubmit(){
	var msg = $(".msg").text();
	var new_pw = $("#new_pw").val();
	if(new_pw.length==0){
		$(".msg").text("密保答案不能为空");
		return false;
	}
	if(msg=="" && new_pw.length>=1){
		return true;
	}
}
