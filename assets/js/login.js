$("#loginForm").validate();

$("#loginForm").validate({
	submitHandler: function (form) {
		$.ajax({
			type: "POST",
			url: "login/authenticate",
			data: jQuery.param({
				email: $('#email-input').val(),
				password: $('#pass-input').val(),
			}),
			success: function (res) {
				if (res.success) {
					location.href = 'dashboard'
				} else {
					alert("Authentication Failed");
				}
			}
		});
		return false; // required to block normal submit since you used ajax
	}
});
