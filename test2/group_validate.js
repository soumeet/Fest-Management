var RE_NAME = /^(\w)+$/;
function group_validation(form){
	var GROUPNAME = form.tb_grp_name.value;
	var MEM1 = form.tb_mem1.value;
	var MEM2 = form.tb_mem2.value;
	var MEM3 = form.tb_mem3.value;
	var MEM4 = form.tb_mem4.value;
	if (GROUPNAME=="") {
		alert("Group Name cannot be empty");
		return false;
	}
	if (!RE_NAME.test(MEM1)) {
		alert("Invalid Member Name");
		return false;
	}
	if (!RE_NAME.test(MEM2)) {
		alert("Invalid Member Name");
		return false;
	}
	if (!RE_NAME.test(MEM3)) {
		alert("Invalid Member Name");
		return false;
	}
	if (!RE_NAME.test(MEM4)) {
		alert("Invalid Member Name");
		return false;
	}
}
