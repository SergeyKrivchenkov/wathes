// $('.box .dropdoun div ul').on('click', 'li', function () {
//     console.log(2434);
// });

/*
$('option[data-code]').each(function (indexOpt, valueOpt) {
    // console.log(valueOpt);
    let code = $(this).data('code');

    $('.box .dropdown div ul li').each(function (indexLi) {
        if (indexOpt == indexLi) {
            $(this).data('code', code);
        }
    })
    console.log($(this).data('code'));
});


$('.box').on('click', 'li.active', function () {
    console.log($(this).text());// выводит конкретно то на что кликнули
});
*/

$(".box").on("click", "li.active", function () {
    $("option[data-code]").each(function (indexOpt) {
        let code = $(this).data("code");
        $(".box div li").each(function (indexLi) {
            if (indexOpt == indexLi) {
                $(this).attr("data-code", code);
            }
        });
    });
    // console.log($(".box li.active").data("code"));
    const curCurrency = ($(this).attr("data-code"));
    changeCurrency(curCurrency);


});

function changeCurrency(cur) {
    $.ajax({
        type: 'POST',
        url: 'changeCurrency',// запрос уйдет на главную стр
        data: {
            cur: cur // ключ значения cur: EUR, если название ключа совподает с названием переменной задоющей значение то запись можно сокротить до одной стр data: {cur},
        }
    }).done(function (resp) // то что должно произойти
    {
        console.log(resp);
    })
}













// $('body').click(function () {
//     alert(242);
// });