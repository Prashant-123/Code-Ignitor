$.get('http://localhost/CI/dashboard/get_data', response => {
    if(response == null) {
        alert('Invalid Credentials, Login Again...');

    } else {
        $('.email').text(response.email)
        $('.pass').text(response.password)
        $('#name').text(response.name)
    }
})