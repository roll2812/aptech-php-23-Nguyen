var dienThoai = {
    iphone: {
        gia: 100,
    },
    bphone: {
        gia: 80,
    }
};

var keys = Object.keys(dienThoai);

function nhapGiaTri() {
document.getElementById('ten1').innerHTML = keys[0];
document.getElementById('gia1').innerHTML = dienThoai.iphone.gia;
document.getElementById('ten2').innerHTML = keys[1];
document.getElementById('gia2').innerHTML = dienThoai.bphone.gia;
};