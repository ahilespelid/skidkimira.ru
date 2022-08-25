var TableManaged = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }

            // begin first table
            $('.datatable').dataTable({
                "autoWidth": false,
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ записей",
                    "sSearch": "Поиск: ",
                    "sInfo": "Показано с _START_ по _END_ записей из _TOTAL_",
                    "sInfoFiltered": "(отфильтровано из _MAX_ всех записей)",
                    "sInfoEmpty": "записи не найдены",
                    "oPaginate": {
                        "sPrevious": "Пред.",
                        "sNext": "След."
                    }
                },
                "aoColumnDefs": [
                    { "sWidth": "5%", "aTargets": [ 0 ] },
                    { "sWidth": "15%", "aTargets": [ -1 ] }
                ]
            });

            $('.datatablescroll').dataTable({
                "scrollY":        200,
                "deferRender":    true,
                "scroller":       true,
                "autoWidth": false,
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ записей",
                    "sSearch": "Поиск: ",
                    "sInfo": "Показано с _START_ по _END_ записей из _TOTAL_",
                    "sInfoFiltered": "(отфильтровано из _MAX_ всех записей)",
                    "sInfoEmpty": "записи не найдены",
                    "oPaginate": {
                        "sPrevious": "Пред.",
                        "sNext": "След."
                    }
                },
                "aoColumnDefs": [
                    { "sWidth": "5%", "aTargets": [ 0 ] },
                    { "sWidth": "15%", "aTargets": [ -1 ] }
                ]
            });

            //Company Table Server-side proccessing
            $('.companyTable').dataTable({
                "bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "/application/models/admin/companyTable.php",
                "scrollY":        200,
                "deferRender":    true,
                "scroller":       true,
                "autoWidth": false,
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ записей",
                    "sSearch": "Поиск: ",
                    "sInfo": "Показано с _START_ по _END_ записей из _TOTAL_",
                    "sInfoFiltered": "(отфильтровано из _MAX_ всех записей)",
                    "sInfoEmpty": "записи не найдены",
                    "oPaginate": {
                        "sPrevious": "Пред.",
                        "sNext": "След."
                    }
                },
                "aoColumns": [
                    null,
                    null,
                    {
                        "mData": "4"
                    },
                    {   
                        "mData": "3"
                    },
                    {
                        "mData": "symbols"
                    },
                    {
                        "mData": "symbolsHTML"
                    },
                    {
                        "mData": function(source){
                            var res = '';
                            if(source[5] == 0){
                                res = 'Не отмодерирована';
                            } else if (source[5] == 1 && source[6] == 0){
                                res = 'Отмодерирована';
                            } else if (source[5] == 1 && source[6] == 1){
                                res = 'Опубликована';
                            }
                            return res;
                        }
                        
                    },
                    null
                ],
                "aoColumnDefs": [
                    { "bSearchable": false, "aTargets": [ 3,4 ]},
                    { "sWidth": "5%", "aTargets": [ 0 ] },
                    { "sWidth": "15%", "aTargets": [ -1 ] }
                ]
            });

            jQuery('#table_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
            jQuery('#table_wrapper .dataTables_length select').addClass("form-control input-xsmall"); // modify table per page dropdown
            //jQuery('#table_wrapper .dataTables_length select').select2(); // initialize select2 dropdown
        }
    };
}();