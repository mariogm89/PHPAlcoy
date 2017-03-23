//en el navegador: http://127.0.0.1:8081/index.htm
var http = require('http');
var fs = require('fs');
var url = require('url');
http.createServer( function (request, response) {
    var pathname = url.parse(request.url).pathname;
    var type = pathname.s
    console.log("petición: " + pathname + " received.");
    if("" == pathname || "/" == pathname){
        pathname = "/index.html";
    }else if("/hola" == pathname){
        response.writeHead(200, {'Content-Type': 'text/html'});
        response.write("Hello... it's me...");
    }else if("/adios" == pathname){
        response.writeHead(200, {'Content-Type': 'text/html'});
        response.write("Qué lástima pero adiós, me despido de ti y me voy...");
    }
    else{
        pathname = "/404.html";
    fs.readFile(pathname.substr(1), function (err, data) {
        if (err) {
            console.log(err);
            // HTTP Status: 404 : NOT FOUND
            // Content Type: text/plain
            response.writeHead(404, {'Content-Type': 'text/html'});
        }else{
            // HTTP Status: 200 : OK
            // Content Type: text/plain
            response.writeHead(200, {'Content-Type': 'text/html'});
            response.write(data.toString());
        }
        
    });
    }
    response.end();
}).listen(3000);
console.log('Server running at http://127.0.0.1:3000/');