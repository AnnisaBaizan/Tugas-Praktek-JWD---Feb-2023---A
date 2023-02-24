// function randomNumber(min, max) {
//     return Math.random() * (max - min) + min;
// }
// function randomCheck() {
//     var ipk = 0.0;
//     var nama = (document.pendaftaran.nama.value);
//     if (nama != "") {
//         //    var ipk = document.getElementById("ipk");
//         //    ipk.innerHTML = randomNumber(1, 4);
//         document.getElementById("ipk").innerHTML = randomNumber(1, 4);
//     }

//     if (ipk > 3) {
//         document.getElementById("beasiswa").disabled = false;
//         document.getElementById("beasiswa").focus();
//         document.getElementById("simpan").disabled = false;
//     } else {
//         document.getElementById("simpan").disabled = true;
//     }
// }


function randomFloat(min, max, dec) {
    const str = (Math.random() * (max - min) + min).toFixed(dec);
    return parseFloat(str);
}
function randomCheck() {
    var nilai = randomFloat(1, 4, 2)
    document.getElementById("ipk").value = nilai;
    if (nilai < 3) {
        document.getElementById("beasiswa").disabled = true;
        document.getElementById("berkas").disabled = true;
        document.getElementById("simpan").disabled = true;
    }
    else {
        document.getElementById("beasiswa").disabled = false;
        document.getElementById("berkas").disabled = false;
        document.getElementById("simpan").disabled = false;
    }
}