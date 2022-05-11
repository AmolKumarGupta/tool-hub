document.querySelector('#btn-buy').addEventListener('click',()=>{
  document.querySelector('#form-trans').classList.toggle('hidden');
  document.querySelector('main').classList.toggle('blur-sm');
  document.querySelector('main').classList.toggle('opacity-25');
});