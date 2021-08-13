document.getElementById("btn_signup").onmousemove = function() {
    move(this)
};
document.getElementById("btn_signup").onmouseout = function() {
    out(this)
};
document.getElementById("btn_login").onmousemove = function() {
    move(this)
};
document.getElementById("btn_login").onmouseout = function() {
    out(this)
};
document.getElementById("text_forgot").onmousemove = function() {
    move(this)
};
document.getElementById("text_forgot").onmouseout = function() {
    out(this)
};

function move(x) {
    x.classList.add("move");
}

function out(x) {
    x.classList.remove("move");
}