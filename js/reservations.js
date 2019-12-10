var editor; // use a global for the submit and return data rendering in the examples
 
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "https://localhost/iteh2/php/reservationTable.php",
        table: "#example",
        fields: [ {
                label: "ID:",
                name: "id"
            }, {
                label: "Ime:",
                name: "ime"
            }, {
                label: "Broj Ljudi:",
                name: "broj_ljudi"
            }, {
                label: "Datum:",
                name: "datum"
            }, {
                label: "Napomena:",
                name: "napomena"
            }
        ]
    } );
 
    $('#example').DataTable( {
        dom: "Bfrtip",
        ajax: ('https://localhost/iteh2/php/reservationTable.php'),
        columns: [
            { data: "id" },
            { data: "ime" },
            { data: "datum" },
            { data: "broj_ljudi" },
            { data: "napomena" }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );


} );