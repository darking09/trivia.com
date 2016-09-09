$( document ).ready(function() {
    
    $('.question').click(function(){
    	var question = $(this);

    	$.ajax({
		  	url: "question",
		  	method: "POST",
		  	data: {
		  		id: $(this).attr('data-id')
		  	}
		}).done(function(data) {
			if(!question.hasClass('active')){
				var title = "Question "+ question.html();
				console.log(title);
			  	$.fancybox( '<div><p>'+data.question+'</p></div>', {
				    title : title,
				    maxWidth: 500,
				});

				question.addClass( "active" );
			}
		});
    });
});