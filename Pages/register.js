 function validate (){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var repeat = document.getElementById("repeat").value;

    function validate_username(username) {
        if ((username.length < 6) || (username.length > 10)) {
            return false;
        }
        if (!username.match(/^[0-9a-zA-Z]+$/)) {
            return false;
        }
        if (!isNaN(parseInt(username.charAt(0)))) {
            return false;
        }
        return true;
    }
    function validate_passwords(password, repeat) {
        if (password !== repeat) {
            return false;
        }
        if ((password.length < 6) || (password.length > 10)) {
            return false;
        }
        if (!password.match(/^[0-9a-zA-Z]+$/)) {
            return false;
        }
        var i = 0;
        var hasNum = false;
        var hasLower = false;
        var hasUpper = false;
        while(i < password.length) {
            var character = password.charAt(i);
            if (!isNaN(parseInt(character))) {
                hasNum = true;
            }
            if ((isNaN(parseInt(character))) && (character === character.toLowerCase())) {
                hasLower = true;
            }
            if ((isNaN(parseInt(character))) && (character === character.toUpperCase())) {
                hasUpper = true;
            }
            i++;
        }
        if (!hasNum || !hasLower || !hasUpper) {
            return false;
        } 
        return true; 
    }
    var checkUsername = validate_username(username);
    var checkPasswords = validate_passwords(password, repeat);
    if (!checkUsername || !checkPasswords) {
        alert("Invalid username or password");
    } else {
        alert("User Created");
        window.location.href = "login.html";
    }
}