var express = require("express");
var app = express();

var bodyParser = require("body-parser");
var ms = require("./mathService");

app.use(bodyParser.urlencoded({ extended : true}));
app.set("port", (process.env.PORT || 3000));
app.set("view engine", "ejs");

app.get("/", getData);
app.post("/", postData);

app.listen(app.get("port"), function() {
  console.log("The server is listening on port " + app.get("port"));
});


function getData(req, res) {
  console.log("getting data");
  res.render('results', {var1: '', sign: '', var2: '', result: ''});
}

function postData(req, res) {
  console.log("posting data");
  console.log(req.body.var1);
  console.log(req.body.sign);
  console.log(req.body.var2);
  var result = ms.computeOperation(req.body.sign, req.body.var1, req.body.var2);
  console.log(result);
  res.render('results', {var1: req.body.var1, sign: req.body.sign, var2: req.body.var2, result: result});
}
