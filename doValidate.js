function validation(){
    if(document.myForm.name.value==""){
        alert("Please provide your Nameqqqq");
        return false;
    }
    if(document.myForm.pno.value==""){
        alert("Please provide your Phone Number");
        return false;
    }
    if(document.myForm.email.value==""){
        alert("Please provide your email");
        return false;
    }
    if(document.myForm.message.value==""){
        alert("Please provide your Message");
        return false;
    }
    return(true);
}