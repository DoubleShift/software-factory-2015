$(document).ready(function(){

	//On register pages, select of info block
	$('body').on('.register-block','click',function(){

		if($(this).hasClass('selected')){
			$(this).removeClass('selected').find('input').removeAttr('checked');
		}else{
			$(this).addClass('selected').find('input').attr('checked','checked');
		}
		
	});

})