function numInput(number) {
  let total = document.getElementById("iphoneTotal").innerHTML;
  total = total + number;
  document.getElementById("iphoneTotal").innerHTML = total;
}

function minus() {
  let total = document.getElementById("iphoneTotal").innerHTML;
  total = "-" + total;
  document.getElementById("iphoneTotal").innerHTML = total;
}

function comma() {
  let total = document.getElementById("iphoneTotal").innerHTML;
  total = total + ",";
  document.getElementById("iphoneTotal").innerHTML = total;
}

function resetIphone() {
  let reset = document.getElementById("iphoneTotal").innerHTML;
  reset = "";
  document.getElementById("iphoneTotal").innerHTML = reset;
}

function percent() {
  let total = document.getElementById("iphoneTotal").innerHTML;
  total = (total * 1) / 100;
  document.getElementById("iphoneTotal").innerHTML = total;
}

function add() {
  let total = document.getElementById("iphoneTotal").innerHTML;
  total = total + "+";
  document.getElementById("iphoneTotal").innerHTML = total;
}

function substract() {
  let total = document.getElementById("iphoneTotal").innerHTML;
  total = total + "-";
  document.getElementById("iphoneTotal").innerHTML = total;
}

function multiple() {
  let total = document.getElementById("iphoneTotal").innerHTML;
  total = total + "*";
  document.getElementById("iphoneTotal").innerHTML = total;
}

function divide() {
  let total = document.getElementById("iphoneTotal").innerHTML;
  total = total + "/";
  document.getElementById("iphoneTotal").innerHTML = total;
}

function thisResult() {
  if (isNaN(eval(result)) === true) {
    alert("Tidak terdefinisi");
  }
}

function neticeIphone() {
  result = document.getElementById("iphoneTotal").innerHTML;
  thisResult();
  document.getElementById("iphoneTotal").innerHTML = eval(result);
}