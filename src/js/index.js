document.getElementById('navBtn').addEventListener('click',() => {
  document.getElementById('navItems').classList.toggle('hidden');
});
document.querySelector(".dark-mode-icon").addEventListener('click',() =>{
  Array.from(document.getElementsByClassName('icon')).forEach( i => {
    i.classList.toggle('icon-hidden');
  });
});