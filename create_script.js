$("#create_btn").click(function () {
  var form = $("#create_form");
  $.ajax({
    url: form.attr('action'), // /api.php/?f=create_Animal_Template
    type: form.attr('method'), // POST
    data: form.serialize(),
    success: function () {
      window.location = 'http://localhost:8000/?f=list_Animals_index';
    },
    error: function () {
      alert('error');
    },
    // complete: function(){
    //   alert('Completed, you created shit.'); //test
    //   // console.log('Completed, you created shit.');
  })
})