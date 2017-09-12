$('document').ready(function () {

    $(".table-row").on('click', function (e) {
        const id = $(this).find('.id').html();

        $.get("getAdditionalInformation/" + id, function (data) {
            $('.modal-body').html(data);
        });
    });

    var maximum = null;
    var minimum = null;

    $('.green').each(function () {
        var value = parseFloat($(this).attr('v'));
        maximum = (value > maximum) ? value : maximum;
        console.log(maximum);
    });

    $('.red').each(function () {
        var value = parseFloat($(this).attr('v'));
        minimum = (value < minimum) ? value : minimum;
        console.log(minimum);
    });
    $(".green[v='" + maximum + "']").parent().addClass("table-success");
    $(".red[v='" + minimum + "']").parent().addClass("table-danger");
});
