$(document).ready(function () {
    let defaultOption = $("#typeSelect option:selected").val();
    var targetBox = $("." + defaultOption);
    $(".select").not(targetBox).hide();
    $(targetBox).show();
});


$(document).ready(function () {
    $('#typeSelect').change(function () {
        let chosenType = $(this).val();
        var targetBox = $("." + chosenType);
        $(".select").not(targetBox).hide();
        $(targetBox).show();
    });
});


// $(document).ready(function() {
//        $('ul.navbar-nav > li').click(function(e) {
//         e.preventDefault();
//         $('ul.navbar-nav > li').removeClass('active');
//         $(this).addClass('active');
//     });
// });


$(document).ready(function () {
    $('#actionSelect').change(function () {
        let chosenType = $(this).val();
        var targetBox = $("." + chosenType);
        let checkboxes = $(".checkbox");
        if (chosenType === "massDelete") {
            $(".grouped").not(targetBox).show();
            $(checkboxes).show();
        } else {
            $(".grouped").not(targetBox).hide();
            $(targetBox).show();
            $(checkboxes).hide();
        }
    });
});


$(document).ready(function () {
    if (document.URL.endsWith("new")) {
        $('.navbar-brand').text("Add product");
    }
});


