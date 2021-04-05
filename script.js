let newques  = document.querySelector('.new-question');
function onQuestion (event){
  event.preventDefault();
  let userquestion = this.querySelector('.new-question textarea').value;
  let question  = document.createElement("pre");
  console.log(question);
  question.textContent = userquestion;
  document.querySelector('.question-list').append(question);
}
let options = { 
  'backdrop' : 'static'
}
let btnMessage = document.querySelector("#message");
 function onModal(event) {
  $('#exampleModalCenter').modal(options);
}

//-------------------------------------------------------------------
let btn_sign = document.querySelector(".signbtn");
let regbox =document.querySelector(".auth-box");

function onReg() { 
  if (regbox.classList.contains("active")) {
    regbox.classList.remove("active");
  } else {
    regbox.classList.add("active");
    logbox.classList.remove("active");
  }
}

let btn_log = document.querySelector(".logbtn");
let logbox =document.querySelector(".log-box");

function onLog() { 
  if (logbox.classList.contains("active")) {
    logbox.classList.remove("active");
  } else {
    logbox.classList.add("active");
    regbox.classList.remove("active");
  }
}

function addListeners() {
  btn_sign.addEventListener("click", onReg);
  btn_log.addEventListener("click", onLog);
  btnMessage.addEventListener("click", onModal);
  newques.addEventListener("submit", onQuestion);
}
function main (){
  addListeners();
}
main();