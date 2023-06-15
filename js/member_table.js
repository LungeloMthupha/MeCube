//Table configuration
$(document).ready(function () {
    $('#member').DataTable({
        order: [[3, 'desc']],
        info: false,
        deferRender: true,
            responsive: true,
            autoFill: true,
            deferRender: true,
            responsive: true,
            autoFill: true,
            paging: true,
            ordering: true,
            info: true,
            dom: "Bfrtip",
            buttons: ["copy", "excel", "csv", "pdf", "print"],
            select: true,
        
    });
    
});