$(document).ready(function() {
  $("#btnSave").click(function (e) {
    let first_name = $("#first_name").val();
    let last_name = $("#last_name").val();
    let username = $("#username").val();
    let email = $("#email").val();
    let password = $("#password").val();
    
   /*alert(email);*/

    $.ajax({
      type: "POST",
      datatype: "JSON",
      url: "./_includes/process.php",
      data: {
        first_name: first_name,
        last_name: last_name,
        username: username,
        email: email,
        password: password,
        isClicked: true,
      },
      success: function (data) {
        console.log(data);
        
      },
      error: function (e) {
        console.log(e);
      },
    });
});
});