function validateData(){
    //main input fields
    var firstname = document.getElementById("firstnameid");
    var lastname = document.getElementById("lastnameid");
    var age = document.getElementById("ageid");
    var salary = document.getElementById("salaryid");
    var address = document.getElementById("addressid");

    //error paragraphs
    
    var firstnamep = document.getElementById("firstname_error");
    var lastnamep = document.getElementById("lastname_error");
    var agep = document.getElementById("age_error");
    var salaryp = document.getElementById("salary_error");
    var addressp = document.getElementById("address_error");
    
    // main validation
    if(firstname.value.length <5){
        firstnamep.innerHTML = "Firstname has to be more than 5 chars";
    }
    else{
        firstnamep.innerHTML = "";
    }
    if(lastname.value.length <5){
        lastnamep.innerHTML = "Lastname has to be more than 5 chars";
    }
    else{
        lastnamep.innerHTML = "";
    }
    if(!age.value){
        agep.innerHTML = "Insert a proper age";
    }
    else{
        agep.innerHTML = "";
    }
    if(salary.value <10000){
        salaryp.innerHTML = "ektu bhalo salary dao bhai";
    }
    else{
        salaryp.innerHTML = "";
    }
    if(address.value.length <5){
        addressp.innerText = "This is not a proper address";
    }
    else{
        addressp.innerHTML = "";
    }
}