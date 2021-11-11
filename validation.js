function validateName() {
    alert("Name is a required field");
    document.bb_contact.customername.focus();
}

function validateEmail() {
    alert("Email is a required field");
    document.bb_contact.email.focus();
}

function validateAge() {
    alert("Please enter a valid age");
    document.bb_contact.age.focus();
}

function validateQuestions() {
    alert("Please provide question in text area");
    document.bb_contact.questionsarea.focus();
}

function validateSuggestions() {
    alert("Please provide suggestion in text area");
    document.bb_contact.suggestionsarea.focus();
}

function validateReport() {
    alert("Please provide report in text area");
    document.bb_contact.reportarea.focus();
}

function validateForm() {
    if (document.bb_contact.customername.value == "") {
        validateName();
        return false;
    }
    if (document.bb_contact.email.value == "") {
        validateEmail();
        return false;
    }
    if ((document.bb_contact.age.value >= 0) == false) {
        validateAge();
        return false;
    }
    if (document.bb_contact.questions.checked == true && document.bb_contact.questionsarea.value == "") {
        validateQuestions();
        return false;
    }
    if (document.bb_contact.suggestions.checked == true && document.bb_contact.suggestionsarea.value == "") {
        validateSuggestions();
        return false;
    }
    if (document.bb_contact.report.checked == true && document.bb_contact.reportarea.value == "") {
        validateReport();
        return false;
    }
}
