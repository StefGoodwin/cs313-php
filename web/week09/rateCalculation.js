function stampedCalc(weight) {

  var result;

  if(weight <= 1){
    return result = 0.55;
  }
  else if (weight <= 2) {
    return result = 0.70;
  }
  else if (weight <= 3) {
    return result = 0.85;
  }
  else if (weight <= 3.5) {
    return result = 1.00;
  }
  else {
    return result = -9999;
  }
}

function meteredCalc(weight) {

  var result;

  if(weight <= 1){
    return result = 0.50;
  }
  else if (weight <= 2) {
    return result = 0.65;
  }
  else if (weight <= 3) {
    return result = 0.80;
  }
  else if (weight <= 3.5) {
    return result = .95;
  }
  else {
    return result = -9999;
  }

}

function envelopesCalc(weight) {

  var result;

  if(weight <= 1){
    return result = 1.00;
  }
  else if (weight <= 2) {
    return result = 1.20;
  }
  else if (weight <= 3) {
    return result = 1.40;
  }
  else if (weight <= 4) {
    return result = 1.60;
  }
  else if (weight <= 5) {
    return result = 1.80;
  }
  else if (weight <= 6) {
    return result = 2.00;
  }
  else if (weight <= 7) {
    return result = 2.20;
  }
  else if (weight <= 8) {
    return result = 2.40;
  }
  else if (weight <= 9) {
    return result = 2.60;
  }
  else if (weight <= 10) {
    return result = 2.80;
  }
  else if (weight <= 11) {
    return result = 3.00;
  }
  else if (weight <= 12) {
    return result = 3.20;
  }
  else if (weight <= 13) {
    return result = 3.40;
  }
  else {
    return result = -9999;
  }
}

function fClassCalc(weight) {

    var result;

    if(weight <= 1 && weight >= 4){
      return result = 3.80;
    }
    else if (weight <= 5 && weight >= 8) {
      return result = 4.60;
    }
    else if (weight <= 9 && weight >= 12) {
      return result = 5.30;
    }
    else if (weight == 13) {
      return result = 5.90;
    }
    else {
      return result = -9999;
    }
}
