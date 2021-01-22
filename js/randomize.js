(function($){

	$.fn.randomize = function(options){

		var new_src,
		settings = $.extend({
		    		path : 'img/avatar-0'
		    	}, options);
		count = 0,
		src_storage = [];

		this.each(function(){
			total_images = get_prop($(this));
		});

		return this.each(function(){
			$(this).removeAttr('src');
			new_src = generate_src();
			$(this).attr('src' , new_src);
		});

		// function to check for images that maybe repeated .
		function get_prop(current){
			var current_src = current.attr('src');
			if ($.inArray(current_src , src_storage) === -1) {
				src_storage.push(current_src);
			}
			return src_storage.length;
		}

		//function to generate a random number
		function generate_random(){
			var random_no = Math.floor(Math.random()*total_images)+1
			return random_no;
		};

		// function to generate a new src for the selected images
		function generate_src(){
			var store_random = generate_random(),
				new_src;
		
				new_src = settings.path + store_random + '.png';
			
			return new_src;
		}


	}

}(jQuery));