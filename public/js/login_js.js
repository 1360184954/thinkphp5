/**
 * Created by q8982 on 2018/3/20.
 */
$(function(){
    $('.login-promptClose').click(function(){
        $('.login-promptMesage').fadeOut(500);
    });
    $('.login-loginButton').click(function(){
        $('.login-promptMesage').show(300);
    });
})