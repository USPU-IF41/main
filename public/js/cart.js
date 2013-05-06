$(document).ready(function(){
    $.ajax({
        "url"   : "/ajax/get-cart",
        "success"   : refrashCart
    });
});
function addItem(itemId){
    $.ajax({
        "url"   : "/ajax/add-item",
        "data"  : {"itemId":itemId},
        "success"   : refrashCart
    })
}

function refrashCart(resp, code){
    console.log(resp);
    for(i in resp){
        var item = resp[i];
        $("ul.cart").prepend("<li><small>"+item.name+" - "+item.count+" шт</li>")
    }
}