$(document).ready(function(){

	$.get("../config/kategoriak.php", 
		function(valasz)
		{
			$("#kategoriak").html(valasz);
		});
		
	$("#leiras").on
	(
		{
			keyup: function()
			{
				let hossz = $(this).val().length;
				$("#szovegHossz").html(255-hossz);
			}
		}
	)

});