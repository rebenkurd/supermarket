
function addUser(){
    var firstName=$('#first_name').val();
    var lastName=$('#last_name').val();
    var Email=$('#email').val();
    var Phone=$('#phone').val();
    var Role=$('#role').val();
    var Password=$('#password').val();
    if(firstName==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناوی سەرەتا پڕبکەرەوە</div>');
    }else if(lastName==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناوی کۆتا پڕبکەرەوە</div>');
    }else if(Email==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناوی ئیمەیڵ پڕبکەرەوە</div>');
    }else if(Phone==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ژمارەی مۆبایل پڕبکەرەوە</div>');
    }else if(Password==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی وشەی تێپەڕ پڕبکەرەوە</div>');
    }else if(Role==''){
        $('#msg').html('<div class="alert alert-danger">تکایە ڕۆلێک هەڵبژێرە</div>');
    } else{
    $.ajax({
        url: 'add_user.php',
        type: 'POST',
        data: {
            success: true,
            first_name: firstName,
            last_name: lastName,
            email: Email,
            phone: Phone,
            role: Role,
            password: Password,
        },success: function(){
            $('#msg').html('<div class="alert alert-success">زانیارییەکان زیادکرا</div>');
        }
});
    }
}

function userRecycle(user_id){
    $.ajax({
        url: 'users.php',
        type: 'GET',
        data: {
            id:user_id
        },success: function(data){
            $('#tr_user_'+user_id).remove();
        }
    });
}

function userRecovery(user_id) {
    $.ajax({
        url: 'user_recycle.php',
        type: 'GET',
        data: {
            id:user_id
        },success: function(data){
            $('#tr_user_'+user_id).hide();
        }

});
}
function userUpdate(user_id) {
    $.ajax({
        url: 'edit_user.php',
        type: 'GET',
        data: {
            id:user_id
        },success: function(){
            window.location="edit_user.php?id="+user_id;
        }
});
}
function userDelete(user_id) {
    $.ajax({
        url: 'delete_user.php',
        type: 'GET',
        data: {
            id:user_id
        },success: function(data){
            $('#tr_user_'+user_id).remove();
            $('#msg').html('<div class="alert alert-success">زانیارییەکان سڕانەوە</div>');
        }
});
}



function editUser(id){
    var firstName=$('#first_name').val();
    var lastName=$('#last_name').val();
    var Email=$('#email').val();
    var Phone=$('#phone').val();
    var Role=$('#role').val();
    if(firstName==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناوی سەرەتا پڕبکەرەوە</div>');
    }else if(lastName==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناوی کۆتا پڕبکەرەوە</div>');
    }else if(Email==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناوی ئیمەیڵ پڕبکەرەوە</div>');
    }else if(Phone==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ژمارەی مۆبایل پڕبکەرەوە</div>');
    }else if(Role==''){
        $('#msg').html('<div class="alert alert-danger">تکایە ڕۆلێک هەڵبژێرە</div>');
    } else{
    $.ajax({
        url: 'edit_user.php',
        type: 'GET',
        data: {
            uid:id,
            first_name: firstName,
            last_name: lastName,
            email: Email,
            phone: Phone,
            role: Role,
        },success: function(data){
            $('#msg').html('<div class="alert alert-success">بەسەرکەوتووی پاشەکەوتکران</div>');
        }

});}
}



