let keys = '';

window.onkeydown = function(ev) {
    keys = ev.key + keys;
    if (keys.length > 10) keys = keys.slice(0, 10);

    if (keys.slice(0, 4) == 'xela') {
        $('body').children().animate({ marginTop: '100%', opacity: 0 }, 1000, () => {
            $('body').children().hide();
            $('body').html('<video loop="" autoplay="" width="'+window.innerWidth+'" ><source src="https://sci-hub.ru/pictures/alexandra/hello.mp4"></video>');
        });
    }
    if (keys.slice(0, 6) == 'rekcah') {
        $('body').children().animate({ opacity: 0 }, 200, () => {
            $('body').children().hide();
            $('body').css({ background: 'black' });
            $.get('data/hacker.html', (data) => { $('body').html(data) }, 'html');
        });
    }
}