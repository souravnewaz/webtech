
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


function flightValidation(){
    text = document.getElementById("errorMsg");
    from = document.getElementById("from");
    to = document.getElementById("to");
    departure = document.getElementById("departure");
        if(from.value == ""){
        text.innerHTML = "From where?";
        text.style.color= "red";        
        return false;

    }

    if( to.value == ""){
        text.innerHTML = "To where?";
        text.style.color= "red";        
        return false;
    }
    if( departure.value == ""){
        text.innerHTML = "Time?";
        text.style.color= "red";        
        return false;
    }

    else   
        return true;
}



function bookingValidation(){
    text = document.getElementById("errorMsg");
    id = document.getElementById("id");
    
    product = document.getElementById("product");
    weight = document.getElementById("weight");
    

    if( id.value == ""){
        text.innerHTML = "Passenger id please";
        text.style.color= "red";        
        return false;
    }
    

    if( product.value == ""){
        text.innerHTML = "Product name required";
        text.style.color= "red";        
        return false;
    }
    if( weight.value == ""){
        text.innerHTML = "Product weight required";
        text.style.color= "red";        
        return false;
    }

    else{   
        
        
        return true;
    }
}



