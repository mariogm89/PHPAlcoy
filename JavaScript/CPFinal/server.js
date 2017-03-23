var express     = require('express'); 
var http        = require('http'); 
var app         = express();  
var bodyParser  = require('body-parser');
var fs          = require ('fs');
var urlencodedParser = bodyParser.urlencoded({ extended: false});

app.set('port', process.env.PORT || 8081);

app.use(bodyParser.urlencoded({ extended: false }));

app.use(express.static('public'));

app.get('/', function(request, response){
    response.send(__dirname + '/public/index.html');
});

app.get('/list', function(request, response) {
    fs.readFile( __dirname + "/json.json", 'utf8', function (error, data) {
        response.end( data );
    });
});

app.post('/add', function(request, response){
    // recibimos los datos del formulario y los convertimos a decimal, booleano...)
    var id = request.body.identificador;
    var name = request.body.nombre;
    var price = parseFloat(request.body.precio);
    var available = request.body.disponible;
    if (available == 'on'){
        available = true;
    }else{
        available = false;
    }
    // leer el archivo json
    fs.readFile( __dirname + "/json.json", 'utf8', function (error, data) {
        //convertir json en objeto
        var obj = JSON.parse( data );
        obj['producto' + id] = {
            "id": id,
            "nombre": name,
            "precio": price,
            "disponible": available
        }
        //convertir de objeto a string json
        var json = JSON.stringify(obj, null, 2);
        //sobreescribir el archivo json con el neuevo string json
        fs.writeFile(__dirname + "/" + "json.json", json);
        // devolvemos el string
        response.end(json)
    });
});

app.get('/delete/:id', function(request, response){
    fs.readFile( __dirname + "/json.json", 'utf8', function (error, data) {
        var obj = JSON.parse( data );
        delete obj['producto' + request.params.id]
        var json = JSON.stringify(obj, null, 2);
        fs.writeFile("json.json", json, 'utf8');
        response.end(json);
    });
});

app.get('/selection/:id', function(request, response){
    fs.readFile( __dirname + "/json.json", 'utf8', function (error, data){
        var obj = JSON.parse ( data );
        var json = JSON.stringify(obj['producto' + request.params.id], null, 3);
        response.end(json);
    });
});

app.get('/*', function(request, response){
    response.send('No existe tal ruta');
});


http.createServer(app).listen(
    app.get('port'), function(){
        console.log('Express server listening on port' + app.get('port'));
    }
);