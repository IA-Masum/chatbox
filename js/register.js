$(document).ready(function() {
  $("#resigter").click(function() {
    //get all input values
    var name = $("#name").val();
    var email = $("#email").val();
    var gender;
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
    var sques = $("#sques").val();
    var sans = $("#sans").val();
    var dataok = false;

    // get gender value
    if ($("#male").prop("checked")) {
      gender = "Male";
    } else if ($("#female").prop("checked")) {
      gender = "Female";
    }

    //email validation
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var validEmail = re.test(String(email).toLowerCase());

    // Password Ok
    var passok = password === cpassword;

    //check all field is not empty
    if (!name) {
      alert("Name Shouldn't be empty!!!");
    } else if (!email) {
      alert("Email Shouldn't be empty!!!");
    } else if (!gender) {
      alert("Gender Shouldn't be empty!!!");
    } else if (!password) {
      alert("Password Shouldn't be empty!!!");
    } else if (!cpassword) {
      alert("Confirm Pasword Shouldn't be empty!!!");
    } else if (!sques) {
      alert("Sequrity Question Shouldn't be empty!!!");
    } else if (!sans) {
      alert("Sequrity Answer Shouldn't be empty!!!");
    } else if (!$("#trms").prop("checked")) {
      //check Agree with Terms and conditions
      alert("You Must Accept Our terms and Conditions");
    } else if (!validEmail) {
      alert("Please Enter a valid Email..!!!");
    }else if(password.length < 8){
      alert("Password Should be at least 8 characters..!!");
    }else if(!passok){
      alert("Please Enter same Password into two fields..!!");
    }else{
      dataok = true;
    }

    if(dataok){
      alert("All data is okey......!!");
    }
  });
});
