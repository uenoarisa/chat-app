/*===========================================================*/
/**/
/*===========================================================*/
const form = document.querySelector(".signup form"),
continueBtn = form.querySelector('.button input')

form.onsubmit = (e)=>{
  e.preventDefault();
  // 現在のurlにフォームの送信が行われるとページがリロードされちゃう。だからデフォルトの動作をキャンセル
}

continueBtn.onclick = ()=>{
  // Let's start Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST","php/signup.php", true);
  // xhr.openでどんな方法で？どのサーバーに？を決める
  xhr.send();
  xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
}


}