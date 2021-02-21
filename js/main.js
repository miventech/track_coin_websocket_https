//75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471
//75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471
//75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471
//75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471
//75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471
//75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471
//75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471
//75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471

var ccStreamer 
var init_ws = false;

var html_ETH = document.getElementById("ETH");
var html_BTC = document.getElementById("BTC");
var html_XRP = document.getElementById("XRP");

var last_ETH = 0;
var last_BTC = 0;
var last_XRP = 0;
var a_up = "&#xE5C7";
var a_down = "&#xE5C5";

function iniciar_socket(){
    if(init_ws) return console.log("Ya iniciada");
    //var apiKey = "75601b2ab9c4631c80cc6f9898824db54f77736491ba65ba4d414a5ac7266471";
    let api_key = document.getElementById("api_key").value;

    ccStreamer = new WebSocket('wss://streamer.cryptocompare.com/v2?api_key=' + api_key);
    init_ws = true
    ccStreamer.onopen = function onStreamOpen() {
        var subRequest = {
            "action": "SubAdd",
            "subs": ["2~Coinbase~BTC~USD" , "2~Coinbase~ETH~USD" , "2~Coinbase~XRP~USD"]
        };
        ccStreamer.send(JSON.stringify(subRequest));
        document.getElementById("bplay").disabled = true;
        document.getElementById("bstop").disabled = false;
    }
    ccStreamer.onclose = function closews() {
        console.log("Conexion Cerrada");
        document.getElementById("bplay").disabled = false;
        document.getElementById("bstop").disabled = true;
        init_ws = false;

        list_span = html_ETH.getElementsByTagName("span");
        list_span[2].innerHTML = `---`;
        list_span = html_BTC.getElementsByTagName("span");
        list_span[2].innerHTML = `---`;
        list_span = html_XRP.getElementsByTagName("span");
        list_span[2].innerHTML = `---`;
        
    }
    ccStreamer.onmessage = function onStreamMessage(message) {
        var message = event.data;
        let _obj_json = JSON.parse(message);
        procesar_json(_obj_json);
    }
}

function procesar_json(_obj) {
    //console.log(_obj);
    if( _obj.TYPE != 2) return;
    if( _obj.PRICE == undefined) return;
    if(_obj.FROMSYMBOL == "ETH"){
        list_span = html_ETH.getElementsByTagName("span");
        list_span[2].innerHTML = `${_obj.PRICE}$`;
        let rest = _obj.PRICE - last_ETH;
        rest = rest.toFixed(1);
        list_span[2].innerHTML = `${_obj.PRICE}$ · (${rest}$) `;
        let ic = list_span[1].getElementsByTagName("i")[0];
        if(_obj.PRICE >= last_ETH){
            ic.innerHTML = a_up;
            ic.style.color = "#00bcd4";
        }else{
            ic.innerHTML = a_down;
            ic.style.color = "#f44336";
        }
        last_ETH = _obj.PRICE;



    }else if(_obj.FROMSYMBOL == "BTC"){
        list_span = html_BTC.getElementsByTagName("span");
        
        let ic = list_span[1].getElementsByTagName("i")[0];
        let rest = _obj.PRICE - last_BTC;
        rest = rest.toFixed(1);
        list_span[2].innerHTML = `${_obj.PRICE}$ · (${rest}$) `;
        if(_obj.PRICE >= last_BTC){
            ic.innerHTML = a_up;
            ic.style.color = "#00bcd4";
        }else{
            ic.innerHTML = a_down;
            ic.style.color = "#f44336";
        }
        last_BTC = _obj.PRICE;



    }else if(_obj.FROMSYMBOL == "XRP"){
        list_span = html_XRP.getElementsByTagName("span");
        list_span[2].innerHTML = `${_obj.PRICE}$`;
        let rest = _obj.PRICE - last_XRP;
        rest = rest.toFixed(1);
        list_span[2].innerHTML = `${_obj.PRICE}$ · (${rest}$) `;
        let ic = list_span[1].getElementsByTagName("i")[0];
        if(_obj.PRICE >= last_XRP){
            ic.innerHTML = a_up;
            ic.style.color = "#00bcd4";
        }else{
            ic.innerHTML = a_down;
            ic.style.color = "#f44336";
        }
        last_XRP = _obj.PRICE;


    }
}


function procesar_json_web(_obj) {
    //console.log(_obj);


        
        
        list_span = html_ETH.getElementsByTagName("span");
        list_span[2].innerHTML = `${_obj.ETH.USD}$`;
        let rest = _obj.ETH.USD - last_ETH;
        rest = rest.toFixed(1);
        list_span[2].innerHTML = `${_obj.ETH.USD}$ · (${rest}$) `;
        let ic = list_span[1].getElementsByTagName("i")[0];
        if(_obj.ETH.USD >= last_ETH){
            ic.innerHTML = a_up;
            ic.style.color = "#00bcd4";
        }else{
            ic.innerHTML = a_down;
            ic.style.color = "#f44336";
        }
        last_ETH = _obj.ETH.USD;




        list_span = html_BTC.getElementsByTagName("span");
        
        ic = list_span[1].getElementsByTagName("i")[0];
        rest = _obj.BTC.USD - last_BTC;
        rest = rest.toFixed(1);
        list_span[2].innerHTML = `${_obj.BTC.USD}$ · (${rest}$) `;
        if(_obj.BTC.USD >= last_BTC){
            ic.innerHTML = a_up;
            ic.style.color = "#00bcd4";
        }else{
            ic.innerHTML = a_down;
            ic.style.color = "#f44336";
        }
        last_BTC = _obj.BTC.USD;



        list_span = html_XRP.getElementsByTagName("span");
        list_span[2].innerHTML = `${_obj.XRP.USD}$`;
        rest = _obj.XRP.USD - last_XRP;
        rest = rest.toFixed(1);
        list_span[2].innerHTML = `${_obj.XRP.USD}$ · (${rest}$) `;
        ic = list_span[1].getElementsByTagName("i")[0];
        if(_obj.XRP.USD >= last_XRP){
            ic.innerHTML = a_up;
            ic.style.color = "#00bcd4";
        }else{
            ic.innerHTML = a_down;
            ic.style.color = "#f44336";
        }
        last_XRP = _obj.XRP.USD;

}


function stop_ws() {
    ccStreamer.close();
}

function get_http() {

        $.post( "get.php", function(data) {
            procesar_json_web(JSON.parse(data));
            get_http();
        })
        .done(function() {
        })
        .fail(function() {
            get_http();
        })
        .always(function() {
        });
      
}