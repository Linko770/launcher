function del(num){
	$("#act_type").attr("value","delete");
	$("#act_num").attr("value",num)
}

function levelup(num){
	$("#act_type").attr("value","levelup");
	$("#act_num").attr("value",num)
}

function leveldown(num){
	$("#act_type").attr("value","leveldown");
	$("#act_num").attr("value",num)
}