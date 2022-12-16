$(document).ready(function () {
  $("form").submit(function (e) {
    // alert("MATAMUUU")
    var formData = {
      name: $("#username").val(),
      email: $("#password").val(),
    };
    var res = $.ajax({
      type: "POST",
      url: "../../controller/login_process.php",
      data: formData,
      dataType: "json",
      encode: true,
      statusCode:{
      
      }
    })

    res.done((e) => {
      console.log(`Done ${e}`);
    });

    e.preventDefault();
  });
});
