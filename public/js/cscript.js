
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
 });
    
$("#sendInqueryBtn").click(function(e) {
  e.preventDefault();

  var name = $("#nameinput").val();
  var phone = $("#emailinput").val();
  var email = $("#phoneinput").val();
  var inquerytext = $("#textinput").val();
  var mesage = '';
  var validation = false;
  if (name == "") {
    mesage = "Name is reqquired";
  }
  if (phone == "") {
    mesage = "Phone is reqquired";
  }
  if (email == "") {
    mesage = "Email is reqquired";
  }
  if (inquerytext == "") {
    mesage = "Inquery text is reqquired";
  }
  if (mesage != "") {
    $("#warningMsg").text(mesage);
    $("#warningMsg").show();
  } else {
    $("#warningMsg").text('');
    $("#warningMsg").hide();
    validation = true;
  }
if(validation) {
  $.ajax({
    type: 'POST',   
    //url:"{{ url('/send-email') }}",
    url:"/send-email",
    data: {     
      name: name,
      phone: phone,
      email: email,
      inquerytext: inquerytext,
    },
    success: function(data) {
      if (data.success) {
        $("#warningMsg").text("");
        $("#warningMsg").hide();
        $("#exampleModalCenter").modal('hide');
        $("#textinput").val("");
      } else {
        $("#warningMsg").text("Internal Error Try again");
        $("#warningMsg").show();
      }
    }
  });

  }

});