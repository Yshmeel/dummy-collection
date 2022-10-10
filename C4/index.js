const renderButton = document.querySelector('#render-button');

renderButton.addEventListener('click', function() {
    let selection= window.getSelection().getRangeAt(0);
    let selectedContent = selection.extractContents();
    var span= document.createElement("span");
    span.style.backgroundColor = "yellow";
    span.style.color = "red";
    span.appendChild(selectedContent);
    selection.insertNode(span);
});