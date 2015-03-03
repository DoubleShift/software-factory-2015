/**
* JS functions
**/
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