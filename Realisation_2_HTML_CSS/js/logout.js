

let btnLogOut = document.getElementById("btnLogOut");

btnLogOut.addEventListener("submit", function(event){
    event.preventDefault();
    if(localStorage){
        localStorage.clear();
    }
    location.href = "http://localhost/Realisation_fil_rouge/Realisation_2_HTML_CSS/html/index.php";
});

// function logOut(){
//     if(localStorage){
//         localStorage.clear();
//     }
//     location.href = "http://localhost/Realisation_fil_rouge/Realisation_2_HTML_CSS/html/index.php";
// }