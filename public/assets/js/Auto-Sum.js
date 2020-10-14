$(document).ready(function(){
    $('.qty').ready(function(){
        $('.harga').ready(function(){
            $(this).keyup(function(){
                calculateTotal();
            });
        }); 
    });
});

function calculateTotal(){
    var qty = document.getElementById('qty');
    var harga = document.getElementById('harga');
    var tot = 0;

    if(parseInt(qty.value) && parseInt(harga.value))
        tot = qty.value*harga.value;
    
    document.getElementById('jumlah').value = tot;
}
