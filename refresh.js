const reloadButton = document.querySelector('#reload');
function reload(){
    reload = location.reload();
}
reloadButton.addEventListener("click", reload, false);