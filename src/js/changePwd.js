document.querySelector('#form').addEventListener('submit', function(e){
  e.preventDefault();
  // console.log(e.target[0].value);
  const params = new URLSearchParams({
    oldPwd: e.target[0].value,
    password: e.target[1].value,
    cpassword: e.target[2].value,
  })  
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        res = this.responseText
        msg = document.querySelector('#msg');
        success = document.querySelector('#success');
        if(res!=='1'){
          msg.innerText = res;
          msg.classList.remove('hidden');
          success.classList.add('hidden');
        }else{
          msg.classList.add('hidden');
          success.classList.remove('hidden');
        }
      }
    };
    xmlhttp.open("POST","changePwd.php",true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(params.toString());
});