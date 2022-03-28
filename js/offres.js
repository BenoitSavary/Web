// Variables globales
var globalPageID;

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
   xhr.open("GET", "https://reqres.in/api/users?page="+pageID, true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var response = JSON.parse(xhr.response);
      globalPageID = response.page;
      users = JSON.parse(xhr.response);
      users.data.forEach(user =>
      html += "<div id='"+user.id+"' class='offres' style='width:97%; height: 100px;' onclick='details(this.id);'><b><p class='p_offres'>"+user.first_name+"</p></b><b><p class='p_offres'>"+user.last_name+"</p></b><b><p class='p_offres'>"+user.email+"</p></b><b><p class='accroche_offres'>Accroche</p></b><div class='rating'><div class='stars'><i id='star_1' class='fa-solid fa-star'></i><i id='star_2' class='fa-solid fa-star'></i><i id='star_3' class='fa-regular fa-star'></i><i id='star_4' class='fa-regular fa-star'></i><i id='star_5' class='fa-regular fa-star'></i></div></div></div>");
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
   document.getElementById("section_offres").innerHTML = html;
   i=1;
   while (i<=users.total_pages){
      document.getElementById("page_"+i).className = " ";
      i++;
   }
   document.getElementById("page_"+pageID).className = "active";
   };
   xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};


// Affichage des détails de l'offre
var details = function(id) {
   document.getElementById("before_details_offres").style.visibility = "hidden";
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "https://reqres.in/api/users?page="+globalPageID, true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var response = JSON.parse(xhr.response);
      pageNb = response.page;
      users = JSON.parse(xhr.response);
      users.data.forEach(user =>
         {if(user.id == id){
            document.getElementById("details_offres").innerHTML = "<div id='rappel' style='width: 98%; height: 15%;'><p>"+user.email+"</p></div><div id='details' style='width: 98%; height: 74%;'><p></p></div>";
            document.getElementById("details_offres").style.visibility = "visible";
         };});
   }
   else{
       html = "Erreur 404";
   }
   };
   xhr.send()
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
   html += "<a href='#' onclick='getUsers(pagePrecedente); actualiserOffres()'>&laquo;</a>";
   var i = 1;
   while (i<=users.total_pages){
      html+="<a id='page_"+i+"' class=' ' href='#' onclick='getUsers(id.substr(5)); actualiserOffres()'>"+i+"</a>";
      i++;
   }
   html += "<a href='#'' onclick='getUsers(pageSuivante); actualiserOffres()'>&raquo;</a>";
}
else{
    html = "Erreur 404";
}
document.getElementById("pagination").innerHTML = html;
};
xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};

// Actualiser Offres (reset scroll)
function actualiserOffres() {
   document.getElementById("section_offres").scrollTo(0,0);
}