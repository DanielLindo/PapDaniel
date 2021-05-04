function fillTableMarcas(txt=''){
    $.ajax({
        url:"AJAX/AJAXFillMarcas.php",
        type:"post",
        data:{
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });

}