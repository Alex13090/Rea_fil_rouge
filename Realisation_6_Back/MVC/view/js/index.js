
let myUser = JSON.parse(localStorage.getItem('myUser'));

let btnLogOut = document.getElementById("btnLogOut");
let btnSignIn = document.getElementById("btnSignIn");
let firstName = document.getElementById("welcomeName");

if (myUser == null) {
    btnLogOut.style.display = "none";
    btnSignIn.style.display = "block";

} else {
    btnLogOut.style.display = "block";
    btnSignIn.style.display = "none";
   
    firstName.textContent = myUser.firstName;
}


btnLogOut.addEventListener("submit", function(event){
    event.preventDefault();
    localStorage.clear();
    location.reload();
});