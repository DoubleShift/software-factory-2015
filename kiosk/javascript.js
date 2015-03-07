$(document).ready(function(){

	//On register pages, select of info block
	$(document).on('.register-block', 'click', function(e){

		if($(this).hasClass('selected')){
			$(this).removeClass('selected').find('input').removeAttr('checked');
		}else{
			$(this).addClass('selected').find('input').attr('checked','checked');
		}

		return false;
		
	});

})