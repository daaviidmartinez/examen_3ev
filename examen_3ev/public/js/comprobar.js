function comprobar() {
  var comprobar=document.getElementById("nombre").value;
  var comprobarAp=document.getElementById("apellidos").value;
    var precio_hora=document.getElementById("horas").value;
  var horas=document.getElementById("horas").value;
  var error=true;
    document.getElementById('hidden').style.display = 'none';
    document.getElementById('hidden1').style.display = 'none';
    document.getElementById('hidden2').style.display = 'none';
    document.getElementById('hidden3').style.display = 'none';
    document.getElementById('hidden4').style.display = 'none';
    document.getElementById('hidden5').style.display = 'none';
if (comprobar=="") {
document.getElementById('hidden').style.display = 'block';
error=false;
}
if (comprobarAp=="") {
  document.getElementById('hidden1').style.display = 'block';
  error=false;
}
if (precio_hora=="") {
  document.getElementById('hidden3').style.display = 'block';
  error=false
}
if (isNaN(precio_hora)) {
  document.getElementById('hidden4').style.display = 'block';
  error=false
}
if (horas=="") {
  document.getElementById('hidden3').style.display = 'block';
  error=false
}
if (isNaN(horas)) {
  document.getElementById('hidden4').style.display = 'block';
  error=false
}
if (error==false) {
  return false;

}
else {
  return true;
}
}
