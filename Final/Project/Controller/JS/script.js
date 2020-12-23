function signUpValidation(){
    text = document.getElementById("errorMsg");
    
    userName = document.getElementById("name");
    pw1 = document.getElementById("password1");
    pw2 = document.getElementById("password2");
    email = document.getElementById("email");
    phone = document.getElementById("phone");
	 
    
    if(userName.value == ""){
        text.innerHTML ="Enter your name";
        text.style.color= "red";
        return false;
    }
    else if(email.value == ""){
        text.innerHTML ="Enter an email";
        text.style.color= "red";
        return false;
    }
    else if(phone.value == ""){
        text.innerHTML ="Enter phone no";
        text.style.color= "red";
        return false;
    }  
    else if(pw1.value == ""){
        text.innerHTML ="Enter password";
        text.style.color= "red";
        
        return false;
    }
    else if(pw2.value == ""){
        text.innerHTML ="Enter password again";
        text.style.color= "red";
        
        return false;
    }
    
    else if(pw1.value != pw2.value){
        text.innerHTML ="Password does not match";
        alert('Password does not match');
        text.style.color= "red";        
        return false;
    } 
	
                
    
    else

        return true;
    
    
}


function loginValidation (){
    text = document.getElementById("errorMsg");
    uname = document.getElementById("name");
    pw = document.getElementById("password");

    if(uname.value == ""){
        text.innerHTML = "Enter name";
        text.style.color= "red";        
        return false;
    }

    else if(pw.value == ""){
        text.innerHTML = "Enter password";
        text.style.color= "red";        
        return false;
    }

    else
        return true;
}