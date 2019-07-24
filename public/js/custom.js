function frmImg_ld(obj,str){
document.getElementById(str).src = URL.createObjectURL(obj.files[0]);
}
$(document).ready(function(){
    $(document).on("change","#file",function(){
        frmImg_ld(this,"img-holder");
    })
});
