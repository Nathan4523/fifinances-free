$(document).ready(function () {
    $.extend($.fn.dataTable.defaults, {
        searching: true,
        ordering: false
    });

    $('#table_coast').DataTable({
        responsive: true
    });
});