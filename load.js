var url = "https://api.cryptonator.com/api/ticker/btc-rur";
$.getJSON( url, function(data) { 
 document.getElementById('demo0').innerHTML = parseInt((data.ticker.price)*1.05)
});