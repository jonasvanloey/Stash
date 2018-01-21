$(".collapseHeader").click(function () {
    $collapseHeader = $(this);
    $collapseContent = $collapseHeader.next();
    $collapseContent.slideToggle(500, function() {

    });
});