function popupUserLeft(a,b){
	var str='<a class="bigThumb">';
		str+='<img src="https://graph.facebook.com/'+a['fb_id']+'/picture?type=large" />';
		if (b == a['user_id']){
			str+='<span class="star">&nbsp;</span >';
		}
		str+='</a>';
		str+='<span class="userName">'+a['nickname']+'</span>';
	return str;
}

function popupUserConversation(a){
	var str='';
	for(var x in a){
		str+='<div class="row">';
		str+='<a class="thumb"><img src="https://graph.facebook.com/'+a[x].fb_id+'/picture?type=small" /></a>';
		str+='<div class="entry">';
		str+='<p><a>@'+a[x].nickname+'</a> '+a[x].posting+'</p>';
		str+='<span class="time">'+a[x].posting_date+'</span>';
		str+='<span class="date"></span>';
		str+='<a class="facebook" href="#">&nbsp;</a>';
		str+='<a class="twitter" href="#">&nbsp;</a>';
		str+='</div>';
		str+='</div><!-- end .row -->';
	}
	return str;
}