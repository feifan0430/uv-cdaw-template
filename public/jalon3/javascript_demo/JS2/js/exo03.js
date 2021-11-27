"use strict";

function modify(e)
{
    alert(e.type +" on modify for " + e.currentTarget.parentNode.id + " !");
    let monnoeud = document.getElementById(e.currentTarget.parentNode.id);
    monnoeud.innerHTML = "Chaîne modifiée!!";
}

function deleter(e)
{
    alert(e.type +" on remove for " + e.currentTarget.parentNode.id + " !");
    let monnoeud = document.getElementById(e.currentTarget.parentNode.id);
    monnoeud.style.visibility = "hidden";
}

document.getElementById("addNew").addEventListener("click", function(e){
    alert(e.type +" on add !");
    // Etape1
    var monnoeud = document.getElementById('users'); 
    var user4 = document.createElement('div');
    user4.id = "user4";
    monnoeud.appendChild(user4);
    // Etape2
    var monnoeud = document.getElementById('user4');
    var user4_title = document.createElement('h4');
    user4_title.innerText = "Title4";
    monnoeud.appendChild(user4_title);
    // Etape3
    var monnoeud = document.getElementById('user4');
    var user4_content = document.createElement('p');
    user4_content.innerText = "Content4";
    monnoeud.appendChild(user4_content);
    // Etape4
    var monnoeud = document.getElementById('user4');
    var user4_modify = document.createElement('button');
    user4_modify.className = "modify";
    user4_modify.addEventListener("click", modify);
    user4_modify.innerText = "Modify Comment";
    monnoeud.appendChild(user4_modify);
    // Etape5
    var monnoeud = document.getElementById('user4');
    var user4_remove = document.createElement('button');
    user4_remove.className = "remove";
    user4_remove.addEventListener("click", deleter);
    user4_remove.innerText = "Remove Comment"
    monnoeud.appendChild(user4_remove);
})

let modifiers = document.getElementsByClassName("modify");
Array.from(modifiers).forEach(m => m.addEventListener("click",modify));

let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));