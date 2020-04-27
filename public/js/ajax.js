$(document).ready(function(){
    $('.quantity').blur(function(){
        let id = $(this).data('id');
        $.ajax({
            url : 'cart/'+id,
            type : 'put',
            dataType : 'json',
            data : {
                qty : $($this).val(),
            },
            success : function(data){
                console.log(data)
            }
        });
    });
});
