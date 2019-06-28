$(document).ready(function (){
  $('#resigter').click(function(){
    var name = $("#name").val();
    var email = $("#name").val();
    var gender;
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
    var sques = $('#sques').val();
    var sans = $('#sans').val();

    alert(name+" "+email+" "+gender+" "+password+" "+cpassword+" "+sques+" "+sans);
  });
});