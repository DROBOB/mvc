$(function () {
    $(".form-horizontal").validate({
        rules:{
            uname:{
                required:true,
                minlength:5,
                remote:{
                    url:"/index.php/admin/reg/checkName"
                }
            },
            pass:{
                required:true,
                rangelength:[5,10],
                equalTo:"#pass"
            }
        },
        messages:{
            uname: {
                required:"用户名没有填写",
                minlength: "用户名在5位以上"

            },
            pass: {
                required:"密码没有填写",
                rangelength: "密码在5-10位之间",

            }
        }
    })

})