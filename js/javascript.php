<?php
/**
* This file is for the Dynamic Jquery
*/
	if(isset($_GET['tab']) )
{
	$tab = $_GET['tab'];
} else {
	$tab = 1;
}
    echo "<script type='text/javascript'>\n";
	echo "$(document).ready(function(){\n";
	echo "$('body').hide();\n";
	
	if ($tab == 1) {
    echo "$('#content_update').show();\n";
	echo "$('#update').html('<img src=\"images/update_on.jpg\" />');\n";	
    echo "$('#content_volunteer').hide();\n";
    echo "$('#content_donate').hide();	\n";
    echo "$('#credit').addClass('hide');	\n";	
    echo "$('#give').addClass('hide');	\n";		
	}
	
	if ($tab == 2) {
    echo "$('#content_update').hide();\n";
    echo "$('#content_volunteer').show();\n";
	echo "$('#volunteer').html('<img src=\"images/volunteer_on.jpg\" />');\n";		
    echo "$('#content_donate').hide();	\n";
    echo "$('#credit').addClass('hide');	\n";	
    echo "$('#give').addClass('hide');	\n";			
	}

	if ($tab == 3) {
    echo "$('#content_update').hide();\n";
    echo "$('#content_volunteer').hide();\n";
    echo "$('#content_donate').show();	\n";
	echo "$('#donate').html('<img src=\"images/donate_on.jpg\" />');\n";			
    echo "$('#credit').removeClass('hide');	\n";	
    echo "$('#give').removeClass('hide');	\n";	
	}
	
	echo "$('body').fadeIn(3000);

// Menu
$('#update').click(function() {
								$('#update').html('<img src=\"images/update_on.jpg\" />');
								$('#volunteer').html('');								
								$('#donate').html('');								
								
								$('#welcome').hide();
								$('#content_volunteer').hide();
								$('#content_donate').hide();
								$('#content_update').removeClass('hide');
								$('#content_update').fadeIn(500);
								});

$('#volunteer').click(function() {
								$('#volunteer').html('<img src=\"images/volunteer_on.jpg\" />');	
								$('#update').html('');								
								$('#donate').html('');								
								
								$('#welcome').hide();
								$('#content_update').hide();
								$('#content_donate').hide();
								$('#content_volunteer').removeClass('hide');
								$('#content_volunteer').fadeIn(500);
								});

$('#donate').click(function() {
								$('#donate').html('<img src=\"images/donate_on.jpg\" />');	
								$('#update').html('');								
								$('#volunteer').html('');								
								
								$('#welcome').hide();
								$('#content_update').hide();
								$('#content_volunteer').hide();
								$('#content_donate').removeClass('hide');
								$('#credit').removeClass('hide');
								$('#give').removeClass('hide');								
								$('#content_donate').fadeIn(500);							
								});

// Send

$('#sendvolunteer').click(function() {
								 if (validatevolunteer(document.formvolunteer)) {
									//Send Ajax of the form
									$('#loader').html(\"<center><img src='images/ajax-loader.gif' width='48' height='48' /></center>\");
									
									var formName = document.formvolunteer.elements['formName'].value;
									var formEmail = document.formvolunteer.elements['formEmail'].value;
									var formPhone = document.formvolunteer.elements['formPhone'].value;
									var area = document.formvolunteer.elements['area'].value;
									var otherArea = document.formvolunteer.elements['otherArea'].value;
									
									if (document.formvolunteer.helpEverything.checked) {
										var helpEverything = 'כן';
									} else {
										var helpEverything = 'לא';	
									}

									if (document.formvolunteer.helpDrive.checked) {
										var helpDrive = 'כן';
									} else {
										var helpDrive = 'לא';	
									}

									if (document.formvolunteer.helpFood.checked) {
										var helpFood = 'כן';
									} else {
										var helpFood = 'לא';	
									}

									if (document.formvolunteer.helpEquipment.checked) {
										var helpEquipment = 'כן';
									} else {
										var helpEquipment = 'לא';	
									}

									if (document.formvolunteer.helpMaintenance.checked) {
										var helpMaintenance = 'כן';
									} else {
										var helpMaintenance = 'לא';	
									}

									if (document.formvolunteer.helpConsultation.checked) {
										var helpConsultation = 'כן';
									} else {
										var helpConsultation = 'לא';	
									}

									var helpDetails = document.formvolunteer.elements['helpDetails'].value;
									
									
									$.ajax({
									   type: 'POST',
									   url: '',
									   data: 'formName=' + formName + '&formEmail=' + formEmail + '&formPhone=' + formPhone + '&area=' + area + '&otherArea=' + otherArea + '&helpEverything=' + helpEverything + '&helpDrive=' + helpDrive + '&helpFood=' + helpFood + '&helpEquipment=' + helpEquipment + '&helpMaintenance=' + helpMaintenance + '&helpConsultation=' + helpConsultation + '&helpDetails=' + helpDetails,
									   success: function(msg){
										 $('#content_volunteer').html('<img src=\'images/volunteer_sucsses.jpg\' width=\'520\' height=\'643\' /><a href=\'http://www.facebook.com/groups/124314047664427/\' target=\'_blank\' id=\'sucsses_facebook\' /><a href=\'http://www.facebook.com/groups/106560676112672/\' target=\'_blank\' id=\'sucsses_hackers\' /><a href=\'" . URL . "?tab=1\' target=\'_self\' id=\'sucsses_update\' /><a href=\'" . URL . "?tab=3\' target=\'_self\' id=\'sucsses_donate\' /><a href=\'" . URL ."?tab=2\' target=\'_self\' id=\'sucsses_back\' />');
									   }
									 });
								 }
								 });
		if (!$.browser.opera) {
    
			// select element styling
			$('select.select').each(function(){
				var title = $(this).attr('title');
				if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
				$(this)
					.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
					.after('<span class=\"select\">' + title + '</span>')
					.change(function(){
						val = $('option:selected',this).text();
						$(this).next().text(val);
						})
			});

		};

});\n";
    echo "</script>\n";
?>