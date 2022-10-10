"use strict";

function init()
{
    var SignupForm = document.getElementById("SignupForm");
    if (SignupForm != null){
      SignupForm.onsubmit = validateSignup;
    }

    var EditAccForm = document.getElementById("EditAccForm");
    if (EditAccForm != null){
      EditAccForm.onsubmit = validateEditAccount;
    }
    
}

//validating full name
function validateName()
{
  var result = true;
  var name = document.getElementById("name");

  if(name.value == "")
  {
    result = false;
    document.getElementById("nameErr").innerHTML = "Name required";
    document.getElementById("nameErr").style.display = "block";
  }

  else if(!name.value.match(/^[a-zA-Z ]+$/))
  {
    result = false;
    document.getElementById("nameErr").innerHTML = "Only alphabetical characters and spaces allowed";
    document.getElementById("nameErr").style.display = "block";
  }
  else if(name.value.length > 50)
  {
    result = false;
    document.getElementById("nameErr").innerHTML = "Maximum length allowed 50 characters";
    document.getElementById("nameErr").style.display = "block";
  }
  else
  {
    document.getElementById("nameErr").style.display = "none";
  }
  return result;
}

//validate email address
function validateEmail()
{
    var result = true;
    var email = document.getElementById("email").value;
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if(email == "")
  {
    result = false;
    document.getElementById("emailErr").innerHTML = "Email address required";
    document.getElementById("emailErr").style.display = "block";
  }
  else if(!email.match(mailformat))
  {
    result = false;
    document.getElementById("emailErr").innerHTML = "Invalid input";
    document.getElementById("emailErr").style.display = "block";
  }
  else
  {
    document.getElementById("emailErr").style.display = "none";
  }
  return result;
}

//validating passowrd
function validatePwd1()
{
    var result = true;
    var pwd1 = document.getElementById("password1").value;
    var pwdformat = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    //change format

    if(pwd1 == "")
  {
    result = false;
    document.getElementById("pwd1Err").innerHTML = "Password required";
    document.getElementById("pwd1Err").style.display = "block";
  }
  else if(!pwd1.match(pwdformat))
  {
    result = false;
    document.getElementById("pwd1Err").innerHTML = "Password must contain minimum eight characters, at least one letter, one number and one special character";
    document.getElementById("pwd1Err").style.display = "block";
  }
  else
  {
    document.getElementById("pwd1Err").style.display = "none";
  }
  return result;
}

//validating re-entered password
function validatePwd2()
{
    var result = true;
    var pwd1 = document.getElementById("password1").value;
    var pwd2 = document.getElementById("password2").value;

    if (pwd2 == "")
    {
      result = false;
      document.getElementById("pwd2Err").innerHTML = "Re-enter your password";
      document.getElementById("pwd2Err").style.display = "block";  
    }
    else if (!(pwd1 === pwd2))
    {
      result = false;
      document.getElementById("pwd2Err").innerHTML = "Password mismatch!";
      document.getElementById("pwd2Err").style.display = "block";
    }
    else
    {
        document.getElementById("pwd2Err").style.display = "none";
    }
    return result;
}

//validating company name
function validateCmpName()
{
    var result = true;
    var cmpname = document.getElementById("cmpName");

  if(cmpname.value == "")
  {
    result = false;
    document.getElementById("cmpNameErr").innerHTML = "Company Name required";
    document.getElementById("cmpNameErr").style.display = "block";
  }

  else if(!cmpname.value.match(/^[a-zA-Z .,]+$/))
  {
    result = false;
    document.getElementById("cmpNameErr").innerHTML = "No special characters allowed";
    document.getElementById("cmpNameErr").style.display = "block";
  }
  else if(cmpname.value.length > 50)
  {
    result = false;
    document.getElementById("cmpNameErr").innerHTML = "Maximum length allowed 50 characters";
    document.getElementById("cmpNameErr").style.display = "block";
  }
  else
  {
    document.getElementById("cmpNameErr").style.display = "none";
  }
  return result;
}

//validating phonenumber
function validatePhone()
{
    var result = true;
    var phone = document.getElementById("phone");

  if(!phone.value == "" && !phone.value.match(/^[0-9]/))
  {
    result = false;
    document.getElementById("phoneErr").innerHTML = "Only numeric characters allowed";
    document.getElementById("phoneErr").style.display = "block";
  }
  else if(!email.value == "" && !(phone.value.length == 10))
  {
    result = false;
    document.getElementById("phoneErr").innerHTML = "Mobile number should be 10 digits";
    document.getElementById("phoneErr").style.display = "block";
  }
  else
  {
    document.getElementById("phoneErr").style.display = "none";
  }
  return result;
}

//calling the validating function for Signup form
function validateSignup()
{
  var result = true;
  if(!(validateName()))
  {
    result = false;
  }
  if(!(validateEmail()))
  {
    result = false;
  }
  if(!(validatePwd1()))
  {
    result = false;
  }
  if(!(validatePwd2()))
  {
    result = false;
  }
  if(!(validateCmpName()))
  {
    result = false;
  }

  return result;
}

//calling the validating functions for the EditAccount form
function validateEditAccount()
{
  var result = true;
  if(!(validateName()))
  {
    result = false;
  }
  if(!(validateEmail()))
  {
    result = false;
  }
  if(!(validatePhone()))
  {
    result = false;
  }
  if(!(validatePwd1()))
  {
    result = false;
  }
  if(!(validatePwd2()))
  {
    result = false;
  }
  if(!(validateCmpName()))
  {
    result = false;
  }

  return result;
}


window.onload = init;