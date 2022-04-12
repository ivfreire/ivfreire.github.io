window.onload = () => {
    $.get('code/counter.php?id=0', (count) => $('footer').append(`<p style='color: rgba(0, 0, 0, 0.4);'>${count} visitantes.</p>`));
}