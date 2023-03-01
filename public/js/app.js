/*=============================================
METODOS DEL OBJETO INICIO
=============================================*/
let home = {

	login: function() {
		let username = $('#username').val();
		let password = $('#password').val();

		if (username == "") {
			notify("El campo usuario se encuntra vacio..", "wg")
			return;
		}else if (!expx.exec(username)) {
			notify("Por favor ingre solo letras y números en le camo (Usuario)..", "wg")
			return;
		}

		if (password == "") {
			notify("El campo contraseña se encuntra vacio..", "wg")
			return;
		}else if (!expxP.exec(password)) {
			notify("Por favor ingre solo letras y números en le camo (Contraseña)..", "wg")
			return;
		}

		let userData = new FormData();
		userData.append('username', username);
		userData.append('password', password);
		userData.append('loginForm', "ok");
		$.ajax({
			url: 'ajax/UserAjax.php',
			type: 'POST',
			data: userData,
			contentType: false,
			processData: false,
			cache: false,
			success: function (response) {
				
				if (response == "ok") {

					window.location = "home";
					
				} else {
					notify(response, "wg")
				}
			}
		});
		

	}
}