function addProduct(){
        var Name=$('#name').val();
        var Category=$('#category').val();
        var Company=$('#company').val();
        var Code=$('#code').val();
        var Price=$('#price').val();
        var Quantity=$('#quantity').val();
        var Description=$('#description').val();
        var Debt=$('#debt').val();
        var ExpireDate = new Date($('#expire_date').val());
        var ManufactureDate = new Date($('#manufacture_date').val());
        var exd = ExpireDate.getDate('dd');
        var exm = ExpireDate.getMonth()+1;
        var exy = ExpireDate.getFullYear();      
        var mfd = ManufactureDate.getDate('dd');
        var mfm = ManufactureDate.getMonth()+1;
        var mfy = ManufactureDate.getFullYear();      
        if(Code==''){
            $('#msg').html('<div class="alert alert-danger">تکایە خانەی کۆد پڕبکەرەوە</div>');
        }else if(Name==''){
            $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناو پڕبکەرەوە</div>');
        }else if(Price==''){
            $('#msg').html('<div class="alert alert-danger">تکایە خانەی نرخ پڕبکەرەوە</div>');
        }else if(Quantity==''){
            $('#msg').html('<div class="alert alert-danger">تکایە خانەی دانە پڕبکەرەوە</div>');
        }else if(Category==''){
            $('#msg').html('<div class="alert alert-danger">تکایە جۆرێک هەڵبژێرە</div>');
        }else if(Company==''){
            $('#msg').html('<div class="alert alert-danger">تکایە کۆمپانیایەک هەڵبژێرە</div>');
        }else if(ManufactureDate=='Invalid Date'){
            $('#msg').html('<div class="alert alert-danger">تکایە بەرواری دەرچوون داخڵ بکە</div>');
        }else if(ExpireDate=='Invalid Date'){
            $('#msg').html('<div class="alert alert-danger">تکایە بەرواری بەسەرجوون داخڵ بکە</div>');
        }else if(Debt==''){
            $('#msg').html('<div class="alert alert-danger">کاڵایەکەت قەرزە یان نا؟</div>');
        } else{
        $.ajax({
            url: 'add_product.php',
            type: 'POST',
            data: {
                success: true,
                name: Name,
                category: Category,
                price: Price,
                company: Company,
                quantity: Quantity,
                code: Code,
                description: Description,
                debt: Debt,
                expire_date: [exy,exm,exd].join('-'),
                manufacture_date: [mfy,mfm,mfd].join('-'),
            },success: function(data){
                $('#name').val('');
                $('#category').val('');
                $('#company').val('');
                $('#code').val('');
                $('#price').val('');
                $('#quantity').val('');
                $('#description').val('');
                $('#expire_date').val('');
                $('#manufacture_date').val('');
                $('#debt').val('');
                $('#msg').html('<div class="alert alert-success">زانیارییەکان زیادکرا</div>');
                console.log(data);
            }
    });
        }
    }

    function productRecycle(product_id){
        $.ajax({
            url: 'products.php',
            type: 'GET',
            data: {
                id:product_id
            },success: function(data){
                $('#tr_product_'+product_id).remove();
            }
        });
    }

    function productRecovery(product_id) {
        $.ajax({
            url: 'product_recycle.php',
            type: 'GET',
            data: {
                id:product_id
            },success: function(){
                $('#tr_product_'+product_id).hide();
            }
    
    });
    }
    function productUpdate(product_id) {
        $.ajax({
            url: 'edit_product.php',
            type: 'GET',
            data: {
                id:product_id
            },success: function(){
                window.location="edit_product.php?id="+product_id;
            }
    });
    }
    function productDelete(product_id) {
        $.ajax({
            url: 'delete_product.php',
            type: 'GET',
            data: {
                id:product_id
            },success: function(){
                $('#tr_product_'+product_id).remove();
                $('#msg').html('<div class="alert alert-success">زانیارییەکان سڕانەوە</div>');
            }
    });
    }
    function editProduct(id){
        var Name=$('#name').val();
        var Category=$('#category').val();
        var Company=$('#company').val();
        var Code=$('#code').val();
        var Debt=$('#debt').val();
        var Price=$('#price').val();
        var Quantity=$('#quantity').val();
        var Description=$('#description').val();
        var ExpireDate = new Date($('#expire_date').val());
        var ManufactureDate = new Date($('#manufacture_date').val());
        var exd = ExpireDate.getDate('dd');
        var exm = ExpireDate.getMonth()+1;
        var exy = ExpireDate.getFullYear();      
        var mfd = ManufactureDate.getDate('dd');
        var mfm = ManufactureDate.getMonth()+1;
        var mfy = ManufactureDate.getFullYear();
        if(Code==''){
            $('#msg').html('<div class="alert alert-danger">تکایە خانەی کۆد پڕبکەرەوە</div>');
        }else if(Name==''){
            $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناو پڕبکەرەوە</div>');
        }else if(Price==''){
            $('#msg').html('<div class="alert alert-danger">تکایە خانەی نرخ پڕبکەرەوە</div>');
        }else if(Quantity==''){
            $('#msg').html('<div class="alert alert-danger">تکایە خانەی دانە پڕبکەرەوە</div>');
        }else if(Category==''){
            $('#msg').html('<div class="alert alert-danger">تکایە جۆرێک هەڵبژێرە</div>');
        }else if(Company==''){
            $('#msg').html('<div class="alert alert-danger">تکایە کۆمپانیایەک هەڵبژێرە</div>');
        }else if(ManufactureDate=='Invalid Date'){
            $('#msg').html('<div class="alert alert-danger">تکایە بەرواری دەرچوون داخڵ بکە</div>');
        }else if(ExpireDate=='Invalid Date'){
            $('#msg').html('<div class="alert alert-danger">تکایە بەرواری بەسەرجوون داخڵ بکە</div>');
        }else if(Debt==''){
            $('#msg').html('<div class="alert alert-danger">کاڵایەکەت قەرزە یان نا؟</div>');
        } else{
        $.ajax({
            url: 'edit_product.php',
            type: 'GET',
            data: {
                pid:id,
                name: Name,
                category: Category,
                price: Price,
                company: Company,
                quantity: Quantity,
                code: Code,
                debt: Debt,
                description: Description,
                expire_date: [exy,exm,exd].join('-'),
                manufacture_date: [mfy,mfm,mfd].join('-'),
            },success: function(){
                $('#msg').html('<div class="alert alert-success">بەسەرکەوتووی پاشەکەوتکران</div>');
            }
        });
    }
}




