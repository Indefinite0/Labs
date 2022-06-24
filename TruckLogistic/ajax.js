$(document).ready(function() {
	$('form').on('submit', function() {
		let name = $("#name").val()
		let phone = $("#phone").val()
        let type = $("#type").val()
		let data = {
			'name': name,
			'phone': phone,
            'type': type
		};
		$.get("action.php", data, function(d) {
			$("#result").html(d);
		});
		alert('Форма отправлена: " +name +" "+phone+" "+type+"');
		return false;
	});
});
