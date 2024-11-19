document
 .getElementById("chkBurger")
 .addEventListener("change", function() {
    if (this.checked) {
     document.body.classList.add("pasDeScroll");
    } else {
     document.body.classList.remove("pasDeScroll");
    }
});