function addCategory(){
    var Name=$('#name').val();
    var Description=$('#description').val();     
    if(Name==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناو پڕبکەرەوە</div>');
    } else{
    $.ajax({
        url: 'add_category.php',
        type: 'POST',
        data: {
            success: true,
            name: Name,
            description: Description,
        },success: function(){
            $('#name').val('');
            $('#description').val('');  
            $('#msg').html('<div class="alert alert-success">زانیارییەکان زیادکرا</div>');
        }
});
    }
}

function categoryRecycle(category_id){
    $.ajax({
        url: 'categories.php',
        type: 'GET',
        data: {
            id:category_id
        },success: function(data){
            $('#tr_category_'+category_id).remove();
        }
    });
}

function categoryRecovery(category_id) {
    $.ajax({
        url: 'category_recycle.php',
        type: 'GET',
        data: {
            id:category_id
        },success: function(){
            $('#tr_category_'+category_id).hide();
        }

});
}
function categoryUpdate(category_id) {
    $.ajax({
        url: 'edit_category.php',
        type: 'GET',
        data: {
            id:category_id
        },success: function(){
            window.location="edit_category.php?id="+category_id;
        }
});
}
function categoryDelete(category_id) {
    $.ajax({
        url: 'delete_category.php',
        type: 'GET',
        data: {
            id:category_id
        },success: function(){
            $('#tr_category_'+category_id).remove();
            $('#msg').html('<div class="alert alert-success">زانیارییەکان سڕانەوە</div>');
        }
});
}
function editCategory(category_id){
    var Name=$('#name').val();
    var Description=$('#description').val();
    if(Name==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناو پڕبکەرەوە</div>');
    } else{
    $.ajax({
        url: 'edit_category.php',
        type: 'GET',
        data: {
            category_id:category_id,
            name: Name,
            description: Description,
        },success: function(data){
            $('#msg').html('<div class="alert alert-success">بەسەرکەوتووی پاشەکەوتکران</div>');
        }
    });
}
}



function addCompany(){
    var Name=$('#name').val();
    var Description=$('#description').val();     
    if(Name==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناو پڕبکەرەوە</div>');
    } else{
    $.ajax({
        url: 'add_company.php',
        type: 'POST',
        data: {
            success: true,
            name: Name,
            description: Description,
        },success: function(data){
            $('#name').val('');
            $('#description').val(''); 
            $('#msg').html('<div class="alert alert-success">زانیارییەکان زیادکرا</div>');
        }
});
    }
}

function companyUpdate(company_id) {
    $.ajax({
        url: 'edit_company.php',
        type: 'GET',
        data: {
            id:company_id
        },success: function(){
            window.location="edit_company.php?id="+company_id;
        }
});
}

