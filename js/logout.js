
logout = () => {
    $.ajax({
        url: './php/logout.php',
        type: 'post',
        success: function() {
            console.log('User nije vise ulogovan');
            location.reload();
        }
    });
}