function send_request() {
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function() {
    if (ajax.readyState == 4 && ajax.status == 200) {

    if(this.responseText.indexOf('U') != -1){
    alert(ajax.responseText);
    return;
}
      document.getElementsByTagName('main')[0].innerHTML=this.responseText;

    }
  };
  ajax.open('post','php/login/index.php', true);
  //Login
  var user = document.getElementsByName('usuario')[0].value;
  var password = document.getElementsByName('password')[0].value;
  ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.send('user='+user+'&psw='+password);
}
function cargar_eventos() {
  var button = document.getElementById('btn-login');
  button.addEventListener('click', send_request, false);
}
document.addEventListener('load',cargar_eventos(), false);
