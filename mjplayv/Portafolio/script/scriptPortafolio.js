// <![CDATA[
$(document).ready(function() { 

	$("#first-tab").addClass('buttonHover');
});

function navigate_tabs(container, tab)
{	

	$(".a").css('display' , 'none');
	$(".b").css('display' , 'none');
	$(".c").css('display' , 'none');
	$(".d").css('display' , 'none');
	$(".f").css('display' , 'none');
	$(".g").css('display' , 'none');
	
	$("#first-tab").removeClass('buttonHover');
	$("#second-tab").removeClass('buttonHover');
	$("#third-tab").removeClass('buttonHover');
	$("#four-tab").removeClass('buttonHover');
	$("#five-tab").removeClass('buttonHover');
	$("#six-tab").removeClass('buttonHover');
	
	$("#"+tab).addClass('buttonHover');
	$("."+container).show('slow');
}

// ]]>