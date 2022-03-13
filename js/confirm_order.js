var new_adress = document.getElementById("new_adress")
function adress_click(btn){
    if(btn.value == "no"){
        new_adress.setAttribute("readonly",true);
    }
    else{
        new_adress.removeAttribute("readonly");
    }
}