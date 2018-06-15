function sendRequest() {
	ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && this.status == 200) {
			document.getElementById('loader').innerHTML = this.responseText;
		}
	};
	var journey_date = document.getElementsByName('journey_date')[0].value;
	ajax.open('get','../../php/queries/journey/index.php?jdate='+journey_date, true);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.send();

}
function chargeEvents() {
	document.getElementById('btn-query').addEventListener('click', sendRequest, false);
}
document.addEventListener('load',chargeEvents(), false);