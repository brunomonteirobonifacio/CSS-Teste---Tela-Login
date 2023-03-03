function nameCheck() {
    const myForm = document.getElementById("form");
    let name = document.getElementById("name");
    let errorUser = document.getElementById("erroruser");
    let data = {
        "username": name.value
    }

    if (name.value == ''){
        errorUser.innerText = '';
        name.style.borderStyle = 'hidden';
    } else {
        //console.log(JSON.stringify(data))
        fetch("php_get_username.php", {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json; charset=UTF-8"
            }
        })
        .then((response) => {
            return response.json()
        })
        .then((data) => {
            console.log(data)
        });
        //if (dbName){
        //    errorUser.innerText = "Username already taken";
        //    name.style.border = 'solid red';
        //    return false;
        //} else {
        //    name.style.border = 'solid green';
        //    errorUser.innerText = '';
        //    return true;
        //}
    }
}

function passwordCheck() {
    let password = document.getElementById("pass");
    let confpass = document.getElementById("confpass");
    let errorpass = document.getElementById("errorpass");
    if ((password.value == '') && (confpass.value == '')) {
        errorpass.innerText = '';
        confpass.style.borderStyle = 'hidden';
        password.style.borderStyle = 'hidden';
    } else {
        if (password.value !== confpass.value) {
            errorpass.innerText = "Both passwords must match";
            password.style.border = 'solid red';
            confpass.style.border = 'solid red';
            return false;
        } else {
            errorpass.innerText = "";
            password.style.border = 'solid green';
            confpass.style.border = 'solid green';
            return true;
        }
    }
}

function submitCheck() {
    const myForm = document.getElementById("form");
    if ((passwordCheck()) && (nameCheck())){
        const request = new XMLHttpRequest();
        request.open("post","confirm_signup.php");
        request.send(new FormData(myForm));
        window.location = "index.php";
    }
}