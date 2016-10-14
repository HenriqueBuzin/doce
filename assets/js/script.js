function excluirDoce(id, obj) {


    if (id != '') {
        $(obj).closest('#exluirDoce').fadeOut();

        $.ajax({
            url: 'ajax/excluirDoce',
            type: 'POST',
            data: {id: id}


        });
    }
}



