// Registration Form Credentials
const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const age = document.getElementById('age');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');

// Adding event
form.addEventListener('submit', (event) => {
    event.preventDefault();
    validate();
})

// Displaying Successful Message
const sendData = (nameVal, sRate, count) => {
    if(sRate === count) {
        swal("Welcome! " + nameVal, "Your Registration Successful", "success");
    }
}

// For final data validation
const successMsg = (nameVal) => {
    let formCon = document.getElementsByClassName('form-control');
    var count = formCon.length - 1;
    for(var i = 0; i < formCon.length; i++) {
        if(formCon[i].className === 'form-control success') {
            var sRate = 0 + i;
            sendData(nameVal, sRate, count);
        } else {
            return false;
        }
    }
}

// Validation check for email
    const isEmail = (emailVal) => {
        var atSymbol = emailVal.indexOf("@");
        if(atSymbol < 1)
            return false;
        var dot = emailVal.lastIndexOf('.');
        if(dot <= atSymbol + 2)
            return false;
        if(dot === emailVal.length - 1)
            return false;
        return true;
    }

// Defining the validate function
const validate = () => {
    const nameVal = username.value.trim();
    const emailVal = email.value.trim();
    const phoneVal = phone.value.trim();
    const ageVal = age.value.trim();
    const passwordVal = password.value.trim();
    const cpasswordVal = cpassword.value.trim();

    // Validating name
    if(nameVal === "") {
        setErrorMsg(username, 'Name cannot be blank');
    } else if(nameVal.length <= 2) {
        setErrorMsg(username, 'Must have minimum 3 characters');
    }else {
        setSuccessMsg(username);
    }

    // Validating email
    if(emailVal === "") {
        setErrorMsg(email, 'Email cannot be blank');
    } else if(!isEmail(emailVal)) {
        setErrorMsg(email, 'Not a valid Email');
    }else {
        setSuccessMsg(email);
    }

    // Validating phone
    if(phoneVal === "") {
        setErrorMsg(phone, 'Phone number cannot be blank');
    } else if(phoneVal.length != 10) {
        setErrorMsg(phone, 'Not a valid phone number');
    }else {
        setSuccessMsg(phone);
    }

    // Validating age
    if(ageVal === "") {
        setErrorMsg(age, 'Age cannot be blank');
    } else if(ageVal <= 0) {
        setErrorMsg(age, 'Not a valid age');
    }else {
        setSuccessMsg(age);
    }

    // Validating password
    if(passwordVal === "") {
        setErrorMsg(password, 'Password cannot be blank');
    } else if(passwordVal.length <= 6) {
        setErrorMsg(password, 'Must have minimum 8 Characters');
    }else {
        setSuccessMsg(password);
    }

    // Validating cpassword
    if(cpasswordVal === "") {
        setErrorMsg(cpassword, 'Confirm password cannot be blank');
    } else if(passwordVal != cpasswordVal) {
        setErrorMsg(cpassword, 'Password and Confirm Password does not Match');
    }else {
        setSuccessMsg(cpassword);
    }
    successMsg(nameVal);
}

// Function to declare Error Message
function setErrorMsg(input, errormsgs) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = "form-control error";
    small.innerText = errormsgs;
}

// Function to declare Success Message
function setSuccessMsg(input) {
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}