var on = true;
function turn() {
    if (on == true) {
        document.getElementById('anh').src = "on.gif";
         on = false;
    }
    else if (on == false) {
        document.getElementById('anh').src="off.gif";
         on = true;
    }
}