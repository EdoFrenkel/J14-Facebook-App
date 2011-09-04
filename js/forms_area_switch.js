// this file is for the update switch area on update and volunteer tabs

function area_switch(val) {
	if (val == 'center') {
		$('#update_table_bg').removeClass('hide');
		$('#update_form_imid').removeClass('hide');
		$('#sign_imid').removeClass('hide');		
		//$('#sms').html('כדי להתעדכן ולהרשם בחינם, שלחו SMS<br>למספר <span id="big">0522-400104</span> עם המילה <span id="big">מרכז</span>');
		$('#sms').html('אפשרות זו תהיה זמינה בקרוב'); 		
		$('#facebook').html('<a href="http://www.facebook.com/j14center" target="_blank">ב זה אוהל - עדכונים מיידיים - אזור המרכז חוץ מתל אביב</a>');
		$('#twitter').html('<a href="http://twitter.com/j14center" class="twitter-follow-button" data-show-count="false" target="_blank">follow @j14center</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>');		
	}

	if (val == 'south') {
		$('#update_table_bg').removeClass('hide');
		$('#update_form_imid').removeClass('hide');
		$('#sign_imid').removeClass('hide');				
		//$('#sms').html('כדי להתעדכן ולהרשם בחינם, שלחו SMS<br>למספר <span id="big">0522-400104</span> עם המילה <span id="big">דרום</span>'); 	
		$('#sms').html('אפשרות זו תהיה זמינה בקרוב'); 				
		$('#facebook').html('<a href="http://www.facebook.com/j14south" target="_blank">ב זה אוהל - עדכונים מיידיים - באר שבע והנגב</a>');
		$('#twitter').html('<a href="http://twitter.com/j14south" class="twitter-follow-button" data-show-count="false" target="_blank">follow @j14south</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>');		
	}

	if (val == 'north') {
		$('#update_table_bg').removeClass('hide');
		$('#update_form_imid').removeClass('hide');
		$('#sign_imid').removeClass('hide');				
		//$('#sms').html('כדי להתעדכן ולהרשם בחינם, שלחו SMS<br>למספר <span id="big">0522-400104</span> עם המילה <span id="big">צפון</span>'); 	
		$('#sms').html('אפשרות זו תהיה זמינה בקרוב'); 				
		$('#facebook').html('<a href="http://www.facebook.com/j14north" target="_blank">ב זה אוהל - עדכונים מיידיים - אזור הצפון לא כולל חיפה</a>');
		$('#twitter').html('<a href="http://twitter.com/j14north" class="twitter-follow-button" data-show-count="false" target="_blank">follow @j14north</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>');		
	}

	if (val == 'telaviv') {
		$('#update_table_bg').removeClass('hide');
		$('#update_form_imid').removeClass('hide');
		$('#sign_imid').removeClass('hide');				
		//$('#sms').html('כדי להתעדכן ולהרשם בחינם, שלחו SMS<br>למספר <span id="big">0522-400104</span> עם המילה <span id="big">תל אביב</span>'); 	
		$('#sms').html('אפשרות זו תהיה זמינה בקרוב'); 		
		$('#facebook').html('<a href="http://www.facebook.com/j14telaviv" target="_blank">ב זה אוהל - עדכונים מיידיים - תל אביב</a>');
		$('#twitter').html('<a href="http://twitter.com/j14telaviv" class="twitter-follow-button" data-show-count="false" target="_blank">follow @j14telaviv</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>');		
	}

	if (val == 'haifa') {
		$('#update_table_bg').removeClass('hide');
		$('#update_form_imid').removeClass('hide');
		$('#sign_imid').removeClass('hide');				
		//$('#sms').html('כדי להתעדכן ולהרשם בחינם, שלחו SMS<br>למספר <span id="big">0522-400104</span> עם המילה <span id="big">חיפה</span>'); 	
		$('#sms').html('אפשרות זו תהיה זמינה בקרוב'); 		
		$('#facebook').html('<a href="http://www.facebook.com/j14haifa" target="_blank">ב זה אוהל - עדכונים מיידיים - חיפה</a>');
		$('#twitter').html('<a href="http://twitter.com/j14haifa" class="twitter-follow-button" data-show-count="false" target="_blank">follow @j14haifa</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>');		
	}

	if (val == 'jerusalem') {
		$('#update_table_bg').removeClass('hide');
		$('#update_form_imid').removeClass('hide');
		$('#sign_imid').removeClass('hide');				
		//$('#sms').html('כדי להתעדכן ולהרשם בחינם, שלחו SMS<br>למספר <span id="big">0522-400104</span> עם המילה <span id="big">ירושלים</span>'); 	
		$('#sms').html('אפשרות זו תהיה זמינה בקרוב'); 		
		$('#facebook').html('<a href="http://www.facebook.com/j14jerusalem" target="_blank">ב זה אוהל - עדכונים מיידיים - ירושלים</a>');
		$('#twitter').html('<a href="http://twitter.com/j14jerusalem" class="twitter-follow-button" data-show-count="false" target="_blank">follow @j14jerusalem</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>');		
	}

}

function volunteer_area_switch(val) {
	if (val == 'אחר') {
			$('#otherArea').removeClass('hide');
	} else {
			$('#otherArea').addClass('hide');
		  };
}