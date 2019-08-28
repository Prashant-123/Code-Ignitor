$('#signup').click(function() {
    location.href = "signup"
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
