var express = require('express');
var app = express();
var bodyParser = require('body-parser');

var rc = require('./rateCalculation');

app.set('view engine', 'ejs');
app.set("port", (process.env.PORT || 3000));

app.use(express.static("public"));
app.use(bodyParser.urlencoded({ extended: true }));

app.get("/", getRate);
app.post("/", postRate);

app.listen(app.get("port"), function() {
  console.log("Now listening on port: ", app.get("port"));
});

var result;
function getRate(req, res) {
  console.log("Getting rate");

  res.render('result', { weight: '', mailType: '', result: '' });
}

function postRate(req, res) {
  console.log("Posting rate");
  console.log(req.body.weight);
  console.log(req.body.mailType);
  if(mailType == "stamped") {
    result = stampedCalc(weight);
  }
  else if (mailType == "metered") {
    result = meteredCalc(weight);
  }
  else if (mailType == "flats") {
    result = envelopesCalc(weight);
  }
  else if (mailType == "fClass") {
    result = fClassCalc(weight);
  }
  res.render('result', { var1: req.body.weight, sign: req.body.mailType, result: result });
}
