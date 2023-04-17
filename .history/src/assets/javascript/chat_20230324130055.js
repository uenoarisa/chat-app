const form = document.querySelector('.typing-area');
const inputField = form.querySelector('.input-field');
const sendBtn = form.querySelector('button');
const chatbox = document.querySelector('.chat-box');
const incoming_id = form.querySelector(".incoming_id").value;


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
  xhr.open("POST","assets/php/get-chat.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        chatbox.innerHTML = data;
      }
      // if(!chatBox.classList.contains("active")){
      //   scrollToBottom();
      // }
  }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("incoming_id="+incoming_id);
},500); // this function will run frequently after 500ms


function scrollToBottom(){
  chatbox.scrollTo = chatbox.
}
