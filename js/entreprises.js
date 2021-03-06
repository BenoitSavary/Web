// Variables globales
var itemsMax = 3;
var pageID;
var nombrePages;
var m;

// Fonctions de démarrage
var setupEvents = function(){
   pagination();
   getUsers(1);
};

// Lancement des fonctions de base au chargement de la page
window.addEventListener("load", setupEvents);

// Fonction principale pour naviguer entre les pages
function getUsers(pageID)
{
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "https://reqres.in/api/users?page="+1, true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var maximum = itemsMax*pageID;
      var minimum = maximum-itemsMax;
      console.log(maximum);
      console.log(minimum);
      var response = JSON.parse(xhr.response);
      users = JSON.parse(xhr.response);
      m = 0;
      users.data.forEach(user =>
      {
         console.log(m);
         if(m<minimum){
            m++;
         }
         else if(m>=minimum && m<maximum){
            html += "<div id='"+user.id+"' class='col' style='cursor: pointer;' onClick='window.location.href=\"Fiche_entreprise.php?ent="+user.id+"\"'><div class='card shadow-sm' ><img width='100px' height='auto' src='"+user.avatar+"' class='card-img-top' alt='Image de présentation'><div class='card-body'><p class='card-text'>"+user.first_name+"</p><small id='stars'><i id='star_1' class='fa-solid fa-star'></i><i id='star_2' class='fa-solid fa-star'></i><i id='star_3' class='fa-regular fa-star'></i><i id='star_4' class='fa-regular fa-star'></i><i id='star_5' class='fa-regular fa-star'></i></small></div></div></div>";
            m++;
         }
      });
      pagePrecedente = pageID - 1;
      pageSuivante = pageID + 1;
      if(pageSuivante >= nombrePages){
           pageSuivante = nombrePages;
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
   while (i<nombrePages){
      document.getElementById("page_"+i).className = "mlkj";
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
if( xhr.status == 200)
{
   var response = JSON.parse(xhr.response);
   users = JSON.parse(xhr.response);
   html += "<a href='#' onclick='getUsers(pagePrecedente);'>&laquo;</a>";
   html+="<a id='page_1' class=' ' href='#' onclick='getUsers(id.substr(5));'>"+1+"</a>";
   var i = 1;
   var j = 2;
   users.data.forEach(user =>

   {if (i<=itemsMax){
      i++;
   }
   else {
      html+="<a id='page_"+j+"' class=' ' href='#' onclick='getUsers(id.substr(5));'>"+j+"</a>";
      i = 2;
      j++;
   }});
   nombrePages = j;
   }
   html += "<a href='#'' onclick='getUsers(pageSuivante);'>&raquo;</a>";

// else {
//    html = "Erreur 404";
// }
document.getElementById("pagination").innerHTML = html;
};
xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};


// Fonction de recherche
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
         pagination();
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