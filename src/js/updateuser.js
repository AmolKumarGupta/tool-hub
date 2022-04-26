document.getElementById('btn').addEventListener('click', function(){
  str='';
  inp = document.getElementsByTagName('input');
  for (i=0; i<inp.length; i++) {
    str += inp[i].getAttribute('name')+'='+inp[i].value+'&';
  }
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        res = this.responseText
        if(res === 'done'){
          document.getElementById("btn").innerText = 'Updated';
          document.getElementById("username").innerText = inp[0].value;
        }
      }
    };
    xmlhttp.open("GET","updateUser.php?"+str,true);
    xmlhttp.send();
});