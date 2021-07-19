function unhide(value){
  var x = document.getElementById('student_input');
  var y = document.getElementById('student_search');
  var z = document.getElementById('student_delete');
  var a = document.getElementById('student_all');
  if(value == 1){
    x.style.display = 'block';
    y.style.display = 'none';
    z.style.display = 'none';
    a.style.display = 'none';
  }
  else if (value == 2) {
    x.style.display = 'none';
    y.style.display = 'block';
    z.style.display = 'none';
    a.style.display = 'none';
  }
  else if (value == 3) {
    x.style.display = 'none';
    y.style.display = 'none';
    z.style.display = 'block';
    a.style.display = 'none';
  }
  else if (value == 4) {
    x.style.display = 'none';
    y.style.display = 'none';
    z.style.display = 'none';
    a.style.display = 'block';
  }
}
