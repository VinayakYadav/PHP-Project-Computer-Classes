$('#con_pass').keyup(function(e){
	if($('user_pass').val()!== $('#con_pass').val()){
		$('#error').removeClass('hidden'):
		return false;
	}else{
		$('error').addClass('hidden');
	}
});