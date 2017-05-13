
function reset(){
        location.reload(true);
}

function total(){
        var x = 0;
        if(document.getElementById("1").checked)
        {x += 4.95;}
        if(document.getElementById("2").checked)
        {x += 20.00;}
        if(document.getElementById("3").checked)
        {x += 25.95;}
        if(document.getElementById("4").checked)
        {x += 15.95;}
        document.getElementById("total").value = x.toFixed(2);
}
