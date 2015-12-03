$('document').ready(phoneMask);
$('button').click(function(){alert('Спасибо. Форма конечно не рабочая, но реакция есть ;)');});

function phoneMask(){
    var mask ="+7(999)999-99-99";
    $('#cl_phone_status').html('введи номер телефона');

    $('#phone').inputmask(mask, {
                            "oncomplete": function(){$('#cl_phone_status').html('спасибо');btnShow(); }, 
                            "onincomplete": function(){$('#cl_phone_status').html('введи номер телефона'); btnHide(); },
                            "oncleared": function(){$('#cl_phone_status').html('введи номер телефона');btnHide();} }); 
}

/*
 * addOrderHide()
 * скрывает группу input элеметов формы
 *
 */

function btnHide(){
    if (!$('#button').hasClass('invisible')){
        $('#button').toggleClass('invisible');
    }    
}

/*
 * addOrderShow()
 * скрывает группу input элеметов формы
 *
 */

function btnShow(){
    if ($('#button').hasClass('invisible')){
        $('#button').toggleClass('invisible');
    }    
}



