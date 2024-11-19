let btn1 = document.getElementsByClassName("btnSession1")[0];
let btn2 = document.getElementsByClassName("btnSession2")[0];
let btn3 = document.getElementsByClassName("btnSession3")[0];
let btn4 = document.getElementsByClassName("btnSession4")[0];
let btn5 = document.getElementsByClassName("btnSession5")[0];
let btn6 = document.getElementsByClassName("btnSession6")[0];

document
  .getElementById("chkBtnSession1")
  .addEventListener("change", function () {
    if (this.checked) {
      btn1.classList.add("actif");
    } else {
      btn1.classList.remove("actif");
    }
  });

document
  .getElementById("chkBtnSession2")
  .addEventListener("change", function () {
    if (this.checked) {
      btn2.classList.add("actif");
    } else {
      btn2.classList.remove("actif");
    }
  });

document
  .getElementById("chkBtnSession3")
  .addEventListener("change", function () {
    if (this.checked) {
      btn3.classList.add("actif");
    } else {
      btn3.classList.remove("actif");
    }
  });

document
  .getElementById("chkBtnSession4")
  .addEventListener("change", function () {
    if (this.checked) {
      btn4.classList.add("actif");
    } else {
      btn4.classList.remove("actif");
    }
  });

document
  .getElementById("chkBtnSession5")
  .addEventListener("change", function () {
    if (this.checked) {
      btn5.classList.add("actif");
    } else {
      btn5.classList.remove("actif");
    }
  });

document
  .getElementById("chkBtnSession6")
  .addEventListener("change", function () {
    if (this.checked) {
      btn6.classList.add("actif");
    } else {
      btn6.classList.remove("actif");
    }
  });
