$(document).ready(function () {
    // $("FormSelect").on('submit', function(event){
    //     event.preventDefault();
    //     let dados = $(this).serialize();
    //     $.ajax({
    //         url: DIRPAGE+'cadastro/seleciona',
    //         method: 'POST',
    //         dataType: 'html',
    //         data: dados,
    //         success: function(Req){
    //             $('.Resultado').html(Req);
    //         }
    //     });
    // });
    $("#form-deletar").on('submit', function (event) {
        event.preventDefault();
        let dados = $(this).serialize();
        $.ajax({
            url: DIRPAGE + 'deletar',
            method: 'POST',
            dataType: 'html',
            data: dados,
            success: function (req) {
                if (req == 'true') {
                    $('#btn-pesquisa').click();
                }
            }
        });
    });

    $('.image-edit').on('click', function () {
        let id = $(this).attr('rel');

        var data = new FormData();
        data.append("id", id);

        fetch(DIRPAGE + 'update', {
            method: 'POST',
            body: data,
        })
            .then(res => res.json())
            .then(response => console.log('oi'));

    });

});