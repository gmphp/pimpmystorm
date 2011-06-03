$(function() {
	$('#tweaks').text($('.tweak').length);
	$("a").each(function(a,d){if(d.host!==window.location.host)d.target="_blank"});
});

