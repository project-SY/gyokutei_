$(function(){
    $("form").submit(function(){
        $("p.error").remove();
        $("*").removeClass("errored");

        /*必須項目
         v_requiredクラス
         */
        $(".v_required").each(function(){
            if($(this).val()==""){
                $(this).parent().append("<p class='error'>Required fields.</p>");
                $(this).addClass("errored");
            }
        });

//電話番号確認用。ハイフン不要
        $(".v_tel").each(function(){
            if($(this).val() && !$(this).val().match(/[0-9]/)){
                $(this).parent().append("<p class='error'>Please enter numeric characters.</p>");
                $(this).addClass("errored");
            }
        });

//パスワード確認用
        $(".v_password").each(function(){
            if(($(this).val() !== $(".v_password").val())){
                $(this).parent().append("<p class='error'>Password do not match.</p>");
                $(this).addClass("errored");
            }
        });

//メールアドレス
        $(".v_mail").each(function(){
            if($(this).val() && !$(this).val().match(/.+@.+\..+/)){
                $(this).parent().append("<p class='error'>Email address is not in the correct format.</p>");
                $(this).addClass("errored");
            }
        });

//メールアドレス確認用
        $(".v_mail_confirm").each(function(){
            if($(this).val() && !$(this).val().match(/.+@.+\..+/)){
                $(this).parent().append("<p class='error'>Email address is not in the correct format.</p>");
                $(this).addClass("errored");
            }
        });

        $(".v_mail_confirm").each(function(){
            if(($(this).val() !== $(".v_mail").val())){
                $(this).parent().append("<p class='error'>Email addresses do not match.</p>");
                $(this).addClass("errored");
            }
        });

        if($("p.error").size() > 0){
            $("html,body").animate({ scrollTop: $("p.error:first").offset().top-80 }, "slow");
            return false;
        }

    });

});