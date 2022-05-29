btns = document.querySelectorAll('.delete-btn');

for(i=0; i<btns.length; i++){
  btns[i].addEventListener('click',function(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET','deleteProduct.php?d='+this.dataset.id);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function(){
    if( this.readyState ==4 && this.status ==200){
      // btns[i].parentElement.parentElement.parentElement.remove();
      // arrange();
      location.reload();
    }else{
      console.log('error');
    }
    };
  });
}
function arrange(){
  t = document.querySelector('tbody');
  tr = t.children;
  for(i=0; i<tr.length; i++){
    tr[i].children[0].innerText = i+1+offset;
  }
}