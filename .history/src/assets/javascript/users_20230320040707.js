/*===========================================================*/
/*チャットするユーザーの検索*/
/*===========================================================*/

const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
userslist = document.querySelector(".users-list");

searchBtn.onclick = ()=>{
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
}

// せ
searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/search.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}


setInterval(()=>{
  // Let's start Ajax
  let xhr = new XMLHttpRequest(); // creating XML object
  xhr.open("GET","assets/php/users.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        userslist.innerHTML = data;
      }
  }
  }
  xhr.send();
},500); // this function will run frequently after 500ms

