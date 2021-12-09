var count = 9;
var redirect = "./assets/php/camo_dps_setup_database.php";
                        
function countDown(){
    var timer = document.getElementById("timer");
    if(count > 0){
        count--;
        setTimeout("countDown()", 1000);
    }else{
        window.location.href = redirect;
    }
}