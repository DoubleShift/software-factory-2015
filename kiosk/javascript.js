$(document).ready(function(){

	//On register pages, select of info block
	$('.option-block').each(function(){

		$(this).click(function(e){

			e.preventDefault();
				
			$(this).siblings().removeClass('selected').find('input').attr('checked','checked');

			if($(this).hasClass('selected')){
				//$(this).removeClass('selected').find('input').removeAttr('checked');
			}else{
				$(this).addClass('selected').find('input').attr('checked','checked');
			}

		});
		
	});

})