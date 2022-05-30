if(document.querySelector('#btn-buy')){ 
  document.querySelector('#btn-buy').addEventListener('click',()=>{
    document.querySelector('#form-trans').classList.toggle('hidden');
    document.querySelector('main').classList.toggle('blur-sm');
    document.querySelector('main').classList.toggle('opacity-25');
  });
}

if(document.querySelector('#btn-cart-buy')){ 
  document.querySelector('#btn-cart-buy').addEventListener('click',()=>{
    document.querySelector('#form-trans').classList.toggle('hidden');
    document.querySelector('section').classList.toggle('blur-sm');
    document.querySelector('section').classList.toggle('opacity-25');
  });
}