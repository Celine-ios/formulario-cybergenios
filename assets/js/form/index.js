function sendRequest() {
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function() {
    if (ajax.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };
  ajax.open('post','../php/form/index.php', true);
  var nombres = document.getElementsByName('name')[0].value;
  var apellido = document.getElementsByName('lastname')[0].value;
  var cumple = document.getElementsByName('bday')[0].value;
  var email = document.getElementsByName('email')[0].value;
  var tel = document.getElementsByName('telephone')[0].value;
  var cliente_id = document.getElementsByName('client_id')[0].value;
  var op_id = document.getElementsByName('operator_id')[0].value;
  var fecha_jornada = document.getElementsByName('journey_date')[0].value;
  ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.send('nombres='+nombres+'&apellidos='+apellido+'&fecha_cumpleanos='+cumple+'&correo='+email+'&tel='+tel+'&id_cliente='+cliente_id+'&id_op='+op_id+'&fecha_jornada='+fecha_jornada);
}
function ChargingEvents() {
    var btn = document.getElementById('btn-form');
    btn.addEventListener('click',sendRequest, false);
}
document.addEventListener('load', ChargingEvents(), false);
