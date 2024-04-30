$(function() {
    $('#open-menu').click(function() {
        $('#open-menu').hide();
        $(".header-nav-list").show();
    })

    $('#close-nav').click(function() {
        $('#open-menu').show();
        $(".header-nav-list").hide();
    })

    // story nav
    $('#fullpage-story-menu').hide();

    $('#story-nav-btn').click( function() {
        $('#fullpage-story-menu').show();
    })

    $('#close-story-menu-btn').click(function() {
        $('#fullpage-story-menu').hide();
    });
});