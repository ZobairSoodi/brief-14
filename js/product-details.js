function change_quantity(op){
    var inp = document.getElementById("unics-num");
    if(op == "plus"){
        inp.value = Number(inp.value) + 1;
    }
    else if(op == "minus" && Number(inp.value) > 1){
        inp.value = Number(inp.value) - 1;
    }
}