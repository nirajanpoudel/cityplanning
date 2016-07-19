// Empty JS for your own code to be here
function toggleCaseSearch()
{
	if($('#txtCaseSearch').css("display") == "none")
	{
		$("#txtCaseSearch").parent().parent().animate({width:'352px'}, 500, function() {
			$('#spanCaseSearch').css("display", "none");
			$('#txtCaseSearch').css("display", "");
			$("#txtCaseSearch").focus();
			$("#txtCaseSearch").parent().parent().click(function(){ });
		});
	} else {
		//$('#spanCaseSearch').css("display", "");
		//$('#txtCaseSearch').css("display", "none");
		//$('#txtCaseSearch').value = "";
	}
}