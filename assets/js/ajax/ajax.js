
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
                expire_date: [exy,exm,exd].join('-'),
                manufacture_date: [mfy,mfm,mfd].join('-'),
            },success: function(){
                $('#name').val('');
                $('#category').val('');
                $('#company').val('');
                $('#code').val('');
                $('#price').val('');
                $('#quantity').val('');
                $('#description').val('');
                $('#expire_date').val('');
                $('#manufacture_date').val('');
                $('#msg').html('<div class="alert alert-success">زانیارییەکان زیادکرا</div>');
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
    var category_id=$('#category_id').val();
    $.ajax({
        url: 'sale.php',
        type: 'GET',
        data: {
            category_id:category_id
        },success: function(data){
            $('#product').html(data);
        }
});
}
// function addSale(){
//     var product_id=$('#product').val();
//     var Quantity=$('#quantity').val();
//     $.ajax({
//         url: 'sale.php',
//         type: 'GET',
//         data: {
//             product_id:product_id,
//             quantity: 0,
//         },success: function(data){
//             // location.reload();
//             console.log(data);
            
//         }
//     });
// }

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
            $('.tr_sale').remove();
        }
});
}

var arg = {
    resultFunction: function(result) {
        var product_code=result.code;
        $.ajax({
            url: 'sale.php',
            type: 'GET',
            data: {
                product_code:product_code,
            },success: function(data){
                location.reload();
                // console.log(data);
                
            }
        });
    }
};
var arg = {
    resultFunction: function(result) {
        $('#code').val(result.code);
    }
};
$('canvas').WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery.play()
