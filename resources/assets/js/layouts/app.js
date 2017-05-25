$(function () {

// fix menu when passed
    $('.menu-top')
        .visibility({
            context: '#app',
            once: false,
            onBottomPassed: function () {
                $('.fixed.menu').transition('fade in');
            },
            onBottomPassedReverse: function () {
                $('.fixed.menu').transition('fade out');
            }
        })
    ;

// create sidebar and attach to menu open
    $('.ui.sidebar')
        .sidebar({context: '#app'})
        .sidebar('attach events', '.burger.item')
        .sidebar('setting', 'transition', 'overlay')
    ;

    $('.ui.dropdown')
        .dropdown({context: '#app'});

    $('.ui.accordion')
        .accordion({context: '#app'});

    $('.ui.checkbox')
        .checkbox({context: '#app'})
    ;


});