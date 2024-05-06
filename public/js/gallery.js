$(document).ready(function () {
    $(".option").click(function () {
        $(".option").removeClass("active");
        $(".option").find(".image").removeClass('active-image');
        $(this).addClass("active");
        $(this).find(".image").addClass('active-image');
        $(".description").hide(); // Hide all descriptions
        $(this).find(".description").show(); // Show description of clicked image
    });
});