function editCompany(company_id){
    var Name=$('#name').val();
    var Description=$('#description').val();
    if(Name==''){
        $('#msg').html('<div class="alert alert-danger">تکایە خانەی ناو پڕبکەرەوە</div>');
    } else{
    $.ajax({
        url: 'edit_company.php',
        type: 'GET',
        data: {
            company_id:company_id,
            name: Name,
            description: Description,
        },success: function(data){
            $('#msg').html('<div class="alert alert-success">بەسەرکەوتووی پاشەکەوتکران</div>');
        }
    });
}
}

function companyRecycle(company_id){
    $.ajax({
        url: 'companys.php',
        type: 'GET',
        data: {
            id:company_id
        },success: function(data){
            $('#tr_company_'+company_id).remove();
        }
    });
}

function companyRecovery(company_id) {
    $.ajax({
        url: 'company_recycle.php',
        type: 'GET',
        data: {
            id:company_id
        },success: function(){
            $('#tr_company_'+company_id).hide();
        }

});
}

function companyDelete(company_id) {
    $.ajax({
        url: 'delete_company.php',
        type: 'GET',
        data: {
            id:company_id
        },success: function(){
            $('#tr_company_'+company_id).remove();
            $('#msg').html('<div class="alert alert-success">زانیارییەکان سڕانەوە</div>');
        }
});
}


function selectedCategory(){
    var category_id=$('#categories').val();
    $.ajax({
        url: 'sale.php',
        type: 'GET',
        data: {
            category_id:category_id
        },success: function(data){
            $('#products').html(data);
        }
});
}
function addSaleProduct(){
    var pr_id=$('#products').val();
    var Qty=$('#quantity').val();
    $.ajax({
        url: 'sale.php',
        type: 'GET',
        data: {
            pr_id:pr_id,
            qty: Qty,
        },success: function(data){
            $('#products').val('');
            $('#quantity').val('');
            location.reload();

            // $('#trr').load('sale_data.php');
            // console.log(data);
            
        }
    });
}

function saleDelete(id) {
    $.ajax({
        url: 'delete_sale.php',
        type: 'GET',
        data: {
            id:id
        },success: function(){
            $('#tr_sale_'+id).remove();
        }
});
}
function clearAllSale() {
    $.ajax({
        url: 'sale.php',
        type: 'GET',
        data: {
            delete:true
        },success: function(){
            window.location.reload();
        }
});
}
var arg= {
    resultFunction: function(result) {
            $.ajax({
                url: 'sale.php',
                type: 'GET',
                data: {
                    product_code:result.code,
                },success: function(data){
                    // location.reload();
                    $('#trr').load('sale_data.php');
                    // console.log(data);
                }
            });
    }
};

$('canvas').WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery.play()




function multiRecycleProduct(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'products.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_product_"+selected_id[i]).remove();
        }
    })
}
}
function multiRecoveryProduct(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'product_recycle.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_product_"+selected_id[i]).remove();
        }
    })
}
}
function multiDeleteProduct(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'delete_product.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_product_"+selected_id[i]).remove();
        }
    })
}
}
function multiRecycleUser(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'users.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_user_"+selected_id[i]).remove();
        }
    })
}
}
function multiRecoveryUser(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'user_recycle.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_user_"+selected_id[i]).remove();
        }
    })
}
}
function multiDeleteUser(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'delete_user.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_user_"+selected_id[i]).remove();
        }
    })
}
}

