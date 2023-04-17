/*===========================================================*/
/*チャットするユーザーの検索*/
/*===========================================================*/

const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
userslist = document.querySelector(".users-list");


searchBtn.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchBtn.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

// onkeyup は、ユーザーがキーボードからキーを離したときに発生するJavaScriptのイベントです。つまり、キーボードからの入力があるたびに、このイベントが発生します。一般的に、テキストボックスにテキストを入力するために使用されます。
searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "assets/php/search.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          userslist.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
  // これは、XMLHttpRequestのリクエストヘッダーに"Content-type"を設定し、送信するデータを指定しているコードです。"Content-type"は、送信するデータの種類を指定するヘッダーで、この場合は"application/x-www-form-urlencoded"となっています。また、send()メソッドの引数として、キーバリュー形式で"searchTerm"というキーに、searchBarの値を代入しています。これにより、サーバー側でsearch.phpを受信した際に、searchTermという変数にsearchBarの値が代入されます。
}


setInterval(()=>{
  // Let's start Ajax
  let xhr = new XMLHttpRequest(); // creating XML object
  xhr.open("GET","assets/php/users.php", true);
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
},50000); // this function will run frequently after 500ms

