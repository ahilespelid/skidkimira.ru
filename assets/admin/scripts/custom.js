function saveTable() {
    for(var instanceName in CKEDITOR.instances)
    CKEDITOR.instances[instanceName].updateElement();
        var add = [];
        var remove = [];
        if($('#categorySelector').length > 0){
            $('#discountSubCategory').find('input[type="checkbox"]').each(function () {
                if($(this).is(":checked") && $(this).attr('waschecked') == 1){
                    //do nothing
                } else if($(this).is(":checked") && $(this).attr('waschecked') == 0){
                    add.push($(this).val());
                } else if(!$(this).is(":checked") && $(this).attr('waschecked') == 1){
                    remove.push($(this).val());
                }
                
            });
        };

        if($('#hasWebShop:checked').length){
            $('#hasWebShop').val('1');
        }
        if($('#hasStockCenter:checked').length){
            $('#hasStockCenter').val('1');
        }
        
        $('#saveBtn').html('Сохраняется..');
        $.ajax({
            method: 'POST',
            data: { data: $('#table').serialize(), add: add, remove: remove },
            statusCode: {
                406: function (response) {
                alert('Запись с таким именем уже существует.');
                }
            }
        }).done(function (data) {
            $('#saveBtn').html('<i class="fa fa-check"></i> Сохранено');
            if(typeof data == 'object' && data.url){
                window.location = data.url;
            }
            window.opener.location.reload();
            //window.close();
        }).error(function(data) {
            $('#saveBtn').html('<i class="fa fa-frown-o"></i> Ошибка');
        });
        return false;
};

function saveCompanyDescription() {
     CKEDITOR.instances['cityDescriptionHTML'].updateElement();

        $('#saveCityDescriptionBtn').html('Сохраняется..');
        $.ajax({
            url:    '/admin/companyCityDescription',
            method: 'POST',
            data: { data: $('#companyDescription').serialize() },
            statusCode: {
                406: function (response) {
                alert('Запись с таким именем уже существует.');
                }
            }
        }).done(function (data) {
            $('#saveCityDescriptionBtn').html('<i class="fa fa-check"></i> Сохранено');
            window.opener.location.reload();
        }).error(function(data) {
            $('#saveCityDescriptionBtn').html('<i class="fa fa-frown-o"></i> Ошибка');
        });
        return false;
};

function urlToModal(url) {
    $('#removeBtn').attr('onClick', "$.get('"+url+"').success(function(){window.location.reload();});");
    return false;
};
function deletemodal(type){
    $('#removeBtn').attr('onClick', "deleteDiscounts();");
}

function tableFilter(){
    $('#filterBtn').html('Фильтруется...');
    $.ajax({
        url:'/admin/company',
        method: "GET",
        data: { filter:$('#filter').serialize() }
    }).success(function(data){
        $('#filterBtn').html('<i class="fa fa-check"></i> Отфильтровано');
        //$('#orders_list').html(data);
    });  
    //return false;
};

$('#companyCitySelector').change(function(){
    getCompanyCityDescription();
    getShoppingCenterList();
    getCompanyBranchofficeTable();
    getCompanyDiscountTable();
    
});

$('#categorySelector').change(function(){
    getCategorySubcategory();
});


function getShoppingCenterList(){
    $.get('/admin/shoppingCenter/0/'+$('#companyCitySelector').val(), function(data){
        $('#shoppingCenterSelector').html(data);
        getShoppingCenterBranchofficeTable();
    });
}

function getCompanyCityDescription(){
    $.get('/admin/companyCityDescription/'+$('#companyId').val()+'/'+$('#companyCitySelector').val(), function(data){
        document.querySelector('#plaindesclink').dataset.cityid = $('#companyCitySelector').val();
        result = $.parseJSON(data);
        //$('#cityDescriptionHTML').data("wysihtml5").editor.setValue(result['description']);
        CKEDITOR.instances['cityDescriptionHTML'].setData(result['description']);
        //$('#discriptionId').val(result['id']);
    });
}

function saveCompanyShoppingCenterList(){
    var add = [];    
    var remove = [];
    $('#shoppingCenterBranchofficeTable').find('input[type="checkbox"]').each(function () {
        if($(this).is(":checked") && $(this).attr('waschecked') == 1){
            //do nothing
        } else if($(this).is(":checked") && $(this).attr('waschecked') == 0){
            var array = [];
            array.push($(this).val());
            array.push($('#ShoppingCategoryId'+$(this).val()).val());
            add.push(array);
        } else if(!$(this).is(":checked") && $(this).attr('waschecked') == 1){
            remove.push($(this).val());
        }
        
    });
    $.ajax({
        url: '/admin/companyShoppingCenterBranchoffice/'+$('#companyId').val(),
        method: 'POST',
        data: {add: add, remove: remove}
    }).done(function (data) {
        $('#saveCompanyShoppingCenter').html('<i class="fa fa-check"></i> Сохранено');
    });
}

