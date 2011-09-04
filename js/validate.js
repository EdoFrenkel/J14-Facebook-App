// this file is for validation of the forms with js

function validateUpdateChimp(theForm) {
var reason = "";

  reason += validateUpdateEmail(theForm.EMAIL);

if (reason != "") {
    alert("יש בעיה במשלוח הטופס:\n" + reason);
    return false;
  }

  return true;
}

function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
} 

function validateUpdateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
    
    if (fld.value == "") {
        error = "נא להזין כתובת מייל.\n";
    } else if (!emailFilter.test(tfld)) {              //test email for illegal characters
        error = "כתובת המייל לא חוקית.\n";
    } else if (fld.value.match(illegalChars)) {
        error = "כתובת המייל כוללת אותיות אסורות.\n";
    }
    return error;
}

function validatevolunteer(theForm) {
var reason = "";

  reason += validateName(theForm.formName);
  reason += validateEmail(theForm.formEmail);
  reason += validatePhone(theForm.formPhone);

if (reason != "") {
    alert("יש בעיה במשלוח הטופס:\n" + reason);
    return false;
  }

  return true;
}


function validateName(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
 
    if (fld.value == "") {
        error = "נא להזין שם פרטי.\n";
    } else if ((fld.value.length < 1)) {
        error = "שם פרטי קצר מדי.\n";
    }
    return error;
}

function validatePhone(fld) {
    var error = "";
  
    if (fld.value.length == 0) {
        error = "נא למלא טלפון.\n"
    }
    return error;   
}

function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
} 

function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
    
    if (fld.value == "") {
        error = "נא להזין כתובת מייל.\n";
    } else if (!emailFilter.test(tfld)) {              //test email for illegal characters
        error = "כתובת המייל לא חוקית.\n";
    } else if (fld.value.match(illegalChars)) {
        error = "כתובת המייל כוללת אותיות אסורות.\n";
    }
    return error;
}