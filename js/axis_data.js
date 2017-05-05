function profileConversation(user_id){
	var settings = {
		showArrows: false
	};
	var pane = $('#popup_user_detail_right');
	pane.jScrollPane(settings);
	var api = pane.data('jsp');
	$.ajax({
		url: 'index.php?page=profile&act=profileConversation',
		type: 'POST',
		data : {userID: user_id},
		dataType: 'json',
		beforeSend: function(){
		},
		success: function(response) {		
			$('#popup_user_detail_left').html(popupUserLeft(response[0],response[0].isMe));			
			api.getContentPane().html(popupUserConversation(response));
			api.reinitialise();
		}
	});
}