function busca(value,targetSelector){
    $(targetSelector).show();
    $(targetSelector+':not(:contains("'+ value +'"))').hide();
}


$('#search').keyup(function () {
   busca($(this).val(), '.linhas');
})