function saveAllProduct(oc){
    var pr_id=[];
    var pr_code=[];
    var pr_name=[];
    var pr_quantity=[];
    var pr_price=[];
    var total_price=[];
    $('#pr_id[name="pr_id[]"]').each(function(){
        pr_id.push($(this).val());
    });
    $('#pr_name[name="pr_name[]"]').each(function(){
        pr_name.push($(this).val());
    });
    $('#pr_code[name="pr_code[]"]').each(function(){
        pr_code.push($(this).val());
    });
    $('#pr_quantity[name="pr_quantity[]"]').each(function(){
        pr_quantity.push($(this).val());
    });
    $('#pr_price[name="pr_price[]"]').each(function(){
        pr_price.push($(this).val());
    });
    $('#total_price[name="total_price[]"]').each(function(){
        total_price.push($(this).val());
    });
    for (let i = 0; i < pr_id.length; i++) {
    $.ajax({
        url: 'sale.php',
        type: 'POST',
        data: {
            success:true,
            oc:oc,
            pr_id:pr_id[i],
            pr_code:pr_code[i],
            pr_name:pr_name[i],
            pr_quantity:pr_quantity[i],
            pr_price:pr_price[i],
            total_price:total_price[i],
        },success: function(data){
            // location.reload();
        }
    })
}
}

function addItem(id){
    $.ajax({
        url: 'sale.php',
        type: 'GET',
        data: {
            pr_id:id,
        },success: function(data){
            $('#trr').load('sale_data.php');
            // console.log(data);
        }
    })
}


function Qty() {
    var qty=[];
    var pr_id=[];
    $('#pr_quantity[name="pr_quantity[]"]').each(function(){
        qty.push($(this).val());
    });
    $('#pr_id[name="pr_id[]"]').each(function(){
        pr_id.push($(this).val());
    });
    for (let i = 0; i < pr_id.length; i++) {
    $.ajax({
        url: 'sale.php',
        type: 'GET',
        data: {
        inc: true,
        pr_quantity: qty[i],
        pr_id: pr_id[i],
        },
        success: function (data) {
        location.reload()
        },
    })}
}




function search(query){
    if(query != ''){
        $.ajax({
            url: 'search.php',
            type: 'POST',
            data: {
                query:query
            },success: function(data){
                $('#search-result').css('display','block');
                $('#result').html(data);
                // alert(data);
            }
        })  
        }else{
        $('#result').html(data);
    }
}

function searchClose(){
    $('#search-result').css('display','none');
}



function orderDelete(order_id) {
    $.ajax({
        url: 'delete_order.php',
        type: 'GET',
        data: {
            id:order_id
        },success: function(){
            $('#tr_order_'+order_id).remove();
            $('#msg').html('<div class="alert alert-success">زانیارییەکان سڕانەوە</div>');
        }
});
}

function orderRecycle(order_id){
    $.ajax({
        url: 'order_list.php',
        type: 'GET',
        data: {
            id:order_id
        },success: function(data){
            $('#tr_order_'+order_id).remove();
        }
    });
}

function orderRecovery(order_id) {
    $.ajax({
        url: 'order_recycle.php',
        type: 'GET',
        data: {
            id:order_id
        },success: function(){
            $('#tr_order_'+order_id).hide();
        }

});
}

function orderRestore(oid) {
    $.ajax({
        url: 'order_list.php',
        type: 'GET',
        data: {
            oid:oid
        },success: function(){
            $('#tr_order_'+oid).hide();
        }

});
}

function multiRecycleOrder(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'order_list.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_order_"+selected_id[i]).remove();
        }
    })
}
}
function multiRecoveryOrder(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'order_recycle.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_order_"+selected_id[i]).remove();
        }
    })
}
}
function multiDeleteOrder(){
    var selected=$('#sel[name="sel[]"]').filter(':checked');
    var selected_id=new Array();
    selected.each(function(){
        selected_id.push($(this).val());
    });
    for (let i = 0; i < selected_id.length; i++) {
    $.ajax({
        url: 'delete_order.php',
        type: 'GET',
        data: {
            id:selected_id[i]
        },success: function(data){
            // location.reload();
            // console.log(data);
            $("#tr_order_"+selected_id[i]).remove();
        }
    })
}
}



// amount

function Amount(){
    var sum=0;
    var price=[];
    $('#total_price[name="total_price[]"').each(function(){
        price.push($(this).val());
    }
    );
    for (let i = 0; i < price.length; i++) {
        sum+=parseInt(price[i]);
    }
    $('#amount').html(sum + ' دینار ');
}
Amount();






// order list
function seeCustomer(cc){
    $.ajax({
        url: 'order_list.php',
        type: 'GET',
        data: {
            cc:cc
        },success: function(data){
            window.location.href='order_list.php?cc='+cc;
        }
    })
}