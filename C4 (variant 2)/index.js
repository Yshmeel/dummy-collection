const renderButton = document.querySelector('#render-button');

renderButton.addEventListener('click', function() {
    window.document.designMode = "On";
    window.document.execCommand("hiliteColor", 'red', "yellow", 'red');
    window.document.designMode = "Off";

    document.querySelectorAll('span').forEach((a) => {
        a.style.color = 'red';
    });
});