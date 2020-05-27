var a = true;
function collapse() {
    if(a ==true) {
        document.getElementById('navbarHeader').class = "bg-dark collapse";
        a == false;
    } else if(a == false) {
        document.getElementById('navbarHeader').class = "bg-dark collapse show";
        a == true;
    }
}