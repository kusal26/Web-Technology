
  function Validation() {
    var name = document.getElementById("Name");
    var email = document.getElementById("Email");
    var password = document.getElementById("Password");

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/;

    /^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/

    const isEmailValid = emailPattern.test(email.value);
    if (!isEmailValid) {
        alert("email is invalid");
        return false;
    }
    const namePattern =/^[a-zA-Z\s]+$/;

    const isNameValid = namePattern.test(name.value);
    if(!isNameValid)
    {
        alert("name is invalid");
        return false;
    }
const passwordPattern = //

    console.log("loggg");
    return true;
  }


