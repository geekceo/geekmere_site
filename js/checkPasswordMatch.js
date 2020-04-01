function checkPass() {
if (document.getElementById('newPassword').value != document.getElementById('ConfirmPassword').value) {
    document.getElementById('error').innerHTML = "Пароли не совпадают!";
    return false;
  } else return true;
}
