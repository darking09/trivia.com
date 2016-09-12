$( document ).ready(function() {
    
    $('.question').click(function(){
    	var question = $(this);

    	$.ajax({
		  	url: "index.php/question",
		  	method: "POST",
		  	data: {
		  		id: $(this).attr('data-id')
		  	}
		}).done(function(data) {
			if(!question.hasClass('active')){
				var title = "Question "+ question.attr('data-title');
				
			  	$.fancybox( '<div class="question"><p class="container-question">'+data.question+'</p><div class="wrapper-container"><button>show the answer</button></div></div>', {
				    title : title,
				    maxWidth: 500,
				});

				question.addClass( "active" );
				click(data.answer);
			}
		});
    });
});

function click(answer){
	$(".wrapper-container").on('click', 'button', function(){
		$('.fancybox-inner .question').html(answer);
    });
}