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

isKeyPressed = {
  'a':false, //main key used in every shortcut
  'p':false, //redirect to products page
  'h':false, //redirect to home page
  'd':false, //toggle dark mode
}
isValid=true;
form = document.querySelector('form');
if(form){ form.onkeydown = ()=>{isValid = false}; form.onkeyup = ()=>{isValid = true}}
document.onkeydown = (e)=>{
  isKeyPressed[e.key] = true;
  if(isKeyPressed['a'] && isKeyPressed['p'] && isValid){
    window.location.href = `${config.path}/products.php`;
  }
  if(isKeyPressed['a'] && isKeyPressed['d'] && isValid){
    document.querySelector('.dark-mode-icon').click();
  }
  if(isKeyPressed['a'] && isKeyPressed['h'] && isValid){
    window.location.href = `${config.path}/`;
  }
};
document.onkeyup = (e)=>{
  isKeyPressed[e.key] = false;
};