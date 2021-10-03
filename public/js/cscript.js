

$("#sendInqueryBtn").click(function(e) {
  e.preventDefault();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  var name = $("input[name=name]").val();
  var phone = $("input[name=phone]").val();
  var email = $("input[name=email]").val();
  var inquerytext = $("input[name=inquerytext]").val();

  $.ajax({
    type: 'POST',
    url: "/send-email",
    data: {
      "_token": "{{ csrf_token() }}",
      name: name,
      phone: phone,
      email: email,
      inquerytext: inquerytext,
    },
    success: function(data) {
      alert(data.success);
    }
  });

});