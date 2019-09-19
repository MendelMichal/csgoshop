$(document).ready(function(){
	
	var csgor = csgorandom('.csgorandom');
	csgor.end = function(item){ alert(item.weapon+' '+item.name); };
	csgor.build();
	$('button.go').ready(function(){
	setTimeout(function(){
	csgor.start();
	}, 2000);
	});
	$('button.mute').click(function(){
		csgor.mute(true);
		$(this).css('display','none');
		$('button.unmute').css('display','block');});
	$('button.unmute').click(function(){
		csgor.mute(false);
		$(this).css('display','none');
		$('button.mute').css('display','block');});

});