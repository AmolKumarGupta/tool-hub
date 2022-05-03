if('Notification' in window){
  if(Notification.permission==='granted'){
    var notification = new Notification('Watch Latest App',{
      body:'Go to Products page',
      icon:'assets/favicon/favicon-32x32.png',
      badge:'assets/favicon/favicon-32x32.png',
    });
  }
  else if(Notification.permission !== 'denied'){
    Notification.requestPermission().then( function(per){
      if(per==='granted'){
        var notification = new Notification('hi there');
      }
    });
  }
  notification.onclick = (e)=>{
    e.preventDefault();
    window.location.href = 'products.php';
  }
}