function numInput(number) {
    let numberEq = document.getElementById("iphoneTotal").innerHTML
    numberEq = numberEq + number
    document.getElementById("iphoneTotal").innerHTML = numberEq
}

function minus() {
    let numberMin = document.getElementById("iphoneTotal").innerHTML
    numberMin = "-" + numberMin
    document.getElementById("iphoneTotal").innerHTML = numberMin
}

function percent() {
    let numberPercent = document.getElementById("iphoneTotal").innerHTML
    numberPercent = numberPercent * 1 / 100     
    document.getElementById("iphoneTotal").innerHTML = numberPercent
}

function comma() {
    let numberComma = document.getElementById("iphoneTotal").innerHTML
    numberComma = numberComma + ","     
    document.getElementById("iphoneTotal").innerHTML = numberComma
}

function resetIphone() {
    let reset = document.getElementById("iphoneTotal").innerHTML
    reset = ""     
    document.getElementById("iphoneTotal").innerHTML = reset
}

function multiple() {
    let multiple = document.getElementById("iphoneTotal").innerHTML
    multiple = multiple + "*"     
    document.getElementById("iphoneTotal").innerHTML = multiple
}

function divide() {
    let divide = document.getElementById("iphoneTotal").innerHTML
    divide = divide + "/"     
    document.getElementById("iphoneTotal").innerHTML = divide
}

function substract() {
    let substract = document.getElementById("iphoneTotal").innerHTML
    substract = substract + "-"     
    document.getElementById("iphoneTotal").innerHTML = substract
}

function add() {
    let add = document.getElementById("iphoneTotal").innerHTML
    add = add + "+"     
    document.getElementById("iphoneTotal").innerHTML = add
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