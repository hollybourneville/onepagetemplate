$(function(){
	console.log("hi");

	$('.nav-link').on('click',function(e){
		

		//get browser url - checking to see if links are on the same page to scroll, if not jump.

		var url = window.location.href;

		var hashPos = url.search('#');
		if(hashPos>-1){ //if hashposition is greater than -1 , this means if it exists. if it is found it will give you the position. e.g if it is
			//the first letter in the string it will be 0, if it is second it will be 1 etc. 
			//sub str means substring - take part of the big string. 
			url = url.substr(0,hashPos);
		}

		var href = $(this).attr('href');

		hashPos = href.search('#');
		var slug = '';
		if(hashPos >-1){
			//below gets slug by finding substring starting at hash and then going to the end. 
			slug= href.substr(hashPos);
			//below means substring is 0 to hashpos. so it is comparing the right substring
			href =href.substr(0,hashPos);
		}

		console.log(url);

		if(url == href && slug != ''){
			// slide()
			e.preventDefault();
			var target = $(slug).offset().top;

			$('html,body').animate({scrollTop:target},1000);
		}
	});
});