function saveDiscountSubCategory(){
        for(var instanceName in CKEDITOR.instances)
    CKEDITOR.instances[instanceName].updateElement();
    if($('#discountSubCategory').length > 0){
        var add = [];
        var remove = [];
        $('#discountSubCategory').find('input[type="checkbox"]').each(function () {
            if($(this).is(":checked") && $(this).attr('waschecked') == 1){
                //do nothing
            } else if($(this).is(":checked") && $(this).attr('waschecked') == 0){
                add.push($(this).val());
            } else if(!$(this).is(":checked") && $(this).attr('waschecked') == 1){
                remove.push($(this).val());
            }
            
        });
        $.ajax({
            url: '/admin/saveDiscountSubCategories/'+$('#discountId').val(),
            method: 'POST',
            data: {add: add, remove: remove}
        }).done(function (data) {
            $('#saveDiscountSubCat').html('<i class="fa fa-check"></i> Сохранено');
            //window.opener.location.reload();
        });
    }
}

function publishCompany(id){
    id = id||0;
    var array = [];
    if(id == 0){
        $('#companyTable > tbody > tr').each(function () {
            array.push($(this).attr('id'));
        });
    }
    else{
        array.push(id);
    }

    $.ajax({
        url: '/admin/publishCompany',
        method: 'POST',
        data: {data: array}
    }).done(function (data) {
        //$('#saveDiscountSubCat').html('<i class="fa fa-check"></i> Сохранено');
        location.reload();
    });
}

function unpublishCompany(id){
    id = id||0;
    var array = [];
    if(id == 0){
        $('#companyTable > tbody > tr').each(function () {
            array.push($(this).attr('id'));
        });
    }
    else{
        array.push(id);
    }

    $.ajax({
        url: '/admin/unpublishCompany',
        method: 'POST',
        data: {data: array}
    }).done(function (data) {
        //$('#saveDiscountSubCat').html('<i class="fa fa-check"></i> Сохранено');
        location.reload();
    });
}


function publishDiscount(id){
    id = id||0;
    var array = [];
    if(id == 0){
    $('#discountTable > tbody > tr').each(function () {
        array.push($(this).attr('id'));
    });
    }
    else{
        array.push(id);
    }    

    $.ajax({
        url: '/admin/publishDiscount',
        method: 'POST',
        data: {data: array}
    }).done(function (data) {
        //$('#saveDiscountSubCat').html('<i class="fa fa-check"></i> Сохранено');
        location.reload();
    });
}

function unpublishDiscount(id){
    id = id||0;
    var array = [];
    if(id == 0){
    $('#discountTable > tbody > tr').each(function () {
        array.push($(this).attr('id'));
    });
    }
    else{
        array.push(id);
    }    

    $.ajax({
        url: '/admin/unpublishDiscount',
        method: 'POST',
        data: {data: array}
    }).done(function (data) {
        //$('#saveDiscountSubCat').html('<i class="fa fa-check"></i> Сохранено');
        location.reload();
    });
}


function deleteDiscounts(id){
    id = id||0;
    var array = [];
    if(id == 0){
    $('#discountTable > tbody > tr').each(function () {
        array.push($(this).attr('id'));
    });
    }
    else{
        array.push(id);
    }    

    $.ajax({
        url: '/admin/deleteDiscounts',
        method: 'POST',
        data: {data: array}
    }).done(function (data) {
        //$('#saveDiscountSubCat').html('<i class="fa fa-check"></i> Сохранено');
        location.reload();
    });
}

function cloneDiscount(btn, companyId, discountId){
    $.ajax({
        url: '/admin/cloneDiscount/'+companyId+'/'+discountId,
        method: 'POST',
        statusCode: {
                406: function (response) {
                    alert("Акция уже склонирована");
                }
            }
    }).done(function (data) {
        $('#cloneDiscountBtn').html('<i class="fa fa-check"></i> Сохранено');
        //window.location.reload();
    });
}

function cloneAllDiscounts(){
    $('#cloneAllDiscountsBtn').html('<i class="fa fa-database"></i> Идет клонирование...');
    $.ajax({
        url: '/admin/cloneAllDiscounts',
        method: 'POST',
    }).done(function (data) {
        alert("Акции клонированы.");
        $('#cloneAllDiscountsBtn').html('<i class="fa fa-database"></i> Акции клонированы');
        //window.location.reload();
    });
}

function getCategorySubcategory(){
    $.ajax({
        url: '/admin/subCategoryList/'+$('#categorySelector').val(),
        method: 'GET'
    }).done(function (data) {
        $('#discountSubCategoryCheckboxList').html(data);
        App.init();
    });
}

