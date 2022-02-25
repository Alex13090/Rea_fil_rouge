
let myUser = JSON.parse(localStorage.getItem('myUser'));
let btnLogOut = document.getElementById("btnLogOut");

btnLogOut.addEventListener("submit", function(event){
    event.preventDefault();
    localStorage.clear();
    location.reload();
});