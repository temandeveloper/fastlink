function onToggle() {
  var slide = document.getElementById('open');
  slide.classList.toggle('aktif');
}
function closeMenu(){
    document.getElementById('open').style.height = '50px';
}
function openForm(){
    document.getElementById('popup_order').style.height = '100%';
}
function closeForm() {
    document.getElementById('popup_order').style.height = '0';
}
