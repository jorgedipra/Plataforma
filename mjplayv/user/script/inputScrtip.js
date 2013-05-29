$(document).ready(function () {
    var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
        intputElements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                if (e.target.name == "Apodo") {
                    e.target.setCustomValidity("Apodo Required");
                }
               else if(e.target.name == "Password") {
                   e.target.setCustomValidity("Password Required");
                }
                else {
                    e.target.setCustomValidity("Space Required");
                }
            }
        };
    }
})