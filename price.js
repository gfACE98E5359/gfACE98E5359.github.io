
const Http = new XMLHttpRequest();
const url='https://api.cryptonator.com/api/ticker/btc-rur';
Http.open("GET", url);
Http.send();

Http.onreadystatechange = (e) => {
price = Http.responseText;
document.write(price);

}


setInterval(

	function() {
const Http = new XMLHttpRequest();
const url='https://api.cryptonator.com/api/ticker/btc-rur';
Http.open("GET", url);
Http.send();

Http.onreadystatechange = (e) => {
price = Http.responseText;
document.write(price);

}
},
    
5000);
