$(document).ready(function() {

	
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("div h4").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
	$("#index div .se").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
		
});






