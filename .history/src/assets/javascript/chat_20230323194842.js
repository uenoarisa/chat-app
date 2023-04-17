const form = document.querySelector('.typing-area');
const inputField = form.querySelector('.input-field');
const sendBtn = form.querySelector('button');

form.onsubmit = (e)=>{
  e.preventDefault();
}

// ボタンが押されたら
sendBtn.onclick = ()=>{
  // Let's start Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST","assets/php/insert-chat.php", true);
  // xhr.openでどんな方法で？どのサーバーに？を決める
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        inputField.value = "";
        // once message inserted into database then leave blank the input field
      }
    }
  }
  // formのデータをajaxを通してphpに送らなきゃいけない
  let formData = new FormData(form);
  // forｍDataオプジェクトを作る
  xhr.send(formData);
}

setInterval(()=>{
  // Let's start Ajax
  let xhr = new XMLHttpRequest(); // creating XML object
  xhr.open("POST","assets/php/users.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        if(!searchBar.classList.contains('active')){
          userslist.innerHTML = data;
        }
      }
  }
  }
  xhr.send();
},500); // this function will run frequently after 500ms
