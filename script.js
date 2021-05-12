let newques  = document.querySelector('.new-question');
let template = document.querySelector(".template");
let count = localStorage.getItem("quest_count");

if (count === null && count != Number(count)){
  count = 0;
}

function onQuestion (event){
  event.preventDefault();
  let userquestion = this.querySelector('.new-question textarea');
  count++;
  addQuestion(userquestion.value, count);
  userquestion.value = ""; 
}
function addQuestion(text, order){
  if(text !== ""){
  let question  = template.cloneNode(true);
  question.classList.remove("template");
  question.setAttribute('data-order', order);
  question.querySelector("pre").textContent = text;
  document.querySelector('.question-list').append(question); 
  localStorage.setItem("question["+ order +"]", text);
  localStorage.setItem("quest_count", order);
}
}

for (let i = 1; i <= count; i++){
addQuestion(localStorage.getItem("question["+ i +"]"),i);
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