let modal = document.getElementById('modal');
let btnMessage = document.getElementById('message');
let btnclose = document.getElementById('close');

btnMessage.addEventListener('click', function (event) {
  $('#exampleModalCenter').modal(options);
});
//-------------------------------------------------------------------
let btn_sign = document.querySelector(".signbtn");
let regbox =document.querySelector(".auth-box");

btn_sign.addEventListener("click", function () { 
  if (regbox.classList.contains("active")) {
    regbox.classList.remove("active");
  } else {
    regbox.classList.add("active");
    logbox.classList.remove("active");
  }
});

let btn_log = document.querySelector(".logbtn");
let logbox =document.querySelector(".log-box");

btn_log.addEventListener("click", function () { 
  if (logbox.classList.contains("active")) {
    logbox.classList.remove("active");
  } else {
    logbox.classList.add("active");
    regbox.classList.remove("active");
  }
});

