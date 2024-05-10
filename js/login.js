function Giris() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var ture = false;
    var alert1 = document.getElementById("text");
    if (email == "B231210571@sakarya.edu.tr" & password == "b231210571") {
        
        ture = true;
        document.getElementById("center-1").style.display="none";
        alert("Hoşgeldin B231210571 ")
        document.getElementById("form").submit;
    } else {
        alert1.innerHTML = "Başarsız"

    }
    if (ture == true) {
        location.href = 'index.html';
    }



}