function getShoppingCenterBranchofficeTable(){
    $.get('/admin/shoppingCenterBranchoffice/'+$('#companyId').val()+'/'+$('#companyCitySelector').val()+'/'+$('#shoppingCenterSelector').val(), function(data){
        $('#shoppingCenterBranchofficeDiv').html(data);
        $("#shoppingCenterBranchofficeTable").dataTable().fnDestroy();
        $('#shoppingCenterBranchofficeTable').dataTable({
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
            "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] 
            ],
            "iDisplayLength": 5
        });
    });
}

function getCompanyBranchofficeTable(){
     $.get('/admin/companyBranchofficeTable/'+$('#companyId').val()+'/'+$('#companyCitySelector').val(), function(data){
        $('#companyBranchofficeDiv').html(data);
        $("#companyBranchofficeTable").dataTable().fnDestroy();
        $('#companyBranchofficeTable').dataTable({
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
            "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] 
            ],
            "iDisplayLength": 5
        });
    });
}

function getCompanyDiscountTable(){
    $.get('/admin/companyDiscountTable/'+$('#companyId').val()+'/'+$('#companyCitySelector').val(), function(data){
        $('#companyDiscountDiv').html(data);
        $("#companyDiscountTable").dataTable().fnDestroy();
        $('#companyDiscountTable').dataTable({
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
            "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] 
            ],
            "iDisplayLength": 5
        });
    });
}

function getCompanyPhoto(){
    $.get('/admin/companyPhoto/'+$('#companyId').val(), function(data){
        $('#companyPhotoDiv').html(data);
    });
}

function getDiscountPhoto(){
    $.get('/admin/discountPhoto/'+$('#discountId').val(), function(data){
        $('#discountPhotoDiv').html(data);
    });
}

function getCompanyCatalogImage(){
    $.get('/admin/companyCatalogImage/'+$('#id').val(), function(data){
        $('#companyCatalogImageDiv').html(data);
    });
}


function deletePhoto(id, type){
    if(type == 'companyPhoto'){
        $.get('/admin/companyPhoto/'+id+'/remove', function(data){
            getCompanyPhoto();
        });
    }
    if(type == 'discountPhoto'){
        $.get('/admin/discountPhoto/'+id+'/remove', function(data){
            getDiscountPhoto();
        });
    }
    if(type == 'companyCatalogImage'){
        $.get('/admin/companyCatalogImage/'+id+'/remove', function(data){
            getCompanyCatalogImage();
        });
    }
}

function getUserEditForm(){
    $.get('/auth/edit_user_custom/'+$('#userId').val(), function(data){
        $('#editUserDiv').html(data);
    });
}

function acceptComment(id){
    if(id){
        $.get('/admin/acceptComment/'+id, function(data){
            window.location.reload();
        });
    }
}

function declineComment(id){
    if(id){
        $.get('/admin/declineComment/'+id, function(data){
            window.location.reload();
        });
    }
}

jQuery(document).ready(function() {
    if ($('#cityDescriptionHTML').length){
       // CKEDITOR.instances['cityDescriptionHTML'].setData(result);

        //$('#cityDescriptionHTML').wysihtml5();
        getCompanyCityDescription();
    }

    if($('#shoppingCenterSelector').length){
        getShoppingCenterList();
        $('#shoppingCenterSelector').bind('change', function(){
            getShoppingCenterBranchofficeTable();
        }); 
    }

    if($('#shoppingCenterBranchofficeDiv').length){
        getShoppingCenterBranchofficeTable();
    }

    if($('#companyBranchofficeDiv').length){
        getCompanyBranchofficeTable();
    }

    if($('#companyDiscountDiv').length){
        getCompanyDiscountTable();
    }

    if($('#companyPhotoDiv').length){
        getCompanyPhoto();
    }

    if($('#discountPhotoDiv').length){
        getDiscountPhoto();
    }

    if($('#companyCatalogImageDiv').length){
        getCompanyCatalogImage();
    }

    if($('#comments').length){
        $.get('/admin/newCommentsCount', function(data){
            $('#comments').html('Комментраии ('+data+')');
        });
    }

    if($('#categorySelector').length){
        if (typeof editingdiscount == 'undefined')
            getCategorySubcategory();
    }


   $('a[href="'+window.location.pathname+'"]').parent().toggleClass("active");
   $('a[href="'+window.location.pathname+'"]').parent().parent().css("display", "block");
   $('a[href="'+window.location.pathname+'"]').parent().parent().parent().addClass("open");
   $('a[href="'+window.location.pathname+'"]').parent().parent().parent().find('span.arrow:first').addClass("open");
});

