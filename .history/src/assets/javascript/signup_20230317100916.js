/*===========================================================*/
/* Ajax通信してサインアップする*/
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
  xhr.onload
}

}
// 通常、「readyState」の値が「4」であれば、データを取得して通信が終了している状態のため、この数値を使用します。

// また、「State」の数値が「200」になったら、特に問題なく通信が成功した状態になったことになるのです。

// 「200」になったらデータ取得処理を実行するようにプログラミングを行いましょう。

// 「&&」を使用して「readyState」と「status」を別々に条件分岐するより、同時に確認する方が効率的です。