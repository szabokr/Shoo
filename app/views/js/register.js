window.onload = function() {
	var send = document.getElementById("send");
	if (send)
		send.disabled = true;
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
		} else
			email.style.background = '#9f9';
	}

    var password = document.getElementById("password");
	if (password) {
		var checkPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm;
		if (!checkPattern.test(password.value)) {
			correct = false;
			password.style.background = '#f99';
			focus = password;
		} else
        password.style.background = '#9f9';
	}

	var firstName = document.getElementById("firstName");
	if (firstName) {
		if (firstName.value.length<5) {
			correct = false;
			firstName.style.background = '#f99';
			focus = firstName;
		} else
        firstName.style.background = '#9f9';
	}

    var lastName = document.getElementById("lastName");
	if (lastName) {
		if (lastName.value.length<5) {
			correct = false;
			lastName.style.background = '#f99';
			focus = lastName;
		} else
        lastName.style.background = '#9f9';
	}

	if (focus)
		focus.focus();

	var submit = document.getElementById("submit");
	if (submit)
    submit.disabled = !correct
	return correct;
}