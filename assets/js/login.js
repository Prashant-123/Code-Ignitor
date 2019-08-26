$('.submit').click( function(e) {

    e.preventDefault();

    $.post('login/authenticate', {
        email : $('.email').val(),
        password : $('.pass').val()
    }, response => {
        if(response.success) {
            alert('Success');
            location.href = response.url;
        } else {
            alert(response.message);
        }
    })
})


