var setupEvents = function(){
   /*getUsers(1)*/
   var offres = document.getElementsByClassName("offres");
   for (var i = 0; i < offres.length; i++) {
      offres[i].addEventListener('click', details);
   }
};

window.addEventListener("load", setupEvents);

// function getUsers(pageID)
// {
// var html = "" ;
// var xhr = new XMLHttpRequest();
// xhr.open("GET", "https://reqres.in/api/users?page="+pageID, true);
// xhr.onload = function()
// {
// if( xhr.status == 200)
// {
//    var response = JSON.parse(xhr.response);
//    pageNb = response.page;
//    html += "<table><tr>";
//    users = JSON.parse(xhr.response);
//    console.log(users);
//    users.data.forEach(user =>
//    html += "<td><h1>"+user.first_name+" "+user.last_name+"</h1><h2>"+user.email+"</h2>"+"<img src="+user.avatar+"></td>"
//    );
//    html += "</tr></table><br>";
//    pagePrecedente = pageNb - 1;
//    pageSuivante = pageNb + 1;
//    if(pageSuivante >= users.total_pages){
//         pageSuivante = users.total_pages;
//    }
//    html += "<a onclick='getUsers(pagePrecedente)'>Page précédente </a>";
//    html += "<a onclick='getUsers(pageSuivante)'>Page suivante</a>";
// }
// else{
//     html = "Erreur 404";
// }
// document.getElementById("js_result").innerHTML = html;
// };
// xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
// };

// //----------- CREATION D'UN UTILISATEUR -------------//
// $("#btn_jquery" ).click(function()
// {
//  $.ajax({
//  url: "https://reqres.in/api/users/",
//  type: "POST",
//  data: {name: "your_name", job: "what_you_want", place: "where_you_want"},
//  success: function(response, textStatus, xhr)
//  {
//  var html = '';
//  if( xhr.status == 201 )
//  {
//     console.log(xhr);
//     html += xhr.responseText;
//  }
//  else
//  {
//  }
//  $('#jquery_result').html(html);
//  }
//  ,error: function (xhr, ajaxOptions, thrownError)
//  {
//  $('#jquery_result').html('Error: ' + xhr.status);
//  console.log(thrownError);
//  }
//  });
// });


// Affichage des détails de l'offre
var details = function() {
   document.getElementById("before_details_offres").style.visibility = "hidden";
   document.getElementById("details_offres").style.visibility = "visible";
}