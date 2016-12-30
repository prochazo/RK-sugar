+function()
{
    var cards = $(".recenze__card");

    function initializeCard(card)
    {
        var button = card.find(".recenze__card__details-button");
        var body = card.find(".recenze__card__body");

        button.click(function()
        {
            body.slideToggle(500);
        });
    }

    for (var i = 0; i < cards.length; i++)
    {
        initializeCard($(cards[i]));
    }
}();