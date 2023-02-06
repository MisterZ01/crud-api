    <script src="fichiers/dt/datatables.french.js"></script>
    <script src="fichiers/dt/datatables.min.js"></script>
    <script src="fichiers/dt/moment.min.js"></script>
<script>
var minDate, maxDate;


// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date(data[3]);

        if (
            (min === null && max === null) ||
            (min === null && date <= max) ||
            (min <= date && max === null) ||
            (min <= date && date <= max)
        ) {
            return true;
        }
        return false;
    }
);

// Create date inputs
minDate = new DateTime($('#min'), {
    format: 'D/M/YYYY'
});
maxDate = new DateTime($('#max'), {
    format: 'D/M/YYYY'
});

// DataTables initialisation

// Refilter the table
$('#min, #max').on('change', function() {
    $('#to-copy').DataTable().draw();
});

$('#matable').DataTable({
    dom: 'Bfrtip',
    select: true,
    buttons: [
        'print', 'copyHtml5', 'pdfHtml5'
    ],
    language: {
        url: "/fichierslocal/datatables.french.js",
        buttons: {
            copyTitle: 'Ajouté au presse-papiers',
            copyKeys: 'Appuyez sur <i>ctrl</i> ou <i>\u2318</i> + <i>C</i> pour copier les données du tableau à votre presse-papiers. <br><br>Pour annuler, cliquez sur ce message ou appuyez sur Echap.',
            copySuccess: {
                _: '%d lignes copiées',
                1: '1 ligne copiée'
            },
            "pdf": "PDF",
            "print": "Imprimer",
            "copy": "Copier",

        },

    }
});

</script>