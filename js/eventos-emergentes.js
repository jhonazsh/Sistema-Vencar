
$(document).ready(function() {
	$("#uno").click(function(){
		$("#muestra1").show(100);
		$("#muestra2").hide();
		$("#muestra3").hide();
		$("#muestra4").hide();
		$("#tod").hide();
		$(".med").css({"height":"450px"});
	});
});

$(document).ready(function() {
	$("#dos").click(function(){
		$("#muestra2").show(100);
		$("#muestra1").hide();
		$("#muestra4").hide();
		$("#muestra3").hide();
		$("#tod").hide();
		$(".med").css({"height":"450px"});
	});
});

$(document).ready(function() {
	$("#tres").click(function(){
		$("#muestra3").show(100);
		$("#muestra2").hide();
		$("#muestra1").hide();
		$("#muestra4").hide();
		$("#tod").hide();
		$(".med").css({"height":"450px"});
	});
});

$(document).ready(function() {
	$("#cuatro").click(function(){
		$("#muestra4").show(100);
		$("#muestra2").hide();
		$("#muestra3").hide();
		$("#muestra1").hide();
		$("#tod").hide();
		$(".med").css({"height":"450px"});
	});
});

$(document).ready(function(){
	$("#act").click(function(){
		$("#tod").toggle();
		$("#muestra4").hide();
		$("#muestra2").hide();
		$("#muestra3").hide();
		$("#muestra1").hide();
	})
})

