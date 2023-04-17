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

setInterval(()=>{
  // Let's start Ajax
  let xhr = new XMLHttpRequest(); // creating XML object
  xhr.open("GET","assets/php/users.php", true);
  xhr.onload = ()=>{

  }
  
  }
},500); // this function will run frequently after 500ms

