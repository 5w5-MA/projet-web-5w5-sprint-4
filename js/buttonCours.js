let btns = [{
    btn: document.getElementsByClassName("btnSession1")[0],
    wrap: document.getElementsByClassName("btnSession1Wrap")[0],
    chk: document.getElementById("chkBtnSession1")
},
{
    btn: document.getElementsByClassName("btnSession2")[0],
    wrap: document.getElementsByClassName("btnSession2Wrap")[0],
    chk: document.getElementById("chkBtnSession2")
},
{
    btn: document.getElementsByClassName("btnSession3")[0],
    wrap: document.getElementsByClassName("btnSession3Wrap")[0],
    chk: document.getElementById("chkBtnSession3")
},
{
    btn: document.getElementsByClassName("btnSession4")[0],
    wrap: document.getElementsByClassName("btnSession4Wrap")[0],
    chk: document.getElementById("chkBtnSession4")
},
{
    btn: document.getElementsByClassName("btnSession5")[0],
    wrap: document.getElementsByClassName("btnSession5Wrap")[0],
    chk: document.getElementById("chkBtnSession5")
},
{
    btn: document.getElementsByClassName("btnSession6")[0],
    wrap: document.getElementsByClassName("btnSession6Wrap")[0],
    chk: document.getElementById("chkBtnSession6")
}
];

btns[0].chk.checked = true;

gestionChangementCheckbox(btns[0].chk);

function gestionChangementCheckbox(changeChk) {
btns.forEach(({
    btn,
    wrap,
    chk
}) => {
    if (chk === changeChk) {
        if (chk.checked) {
            btn.classList.add("actif");
            wrap.classList.add("wrapActif");
        } else {
            btn.classList.remove("actif");
            wrap.classList.remove("wrapActif");
        }
    } else {
        chk.checked = false;
        btn.classList.remove("actif");
        wrap.classList.remove("wrapActif");
    }
});
}

btns.forEach(({
chk
}) => {
chk.addEventListener("change", function() {
    gestionChangementCheckbox(this);
});
});