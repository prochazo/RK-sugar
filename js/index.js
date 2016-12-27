+function()
{
    var cards = $(".team__card");

    function initializeCard(card)
    {
        var button = card.find(".team__card__details-button");
        var body = card.find(".team__card__body");

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