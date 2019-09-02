$('#signup').click(function() {
    location.href = "signup"
});

// $('#loginForm').validate();

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

$('#submit').click( function(e) {

    e.preventDefault();

    $.post('login/authenticate', {
        email : $('#email-input').val(),
        password : $('#pass-input').val()
    }, response => {

		if(response.success) {
            alert('Success');
            location.href = response.url
        } else {
            alert(response.message);

        }
    })
});
