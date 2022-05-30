addtocart = document.querySelector('#addtocart-section');

addtocart.addEventListener('click',add);

store = JSON.parse(localStorage.getItem('cart'));
if(store){

    if(store.find( (e)=>{ return e == addtocart.dataset.id; }))
    {
        console.log('add already');
        addtocart.innerText = 'Added';
        addtocart.removeEventListener('click', add);
    }
}

function add(e) {
    this.innerText = 'Added';
    store = JSON.parse(localStorage.getItem('cart'));
    
    if(store){
        store.push(this.dataset.id);
    }else{
        store = [];
        store.push(this.dataset.id);
    }
    localStorage.setItem('cart', JSON.stringify(store));
    console.log('STORE:' + store);
    addtocart.removeEventListener('click', add);
}


// console.log(e);