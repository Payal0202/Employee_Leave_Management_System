function validation(){
    if(document.Register.cpassword.value !== document.Register.password.value){
        document.getElementById("result").innerHTML = "Password doesn't match";
        return false;
    }
    else 
    return true;

}