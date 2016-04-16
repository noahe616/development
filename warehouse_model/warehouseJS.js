$(document).ready(function(){

  $(function() {
  $(".noah").draggable({ grid: [ 80, 80 ] });
  $("#list1").disableSelection();
  $("#list2").disableSelection();
});


$(function() {
    $( "#dialog" ).dialog({
      autoOpen:false,
      modal: true,
      resizeable:false
  });



    $(".noah").dblclick(function(){
    var getText = $(this).text();
    console.log(getText);
     $("#dialog").html($("#dialog").html() + getText);
    $("#dialog").dialog("open");
});
});



});
