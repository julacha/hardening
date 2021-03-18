var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
//-------------------------------------------------------------------
let btn_sign = document.querySelector(".signbtn");
let regbox =document.querySelector(".auth-box");

btn_sign.addEventListener("click", function () { 
  if (regbox.classList.contains("active")) {
    regbox.classList.remove("active");
  } else {
    regbox.classList.add("active");
  }
});

let btn_log = document.querySelector(".logbtn");
let logbox =document.querySelector(".log-box");

btn_log.addEventListener("click", function () { 
  if (logbox.classList.contains("active")) {
    logbox.classList.remove("active");
  } else {
    logbox.classList.add("active");
  }
});