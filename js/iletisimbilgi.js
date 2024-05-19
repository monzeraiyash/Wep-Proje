function control(frm) {
      var kullaniciadi = frm.isim.value;
      var email = frm.mail.value;
      var msg = frm.mesaj.value;
      var ilkpos = email.indexOf("@");
      var sonpos = email.lastIndexOf(".");

      if (msg == null || msg == "" || msg.length < 10) {
          alert("Mesaj boş veya 15 karakterden az olamaz");
          return false;
      }
      if (kullaniciadi == null || kullaniciadi == "" || kullaniciadi.length < 4) {
          alert("Kullanıcı adı 5 karakterden az olamaz");
          return false;
      }
      if (ilkpos < 1 || sonpos < atpos + 2 || sonpos + 2 >= email.length) {
          alert("email adresi girin");
          return false;
      }

      return true;
}
function check() {
    var operation = document.querySelector('input[name="operation"]:checked');
    var gender = document.querySelector('input[name="gender"]:checked');
    var message = document.querySelector('textarea[name="message"]');
  
    if (operation) operation.checked = false;
    if (gender) gender.checked = false;
    if (message) message.value = '';
  }