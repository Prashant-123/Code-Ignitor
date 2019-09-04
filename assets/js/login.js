$('#signup').click(function () {
	location.href = "signup"
});

$("#loginForm").validate({
	rules: {
		email: "required",
		password: "required"
	},

	submitHandler: function (form) {
		$.ajax({
			type: "POST",
			url: "login/authenticate",
			data: jQuery.param({
				email: $('#email-input').val(),
				password: $('#pass-input').val(),
			}),
			success: function (res) {
				const response = JSON.parse(res);
				if (response.success) {
					location.href = response.url
				} else {
					alert(response.message);
				}
			}
		});
		return false; // required to block normal submit since you used ajax
	}
});
