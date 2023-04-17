const form = document.querySelector('.typing-area');
const inputField = form.querySelector('');
const sendBtn = form.querySelector('button');

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