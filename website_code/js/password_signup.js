var a;
var b;
function pass(){
    if(a==1){
        document.getElementById("passw").type = "password";
        document.getElementById("eye_slash").className = "fas fa-eye-slash";
        a = 0;
    }else{
        document.getElementById("passw").type = "text";
        document.getElementById("eye_slash").className = "fas fa-eye";
        a = 1;
    }
}
function conf_pass(){
    if(b==1){
        document.getElementById("conf_passw").type = "password";
        document.getElementById("conf_eye_slash").className = "fas fa-eye-slash";
        b = 0;
    }else{
        document.getElementById("conf_passw").type = "text";
        document.getElementById("conf_eye_slash").className = "fas fa-eye";
        b = 1;
    }
}