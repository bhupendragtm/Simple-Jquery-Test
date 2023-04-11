function myFunction() {
    document.getElementById("myDIV").classList.add("mystyle");
  
 document.getElementById("myDIV").classList.remove("whatever");
  document.getElementById("myDIV").classList.toggle("newClassName");
}

function setDataAttr() {
    var linkHref = $('#square').data("description");
  
    $('#square-data').html(linkHref);
  }
  
  $('.btn').on("click", function() {
    setDataAttr();  
  })
  