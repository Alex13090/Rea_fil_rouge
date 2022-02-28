
let userOk = JSON.parse(localStorage.getItem('myUser'));

let btnProfil = document.getElementById("btnProfil");
let btnSignIn = document.getElementById("btnSignIn");

if (userOk == null) {
btnProfil.style.display = "none";
btnSignIn.style.display = "block";

} else {
btnProfil.style.display = "block";
btnSignIn.style.display = "none";
}