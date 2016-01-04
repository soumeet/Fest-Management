var RE_USERNAME = /^\w{4,5}$/;
var RE_PASSWORD = /^\w{4}$/;
function validation(form){
	var USERNAME = form.tb_username.value;
	var PASSWORD = form.tb_password.value;
	//var error = [];
	if (!RE_USERNAME.test(USERNAME)) {
		alert("Invalid Username");
		return false;
	}
	if (!RE_PASSWORD.test(PASSWORD)) {
		alert("Invalid Password");
		return false;
	}
}