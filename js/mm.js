

var p = [30,35,15,5,10,20,25];
var tamanho = p.length - 1;
var n = new Array();
var auxiliar = new Array();
var count = tamanho;

do{
	n[count] = 0;
	count--;
}while(count>=0);


for(var i = 0; i<tamanho; i++){
	for(var j = 0; j<n[i].length-1; j++){
		document.write(n[[i][j]]+", ");
	}
	document.write("<br>");	
}