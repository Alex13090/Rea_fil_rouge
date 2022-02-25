
document.getElementById('loginForm').addEventListener("submit", function(event){
    event.preventDefault();
    
    let data = new FormData(this); 
    
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        
        if(this.readyState == 4 && this.status == 200){
            console.log(this.response);
            
            let res = JSON.parse(this.response);
            
            if(res.success){

                let myUser = {"id": "", "name": "", "firstName": "", "email": ""};
                
                myUser.id = res.data.idUser;
                myUser.name = res.data.name;
                myUser.firstName = res.data.firstName;
                myUser.email = res.data.email;
               
                let toJson = JSON.stringify(myUser);
                
                localStorage.setItem('myUser', toJson);
                
                alert(res.msg);
                
                document.location.href = "http://localhost/Fil_rouge/Realisation_2_HTML_&_CSS/html/index.php";
            } else {
                alert(res.msg);
            }
        } // eche requete
        else if(this.readyState == 4){
            alert("Une erreur est survenue ...!");
        }
    };
    xhr.open("POST", "http://localhost/Fil_rouge/Realisation_6_Back_end/MVC/controllers/login.php", true);

    xhr.send(data);
   
    return false;
});