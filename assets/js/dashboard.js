$.get('/CI/dashboard/get_data', response => {
	if (response == null) {
		alert('Invalid Credentials, Login Again...');
		location.href = 'login'
	} else {

		$('#email-input').val(response.email)
		$('#pass-input').val(response.password)
		$('#name-input').val(response.name)
	}
});
