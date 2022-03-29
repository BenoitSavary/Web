// Variables globales
var globalPageID;

// Fonctions de démarrage
var setupEvents = function(){
   getUsers(1);
};

// Lancement des fonctions de base au chargement de la page
window.addEventListener("load", setupEvents);

// Fonction principale pour naviguer entre les pages
function getUsers(pageID)
{
   pagination();
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "https://reqres.in/api/users?page="+pageID, true);
   xhr.onload = function()
   {
   if(xhr.status == 200)
   {
      var response = JSON.parse(xhr.response);
      globalPageID = response.page;
      users = JSON.parse(xhr.response);
      users.data.forEach(user =>
      html += "<div id='"+user.id+"' class='col'><div class='card shadow-sm' ><img width='100px' height='auto' src='"+user.avatar+"' class='card-img-top' alt='Image de présentation'><div class='card-body'><p class='card-text'>"+user.first_name+"</p><small id='stars'><i id='star_1' class='fa-solid fa-star'></i><i id='star_2' class='fa-solid fa-star'></i><i id='star_3' class='fa-regular fa-star'></i><i id='star_4' class='fa-regular fa-star'></i><i id='star_5' class='fa-regular fa-star'></i></small></div></div></div>");
      pagePrecedente = pageID - 1;
      pageSuivante = pageID + 1;
      if(pageSuivante >= users.total_pages){
         pageSuivante = users.total_pages;
      }
      if(pagePrecedente <= 1){
         pagePrecedente = 1;
      }
      if(html==""){
         html = "Aucun résultat."
      }
   }
   else{
      html = "Erreur 404";
   }
   document.getElementById("liste_entreprises").innerHTML = html;
   i=1;
   while (i<=users.total_pages){
      document.getElementById("page_"+i).className = " ";
      i++;
   }
   document.getElementById("page_"+pageID).className = "active";
   };
   xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};

// Création de la pagination
function pagination()
{
var html = "" ;
var xhr = new XMLHttpRequest();
xhr.open("GET", "https://reqres.in/api/users?page="+1, true);
xhr.onload = function()
{
if(xhr.status == 200)
{
   var response = JSON.parse(xhr.response);
   users = JSON.parse(xhr.response);
   html += "<a href='#' onclick='getUsers(pagePrecedente)'>&laquo;</a>";
   var i = 1;
   while (i<=users.total_pages){
      html+="<a id='page_"+i+"' class=' ' href='#' onclick='getUsers(id.substr(5))'>"+i+"</a>";
      i++;
   }
   html += "<a href='#'' onclick='getUsers(pageSuivante)'>&raquo;</a>";
}
else{
    html = "Erreur 404";
}
document.getElementById("pagination").innerHTML = html;
};
xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};

function recherche ()
{
   document.getElementById("pagination").innerHTML = "";
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "https://reqres.in/api/users?page="+1, true);
   xhr.onload = function()
   {
   if(xhr.status == 200)
   {
      console.log('m');
      var response = JSON.parse(xhr.response);
      users = JSON.parse(xhr.response);
      users.data.forEach(user =>
      {if(user.first_name.search(document.getElementById("searchbar").value) != -1){
         console.log('ty');
         html += "<div id='"+user.id+"' class='col'><div class='card shadow-sm' ><img width='100px' height='auto' src='"+user.avatar+"' class='card-img-top' alt='Image de présentation'><div class='card-body'><p class='card-text'>"+user.first_name+"</p><small id='stars'><i id='star_1' class='fa-solid fa-star'></i><i id='star_2' class='fa-solid fa-star'></i><i id='star_3' class='fa-regular fa-star'></i><i id='star_4' class='fa-regular fa-star'></i><i id='star_5' class='fa-regular fa-star'></i></small></div></div></div>";
      }});
      if(html==""){
         html = "Aucun résultat."
      }
      if(document.getElementById("searchbar").value == ""){
         getUsers(1);
      }
   }
   else{
      html = "Erreur 404";
   }
   document.getElementById("liste_entreprises").innerHTML = html+"<br><br><br><br><br><br><br><br><br><br>";
   };
   xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
}