
document.getElementById("registerForm").addEventListener("submit", function(e){
    e.preventDefault();

    let data = new FormData(this);

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
   
        if(this.readyState == 4 && this.status == 200) {
            console.log(this.response);
           
            let res = JSON.parse(this.response);
            console.log(res);
            
            if(res.success == 1) {
             
                let myUser = {"id": "", "name": "", "firstName": "", "email": ""};
                
                myUser.id = res.data.idUser;
                myUser.name = res.data.name;
                myUser.firstName = res.data.firstName;
                myUser.email = res.data.email;
                
                let toJson = JSON.stringify(myUser);
                
                localStorage.setItem('myUser', toJson);
                
                alert(res.msg);
                
                document.location.href="http://localhost/Realisation_fil_rouge/Realisation_2_HTML_CSS/html/index.php";
            } else {
                
                alert(res.msg);
            }
        } else if(this.readyState == 4){
            alert("Une erreur est survenue...");
        }
    };

    xhr.open("POST", "http://localhost/Realisation_fil_rouge/Realisation_6_Back/MVC/controller/register.php", true);

    xhr.send(data);

    return false;
});


