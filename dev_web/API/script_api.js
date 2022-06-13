
function chamarMarcasAPI(){
	fetch('https://parallelum.com.br/fipe/api/v1/carros/marcas')
	  .then(response => response.json())
	  .then(data =>  consultarMarcasApi(data));
}

function chamarMotosAPI(){
	fetch('https://parallelum.com.br/fipe/api/v1/motos/marcas')
	  .then(response => response.json())
	  .then(data =>  consultarMotosApi(data));
}

function chamarTruckAPI(){
	fetch('https://parallelum.com.br/fipe/api/v1/caminhoes/marcas')
	  .then(response => response.json())
	  .then(data =>  consultarTrucksApi(data));
}

function consultarMarcasApi(data){
	for (var i = 0; i < data.length ; i++) {
		var div = document.getElementById("result1");
		const paragrafo = document.createElement("p");
		const texto = document.createTextNode(data[i].nome);
		console.log(data[i].nome);
		paragrafo.appendChild(texto);
		div.appendChild(paragrafo);
	}
}
function consultarMotosApi(data){
	for (var i = 0; i < data.length ; i++) {
		var div = document.getElementById("result2");
		const paragrafo = document.createElement("p");
		const texto = document.createTextNode(data[i].nome);
		console.log(data[i].nome);
		paragrafo.appendChild(texto);
		div.appendChild(paragrafo);
	}
}
function consultarTrucksApi(data){
	for (var i = 0; i < data.length ; i++) {
		var div = document.getElementById("result3");
		const paragrafo = document.createElement("p");
		const texto = document.createTextNode(data[i].nome);
		console.log(data[i].nome);
		paragrafo.appendChild(texto);
		div.appendChild(paragrafo);
	}
}
