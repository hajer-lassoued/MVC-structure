(function()
{
    var navTopPadding = parseInt($('nav.main_navigation').css('padding-top'), 10);
    var navBottomPadding = parseInt($('nav.main_navigation').css('padding-bottom'), 10);
    var navHeightToExclude = navTopPadding + navBottomPadding;
    $('nav.main_navigation').height($(window).height() - $('header.main').height() - navHeightToExclude - 1);

    var contentTopPadding = parseInt($('div.action_view').css('padding-top'), 10);
    var contentBottomPadding = parseInt($('div.action_view').css('padding-bottom'), 10);
    var contentHeightToExclude = contentTopPadding + contentBottomPadding;
    $('div.action_view').height($(window).height() - $('header.main').height() - contentHeightToExclude - 1);

    if (getCookie('menu_opened') == "true") {
        $('a.menu_switch').attr('data-menu-status', 'true');
        $('a.menu_switch').addClass('opened');
        $('nav.main_navigation').addClass('opened');
        $('div.action_view').addClass('collapsed');
    }

})();

$('a.menu_switch').click(function(evt)
{
    evt.preventDefault();
    if($(this).attr('data-menu-status') == 'false') {
        $(this).attr('data-menu-status', 'true');
        $(this).addClass('opened');
        $('nav.main_navigation').addClass('opened');
        $('div.action_view').addClass('collapsed');
        if(getCookie('menu_opened') =="") {
            setCookie('menu_opened', true, 180, 'mvc.local');
        }
    }
    else {
        $(this).attr('data-menu-status', 'false');
        $(this).removeClass('opened');
        $('nav.main_navigation').removeClass('opened');
        $('div.action_view').removeClass('collapsed');
        deleteCookie('menu_opened', 'mvc.local');
    }

});