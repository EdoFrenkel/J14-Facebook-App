<!-- here is the two forms on update tab -->

<form action="" method="post" name="" target="_blank" onsubmit="return validateUpdateChimp(this);">
	<input type="text" value="" name="EMAIL" id="update_form_news" placeholder="email address">
    
	<input type="submit" value="" name="subscribe" id="sign_news" />
</form>

<form action="" method="post" name="" id="" target="">
<div id="area_imid">
	<select name="area_imid" class="select" title="בחר איזור" style="text-align:right; direction:rtl" onchange="area_switch(this.value);">
    	<option disabled="disabled"></option>
    	<option value="center">מרכז (לא כולל ת"א)</option>
    	<option value="south">דרום</option>
    	<option value="north">צפון (לא כולל חיפה)</option>
    	<option value="telaviv">תל אביב</option>
    	<option value="jerusalem">ירושלים</option>
    	<option value="haifa">חיפה</option>
    </select>
</div>
	<input type="text" value="" name="email" id="update_form_imid" class="hide" placeholder="אפשרות זו תהיה זמינה בקרוב">
	<!--input type="submit" value="" name="submit" id="sign_imid" class="hide" /-->
</form>

<div id="update_table_bg" class="hide"></div>
    <div id="sms"></div>
    <div id="facebook"></div>
    <div id="twitter"></div>


