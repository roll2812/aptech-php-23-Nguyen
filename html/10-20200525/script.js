var on = false;
function turn() {
    if (on == false) {
        document.getElementById('anh').src = "on.gif";
         on = true;
    }
    else if (on == true) {
        document.getElementById('anh').src="off.gif";
         on = false;
    }
}