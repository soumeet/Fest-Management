var RE_UID = /^\d{4,5}$/;
var RE_PASSWORD = /^\w{8}$/;
function validation(form){
	var UID = form.uid.value;
	var PASSWORD = form.pswd.value;
	var error = [];
	if (!RE_UID.test(UID)) {
		alert("invalid user id");
		return false;
	}
	if (!RE_PASSWORD.test(PASSWORD)) {
		alert("invalid password");
		return false;
	}
}