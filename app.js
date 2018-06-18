//app.js

var express = require('express');
var path = require('path');
var app = express();


var devDir = '/_DEV/';
var stageDir = '/_STAGE/';
var prodDir = '/_PROD/';

app.get('/', function (req, res) {
	res.sendFile(path.join(__dirname + devDir+'/index.html'));
})





// app.use('/static', express.static(path.join(__dirname, devDir+'public')));
// app.use('/app', express.static(path.join(__dirname, devDir+'app')));
// app.use('/api', express.static(path.join(__dirname, devDir+'fixtures')));
// app.use('/default', express.static(path.join(__dirname, devDir+'../')));

app.listen(1000, function () {
  console.log('Testing app listening on port 1000!');
})
