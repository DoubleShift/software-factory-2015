/**
* JS functions
**/


$(document).ready(function(){

    //On register pages, select of info block
    $('.option-block').each(function(){

        $(this).click(function(e){

            e.preventDefault();

            if($(this).find('input[type="radio"]').size()){

                $(this).siblings().removeClass('selected').find('input').removeAttr('checked');

                if(!$(this).hasClass('selected')){
                    $(this).addClass('selected').find('input').attr('checked','checked');
                }

            }else{

                if($(this).hasClass('selected')){
                    $(this).removeClass('selected').find('input').removeAttr('checked');
                }else{
                    $(this).addClass('selected').find('input').attr('checked','checked');
                }
            }

        });
        
    });
})

function getCookie(name) {  
 var nameEQ = name + "=";  
 var ca = document.cookie.split(';');      
 for(var i=0;i < ca.length;i++) {  
 var c = ca[i];                       
 while (c.charAt(0)==' ') {            
 c = c.substring(1,c.length);       
 }  
 if (c.indexOf(nameEQ) == 0) {        
 return unescape(c.substring(nameEQ.length,c.length));    
 }  
 }  
 return false;  
}  
  
function clearCookie(name) {  
 setCookie(name, "", -1);  
}  
  
function setCookie(name, value, seconds) {  
 seconds = seconds || 0;    
 var expires = "";  
 if (seconds != 0 ) {        
 var date = new Date();  
 date.setTime(date.getTime()+(seconds*1000));  
 expires = "; expires="+date.toGMTString();  
 }  
 document.cookie = name+"="+escape(value)+expires+"; path=/";     
}  

function removeAllCookies(){
    var cookies = document.cookie.split(";");
    for (var i = 0; i <= cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            $.removeCookie(name); 
    }
    
    console.log('remove all cookies ');
}


function post(URL, PARAMS) {        
    var temp = document.createElement("form");        
    temp.action = URL;        
    temp.method = "post";        
    temp.style.display = "none";        
    for (var x in PARAMS) {        
        var opt = document.createElement("textarea");        
        opt.name = x;        
        opt.value = PARAMS[x];        
        // alert(opt.name)        
        temp.appendChild(opt);        
    }        
    document.body.appendChild(temp);        
    temp.submit();        
    return temp;        
}        