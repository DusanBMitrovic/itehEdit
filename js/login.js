$('#loginBtn').click(function(e) {
    var username = $('#txt_uname')
        .val()
        .trim();
    var password = $('#txt_pwd')
        .val()
        .trim();

    e.preventDefault();
    if (username != '' && password != '') {
        $.ajax({
            url: './php/checkUser.php',
            type: 'post',
            data: { username: username, password: password },
            success: function(response) {
                console.log(response);
                
                var jsonData = JSON.parse(response);
                
                // let's redirect
                if (jsonData.success == '1') {
                    $('#message').html('Uspesno Logovanje ');
                    setTimeout(() => {
                        window.location.replace("./reservations.php");
                    }, 1500)
                } else {
                    $('#message').html('Neuspesno Logovanje ');
                }
            }
        });
    }
});