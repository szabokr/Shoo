window.onload = function() {
    var send = document.getElementById("send");
    if (send) {
        send.addEventListener("click", check);
    }
};

function check() {
    var correct = true;
    var focus = null;

    var email = document.getElementById("email");
    if (email) {
        var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (!checkPattern.test(email.value)) {
            correct = false;
            email.style.background = '#f99';
            focus = email;
        } else {
            email.style.background = '#9f9';
        }
    }

	var name = document.getElementById("lastName");
    if (name) {
        if (name.value.length < 5) {
            correct = false;
            name.style.background = '#f99';
            focus = name;
        } else {
            name.style.background = '#9f9';
        }
    }

    var name = document.getElementById("firstName");
    if (name) {
        if (name.value.length < 5) {
            correct = false;
            name.style.background = '#f99';
            focus = name;
        } else {
            name.style.background = '#9f9';
        }
    }



    if (focus) {
        focus.focus();
    }

    var send = document.getElementById("send");
    return correct;
}