function validateName(name) {
    if (name == "") {
        return false;
    }
    else {
        return true;
    }
}

function validateEmail(email) {
    if (email == "") {
        return false;
    }
    else {
        return true;
    }
}

function validateAge(age) {
    if ((age >= 0 == false)) {
        return false;
    }
    else {
        return true;
    }
}

function validateQuestions(question) {
    if (question == "") {
        return false;
    }
    else {
        return true;
    }
}

function validateSuggestions(suggestion) {
    if (suggestion == "") {
        return false;
    }
    else {
        return true;
    }
}

function validateReport(report) {
    if (report == "") {
        return false;
    }
    else {
        return true;
    }
}

//testing validateName
console.log("testing empty field");
if (validateName("") == false) {
    console.log("invalid name field");
}
else {
    console.log("valid name field");
}
console.log("testing 'Henry'");
if (validateName("Henry") == false) {
    console.log("invalid name field");
}
else {
    console.log("valid name field");
}

//testing validateEmail
console.log("testing empty field");
if (validateEmail("") == false) {
    console.log("invalid email field");
}
else {
    console.log("valid email field");
}
console.log("testing 'email123@email.com'");
if (validateEmail("email123@email.com") == false) {
    console.log("invalid email field");
}
else {
    console.log("valid email field");
}
//testing validateAge
console.log("testing 'apple'");
if (validateAge("apple") == false) {
    console.log("invalid age field");
}
else {
    console.log("valid age field");
}
console.log("testing 20");
if (validateAge(20) == false) {
    console.log("invalid age field");
}
else {
    console.log("valid age field");
}

//testing validateQuestions
console.log("testing empty field");
if (validateQuestions("") == false) {
    console.log("invalid questions field");
}
else {
    console.log("valid questions field");
}
console.log("testing 'is this a valid question?'");
if (validateQuestions("testing 'is this a valid question?") == false) {
    console.log("invalid questions field");
}
else {
    console.log("valid questions field");
}
//testing validateSuggestions
console.log("testing empty field");
if (validateSuggestions("") == false) {
    console.log("invalid suggestions field");
}
else {
    console.log("valid suggestions field");
}
console.log("testing 'heres a suggestion'");
if (validateSuggestions("heres a suggestion") == false) {
    console.log("invalid suggestions field");
}
else {
    console.log("valid suggestions field");
}
//testing validateReport
console.log("testing empty field");
if (validateReport("") == false) {
    console.log("invalid report field");
}
else {
    console.log("valid report field");
}
console.log("testing 'here is a report'");
if (validateReport("here is a report") == false) {
    console.log("invalid report field");
}
else {
    console.log("valid report field");
}
