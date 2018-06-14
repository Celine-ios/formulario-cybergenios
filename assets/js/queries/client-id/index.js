function sendRequest() {
	ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && this.status == 200) {
			alert(this.responseText);
		}
	};
	ajax.open('get','../../php/queries/client-id/index.php', true);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.send();

}
function chargeEvents() {
	document.getElementById('btn-query').addEventListener('click', sendRequest, false);
}
document.addEventListener('load',chargeEvents(), false);