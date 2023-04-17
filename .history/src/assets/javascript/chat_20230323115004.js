
const form = document.querySelector('.typing-area');
const inputField = form.querySelector('button');
const sendBtn = form.querySelector('button');

sendBtn.onclick = ()=>{
  // Let's start Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST","assets/php/chat.php", true);
  // xhr.openでどんな方法で？どのサーバーに？を決める
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        console.log(data);
        if(data == "success"){
          location.href = 'users.php'
        }else{
          errorText.textContent = data;
          errorText.style.display = 'block';
        }
        // signup.phpでechoで返している情報がコンソールで表示されている
      }
    }
  }
  // formのデータをajaxを通してphpに送らなきゃいけない
  let formData = new FormData(form);
  // forｍDataオプジェクトを作る
  xhr.send(formData);
}