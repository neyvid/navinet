$(function () {
    $('#example1').DataTable({
        "language": {
            "lengthMenu": "نمایش _MENU_ مورد در هر صفحه ",
            "zeroRecords": "متاسفانه موردی یافت نشد!",
            "info": "نمایش صفحه _PAGE_ از _PAGES_",
            "infoEmpty": "موردی در دسترس نیست",
            "infoFiltered": "(فیلترشده از جمع _MAX_ رکورد)",
            'search': 'جستجو  : ',
            "oPaginate": {
                "sFirst": "اولین",
                "sPrevious": "قبلی",
                "sNext": "بعدی",
                "sLast": "آخرین"
            }
        },
        'paging': true,
        'lengthChange': false,
        'searching': true,
        'ordering': true,
        'info': false,
        'autoWidth': false,
    })
});