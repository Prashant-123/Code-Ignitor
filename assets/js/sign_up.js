$("#signUp").validate({
	submitHandler: function (form) {
		$.ajax({
			type: "POST",
			url: "signup/submit",
			data: {
				email: $('#email').val(),
				name: $('#name').val(),
				password: $('#pass').val(),
			},
			success: function (res) {
				console.log(res);
				if (res) {
					alert("SignUp Success")
				} else {
					alert("Error Occurred");
				}
			}
		});
		return false; // required to block normal submit since you used ajax
	}
});
