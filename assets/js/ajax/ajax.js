// $(document).ready(function(){

function addUser(){
// $('#add_user').on('click',function(){
    var firstName=$('#first_name').val();
    var lastName=$('#last_name').val();
    var Email=$('#email').val();
    var Phone=$('#phone').val();
    var Role=$('#role').val();
    var Password=$('#password').val();
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
        },success: function(data){
            console.log(data);
        }

});
// });
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
    $.get({
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
    $.get({
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
    $.get({
        url: 'delete_user.php',
        type: 'GET',
        data: {
            id:user_id
        },success: function(data){
            $('#tr_user_'+user_id).remove();
            alert(data);
        }
});
}



$('#edit_user').on('click',function(){
    var id=$('#user_id').val();
    var firstName=$('#first_name').val();
    var lastName=$('#last_name').val();
    var Email=$('#email').val();
    var Phone=$('#phone').val();
    var Role=$('#role').val();
    $.get({
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
            location.reload();
        }

});
});

// })