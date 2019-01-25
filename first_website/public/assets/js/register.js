$('#registerbtn').on('click', function () {

    if ($('#userName').val() == '' || $('#psw').val() == '' || $('#terms').prop('checked') == false) {
        alert('Please fill all fields marked with "*" ');
    }
    else if ($('#psw').val().length < 6) {
        alert('Password too short');
    } else if ($('#psw-repeat').val() !== $('#psw').val()) {
        alert('Repeated password must match password');
    } else {
        alert('Success!');
    }
});