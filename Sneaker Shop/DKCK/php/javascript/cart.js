function openModal(){
    var modal = document.getElementById('myModal');
    modal.style.display = "block";
}
function closeModal(){
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
}
function order(){
    var order = document.getElementsByClassName("order");
    var txt;
    var result = confirm("Bạn có chắc chắn muốn mua những sản phẩm này không?")
    if(result==true){
        txt="Cảm ơn bạn đã mua hàng ở cửa hàng của chúng tôi!!! Đơn hàng của bạn sẽ được chuyển đến bạn trong ít ngày tới.";
    }else{
        txt="Cảm ơn bạn đã ghé thăm cửa hàng của chúng tôi.";
    }
    alert(txt);
    closeModal();
    
    
}
window.onclick = function(event) {
var modal = document.getElementById('myModal');
if (event.target == modal) {
    modal.style.display = "none";
}
}
