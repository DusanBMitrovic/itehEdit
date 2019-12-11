

$(function() {
    $('#datepicker').datepicker();
});

$('#newReservationForm').submit(function(e) {
    $('#errorIme').remove();
    $('#errorDatum').remove();
    $('#errorBrojOsoba').remove();
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: './php/insertNewReservation.php',
        data: $(this).serialize(),
        success: function(response) {
            var jsonData = JSON.parse(response);

            // let's redirect
            if (jsonData.success == '1') {
                $('#formBtns').prepend(
                    "<span class='text-success font-weight-bold'> Uspesno ste rezervisali mesto! </span>"
                );
            } else {
                if (jsonData.error == '100') {
                    $('#formBtns').prepend(
                        "<span id='errorIme' class='text-danger font-weight-bold'> Unesite ime! </span>"
                    );
                }
                if (jsonData.error == '200') {
                    $('#formBtns').prepend(
                        "<span id='errorDatum' class='text-danger font-weight-bold'> Unesite datum! </span>"
                    );
                }
                if (jsonData.error == '300') {
                    $('#formBtns').prepend(
                        "<span id='errorBrojOsoba' class='text-danger font-weight-bold'> Izaberite broj osoba! </span>"
                    );
                }
            }
        }
    });
});