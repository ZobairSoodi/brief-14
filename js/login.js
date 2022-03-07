var login_btn = document.getElementById("login_btn");
var signup_btn = document.getElementById("signup_btn");
var login_form = document.getElementById("login_form");
var signup_form = document.getElementById("signup_form");

login_btn.addEventListener("click", ()=>{
    signup_form.style.zIndex = -1;
    login_form.style.opacity = 1;
    signup_form.style.opacity = 0;
    login_btn.classList.remove("form_inactive_login");
    signup_btn.classList.add("form_inactive_signup");
    login_btn.style.backgroundColor = "white";
    if(login_btn.classList.contains("hover_button")){
        login_btn.classList.remove("hover_button");
    }
})
signup_btn.addEventListener("click", ()=>{
    signup_form.style.zIndex = 1;
    signup_form.style.opacity = 1;
    login_form.style.opacity = 0;
    signup_btn.classList.remove("form_inactive_signup");
    login_btn.classList.add("form_inactive_login");
    signup_btn.style.backgroundColor = "white";
    if(signup_btn.classList.contains("hover_button")){
        signup_btn.classList.remove("hover_button");
    }
})
function add_button_hover(btn1){
    if(btn1.classList.contains("form_inactive_login")||btn1.classList.contains("form_inactive_signup")){
        btn1.classList.add("hover_button");
    }
}
function remove_button_hover(btn1){
    if(btn1.classList.contains("hover_button")){
        btn1.classList.remove("hover_button");
    }
}
