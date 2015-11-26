var express = require("express");
var app = express();
var port = 8080;

//app.get("/", function(req, res){
//    res.send("It works!");
//});

app.use(express.static(__dirname + '/app/webroot'));
var io = require('socket.io').listen(app.listen(port));
io.sockets.on('connection', function (socket) {
    socket.emit('message', { message: 'welcome to the chat' });
    socket.on('send', function (data) {
        io.sockets.emit('message', data);
    });
});

console.log("Listening on port " + port);

app.set('views', __dirname + '/tpl');
app.set('view engine', "html");
app.engine('html', require('html').__express);
app.get("/", function(req, res){
    res.render("page");
});
