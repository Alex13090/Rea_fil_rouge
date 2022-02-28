
let myUser = JSON.parse(localStorage.getItem('myUser'));

let btnProfil = document.getElementById("btnProfil");
let btnSignIn = document.getElementById("btnSignIn");

if (myUser != null) {
btnProfil.style.display = "none";
btnSignIn.style.display = "block";

} else {
btnProfil.style.display = "block";
btnSignIn.style.display = "none";
}