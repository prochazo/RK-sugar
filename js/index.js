+function()
{
    var cards = $(".team__card");

    for (var i = 0; i < cards.length; i++)
    {
        var button = $(cards[i]).find(".team__card__details-button");
        var body = $(cards[i]).find(".team__card__body");

        button.click(function()
        {
            body.slideToggle(500);
        });
    }
}();