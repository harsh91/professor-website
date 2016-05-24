$(document).ready(function() {
	$('body').on('click', '.remove', function(event) {
		event.preventDefault();
		$(this).closest('.slot').remove();
	});
	$('.add').on('click', function(event) {
		event.preventDefault();
		$slot = $(this).parent(".row").find(".slot").last();
		$counter = 0;
		if($slot.length == 0) {
			$counter = 1;
		} else {
			console.log($slot);
			$lastName = $($slot).find('input').attr('name');
			console.log($lastName);
			$count = $lastName.split("_");
			$counter = parseInt($count[1])+1;
			console.log("count -> " + $counter);
		}
		$name = $(this).parent(".row").attr("day")  + "_" + $counter;
		$html = '<div class="slot">'+
					'<input type="text" value="" name="' + $name + '" />'+
					'<button class="remove btn btn-danger">X</button>'+
				'</div>';
		$(this).closest('.add').before($html);
	});
});