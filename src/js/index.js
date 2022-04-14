if(localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark')
}else{
  document.documentElement.classList.remove('dark')
}
document.getElementById('navBtn').addEventListener('click',() => {
  document.getElementById('navItems').classList.toggle('hidden');
});
document.querySelector(".dark-mode-icon").addEventListener('click',() =>{
  Array.from(document.getElementsByClassName('icon')).forEach( i => {
    i.classList.toggle('icon-hidden');
  });
  document.documentElement.classList.toggle('dark');
  localStorage.theme = document.documentElement.classList.contains('dark')?'dark':'light';
});