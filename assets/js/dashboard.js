$.get('http://192.168.31.169/CI/dashboard/get_data', response => {
	if (response == null) {
		alert('Invalid Credentials, Login Again...');

	} else {

		alert("OK");

		$('.email').text(response.email)
		$('.pass').text(response.password)
		$('#name').text(response.name)
	}
})
