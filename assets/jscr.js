
// Funktioner för validering:

function valReg()
{

    var a = validateRegName();
    var b = validateEmail();
    var c = validateRegPwd();
    var d = validateRegPwdLength()



    if(a == true && b == true && c == true && d == true)
    {
        
        return true;
    }   
    else
    {
        alert("Some of the fields were not filled in correctly.");
        return false;
    } 

}

function valLogin()
{

    var a = validateName();
    var b = validateLoginPwd();

    if(a == false && b == false)
    {
        alert("Some of the fields were not filled in correctly.");
        return false;
    }
    else if (a == false && b == true)
    {
        alert("Some of the fields were not filled in correctly.");
        return false;
    } 
    else if (a == true && b == false)
    {
        alert ("Some of the fields were not filled in correctly.");
        return false;
    }

}





function validateName()
{
    var username = document.getElementById("username");
    
// trim funktionen eliminerar alla eventuella mellanslag som förekommer före eller efter alla andra tecken i strängen. Detta för att
// inte användaren skall kunna skriva in endast mellanslag. 

    if (username.value.trim() == "")
     {
         return false;
     }
    else
    {
         return true;
    }       
        
}


function validateEmail()
{
    var email = document.getElementById("emailaddress");
   
   // test-funktionen kontrollerar om emailaddressen är giltig. Om så är fallet returnerar den true, annars false.
   // Mönstret som används i test-funktionen är: minst en bokstav, följt av @ följt av minst en bokstav, följt av en punkt, följt av minst en bokstav. (funktionen kollar om detta mönster finns i email.value)

    if (email.value.trim() == "" || /\w+@\w+\.\w+/.test(email.value) == false) 
     {
         
         return false;
     }
    else
    {
         return true;
    }       
        
}

function validateComment()
{

    
    var comment = document.getElementById("comment");

    if (comment.value.trim() == "")
     {
        alert("You did not enter any comment")
         return false;
     }
     else
     {
         return true;

     }
        
        
}

function validateRegName()
{
    var regName = document.getElementById("regName");

    if (regName.value.trim() == "")
     {
         return false;
     }
    else
    {
         return true;
    }       
        
}

function validateRegPwd()
{
    var regPwd = document.getElementById("regPassword");

    if (regPwd.value.trim() == "")
     {
        
         return false;
     }
    else
    {
         return true;
    }       
        
}


function validateRegPwdLength()
{

    var regPwd = document.getElementById("regPassword");

    if (regPwd.value.length <8)
     {
        
         return false;
     }
    else
    {
         return true;
    }       
        

}



function validateLoginPwd()
{
    var loginPwd = document.getElementById("loginPassword");

    if (loginPwd.value.trim() == "")
     {
        
         return false;
     }
    else
    {
         return true;
    }       
        
}


function loginFail()
{
    return alert("Invalid username or password");
}

function takenUsername()
{
    return alert("The username is already taken");
}

function takenEmail()
{
    return alert("That email-address is already registered");
}

function registrationSuccess()
{
    return alert("Your account has been created");
}