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
6. xhr.onreadystatechange = function() {
7. if (xhr.readyState === 4 && xhr.status === 200) {
8
9. //データを取得後の処理を書く
10. }
11. }

}