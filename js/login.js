var login_btn = document.getElementById("login_btn");
var signup_btn = document.getElementById("signup_btn");
var login_form = document.getElementById("login_form");
var signup_form = document.getElementById("signup_form");

login_btn.addEventListener("click", ()=>{
    signup_form.style.zIndex = -1;
    login_btn.classList.remove("form_inactive_login");
    signup_btn.classList.add("form_inactive_signup");
})
signup_btn.addEventListener("click", ()=>{
    signup_form.style.zIndex = 1;
    signup_btn.classList.remove("form_inactive_signup");
    login_btn.classList.add("form_inactive_login");
})