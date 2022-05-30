'use strict'
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");

sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");

}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

/* menu toggle */
function show_list() {
    var courses = document.getElementById("menu");

    if (courses.style.display == "block") {
        courses.style.display = "none";
    } else {
        courses.style.display = "block";
    }
}
window.onclick = function (event) {
    if (!event.target.matches('.drop')) {
        document.getElementById('menu').style.display = "none";
    }
} 

function show_list2() {
    var courses = document.getElementById("menu2");

    if (courses.style.display == "block") {
        courses.style.display = "none";
    } else {
        courses.style.display = "block";
    }
}
window.onclick = function (event) {
    if (!event.target.matches('.drop')) {
        document.getElementById('menu2').style.display = "none";
    }
} 

function show_list3() {
    var courses = document.getElementById("menu3");

    if (courses.style.display == "block") {
        courses.style.display = "none";
    } else {
        courses.style.display = "block";
    }
}
window.onclick = function (event) {
    if (!event.target.matches('.drop')) {
        document.getElementById('menu3').style.display = "none";
    }
}
function show_list1() {
    var courses = document.getElementById("menu1");

    if (courses.style.display == "block") {
        courses.style.display = "none";
    } else {
        courses.style.display = "block";
    }
}
window.onclick = function (event) {
    if (!event.target.matches('.drop')) {
        document.getElementById('menu1').style.display = "none";
    }
} 