function chair_rezervation(z){
    if(document.getElementById(z).src.endsWith("Images/chair.png") == true){
document.getElementById(z).src = "../Images/chair_green.png";
document.getElementById("rezervation").value += z;
document.getElementById("rezervation").value += ' ';
}/*else if(document.getElementById(z).src.endsWith("Images/chair_green.png") == true){
document.getElementById(z).src = "../Images/chair.png";
k = document.getElementById("rezervation").value
k.trim();
k.slice(0, -3);
alert(k);
}*/

}

function change_to_red(z){
    document.getElementById(z).src = "../Images/chair_red.png";
}

function table_rezervation(t){
table_id = 'table' + t.toString();
var chairs = document.getElementsByClassName(table_id)
for(i = 0; i <= chairs.length; i++){
   var k = chairs[i].src;
    if(chairs[i].src.endsWith("Images/chair.png") == true){
    chair_rezervation(chairs[i].id);

    }
    }
}
function refresh(){
    window.location.reload();
}