document.querySelector('#form').addEventListener('submit', function(e){
  e.preventDefault();
  // console.log(e.target[0].value);
  const params = new URLSearchParams({
    pwd: e.target[0].value
  })
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        res = this.responseText
        if(res == 1){
          alert('You account is successfully deleted.');
          window.location = "profile.php";
        }else{
          alert(res);
        }
      }
    };
    xmlhttp.open("POST","delUser.php",true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(params.toString());
    // xmlhttp.send(`pwd=${URLSearchParams(e.target[0].value)}`);
});