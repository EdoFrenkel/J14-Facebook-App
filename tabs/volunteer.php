<!-- here is the form on contribue tab -->

    	<form name="formvolunteer">
        
            	 <input type="text" name="formName" maxlength="50" lang="he" dir="rtl" id="formName" />
            	<input type="text" name="formEmail" maxlength="50" lang="en" dir="ltr" id="formEmail" />
            	<input type="text" name="formPhone" maxlength="20" lang="en" dir="ltr" id="formPhone" />
<div id="area">
                <select name="area" class="select" style="text-align:right; direction:rtl;"  onchange="volunteer_area_switch(this.value);">
                    <option value="כל הארץ" selected="selected">כל הארץ</option>
                    <option value="ירושלים">ירושלים</option>
                    <option value="תל אביב-יפו">תל אביב-יפו</option>
                    <option value="חיפה">חיפה</option>
                    <option value="באר-שבע">באר-שבע</option>
                    <option value="0" disabled="disabled">---------------- </option>
                    <option value="אילת">אילת</option>
                    <option value="אשדוד">אשדוד</option>
                    <option value="אשקלון">אשקלון</option>
                    <option value="בית שמש">בית שמש</option>
                    <option value="בת-ים / חולון">בת ים</option>
                    <option value="הרצליה / רמת השרון">הרצליה</option>
                    <option value="בת-ים / חולון">חולון</option>
                    <option value="יהוד / נווה מונוסון">יהוד / נווה מונוסון</option>
                    <option value="רעננה / כפר סבא">כפר סבא</option>
                    <option value="מודיעין">מודיעין</option>
                    <option value="נס ציונה">נס ציונה</option>
                    <option value="עפולה">עפולה</option>
                    <option value="קריית שמונה">קריית שמונה</option>
                    <option value="רחובות">רחובות</option>
                    <option value="הרצליה / רמת השרון">רמת השרון</option>
                    <option value="רעננה / כפר סבא">רעננה</option>
                    <option value="0" disabled="disabled">---------------- </option>
                    <option value="אחר">או הקלידו יישוב אחר</option>
                </select>
</div>                
            	<input type="text" id="otherArea" name="otherArea" maxlength="20" lang="he" dir="rtl" class="hide" placeholder="מלאו כאן..." />
            
            	<input type="checkbox" id="helpEverything" name="helpEverything" value="helpEverything" checked="checked" />
            	<input type="checkbox" id="helpDrive" name="helpDrive" value="helpDrive" />
            	<input type="checkbox" id="helpFood" name="helpFood" value="helpFood" />
            	<input type="checkbox" id="helpEquipment" name="helpEquipment" value="helpEquipment" />
            	<input type="checkbox" id="helpMaintenance" name="helpMaintenance" value="helpMaintenance" />
            	<input type="checkbox" id="helpConsultation" name="helpConsultation" value="helpConsultation" />
            
            	<textarea name="helpDetails" id="helpDetails" cols="30" rows="4" dir="rtl"></textarea>
            
        </form>

    
    <div id="sendvolunteer"></div>
    <div id="loader"></div>