$("div#vencimento").hide();

$("input[name=tipo]").on("click", function() {
    var valor = $("input[name=tipo]:checked").val();

    if(valor == "Perecível"){
        $("div#vencimento").show();
        $("input[name=venc]").prop('required',true);
    } else if(valor == "Imperecível"){
        $("div#vencimento").hide();
        $("input[name=venc]").val('');
        $("input[name=venc]").prop('required',false);
    }
})
