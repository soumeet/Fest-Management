function verify(form) {
	var usr=form.tb_username.value;
	var pswd=form.tb_password.value;
	if(usr=="admin" && pswd=="root")
		return "admin.html";
	if(usr=="client" && pswd=="user")
		return "client.html";
}