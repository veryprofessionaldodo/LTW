'use strict';
async function selectFunctionList(id) {
	//let menu = document.getElementById('id');
	let article = document.getElementById("list"+id);

	article.style.transition = "all 0.5s";
	article.style.backgroundColor = "#7ecc83";                  // changes the text color to blue

 	await sleep(1000);

	article.style.maxHeight = "2rem";
	article.style.transition ="maxHeight 0.15s ease-out";
	article.style.maxHeight = "0";

	article.remove();

	let request = new XMLHttpRequest();
	//request.addEventListener('load', working);
	request.open('POST', 'delete_list.php', true);
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	request.send(encodeForAjax({id:id}));

}

function working(){
    alert(this.responseText);
}

async function selectFunctionItem(id) {
    //let menu = document.getElementById('id');
    let item = document.getElementById("item"+id);

    item.style.transition = "all 0.5s";
    item.style.backgroundColor = "#7ecc83";                  // changes the text color to blue

    await sleep(1000);

    item.style.maxHeight = "2rem";
    item.style.transition ="maxHeight 0.15s ease-out";
    item.style.maxHeight = "0";

    item.remove();

    let request = new XMLHttpRequest();
    //request.addEventListener('load', working);
    request.open('POST', 'delete_item.php', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(encodeForAjax({id:id}));
}

function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}

function addNewTask() {
    let popup = document.getElementById("popup");
    popup.style.visibility="visible";
}

function clearPopup() {
    let popup = document.getElementById("popup");
    popup.style.visibility="hidden";
}

function addNewItem() {
    let popup = document.getElementById("popupItem");
    popup.style.visibility="visible";
}

function clearPopupItem() {
    let popup = document.getElementById("popupItem");
    popup.style.visibility="hidden";
}

function editProfile() {
    let popup = document.getElementById("editProfile");
    popup.style.visibility="visible";
}

function clearEditProfilePopup() {
    let popup = document.getElementById("editProfile");
    popup.style.visibility="hidden";
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function addListToDatabase(title, date, category) {
    let popup = document.getElementById("popup");
    popup.style.visibility="hidden";

    let request = new XMLHttpRequest();
    //request.addEventListener('load', working);
    request.open('POST', 'add_list.php', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(encodeForAjax({title:title,date:date,category:category}));
    window.location.reload(true);

}

function addItemToDatabase(id) {
    let popup = document.getElementById("popupItem");

		let date = document.getElementById("dataNewItem").value;
		let content = document.getElementById("contentNewItem").value;

    popup.style.visibility="hidden";

    let request = new XMLHttpRequest();
    //request.addEventListener('load', working);
    request.open('POST', 'add_item.php', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(encodeForAjax({id:id,date:date,content:content}));
    window.location.reload(true);
}

function logout() {

	let request = new XMLHttpRequest();
	//request.addEventListener('load', working);
	request.open('POST', 'action_logout.php', true);
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	request.send();
	window.location.href = '../index.php';
}

let filterTodayButton = document.querySelector("#mainTasksTabs button[name=tabToday]");
if (filterTodayButton != null) {
    filterTodayButton.addEventListener('click', filterToday);
}
let filterweekButton = document.querySelector("#mainTasksTabs button[name=tabWeek]");
if (filterweekButton != null) {
    filterweekButton.addEventListener('click', filterWeek);
}
let filterAllButton = document.querySelector("#mainTasksTabs button[name=tabAll]");
if (filterAllButton != null) {
    filterAllButton.addEventListener('click', filterAll);
}

function buildDateFromStr(dateStr) {
    let years = dateStr.substr(0, 4);
    let months = dateStr.substr(5, 2) - 1;
    let days = dateStr.substr(8, 2);
    return new Date(years, months, days);
}

function filterToday(event) {
    let currentDate = new Date();
    let tasks = document.querySelectorAll("#mainArea .task");
    for (let i=0; i<tasks.length; i++) {
        if (buildDateFromStr(tasks[i].children[1].textContent) == currentDate) {
            tasks[i].style.display = "grid";
        } else {
            tasks[i].style.display = "none";
        }

    }

}

function filterWeek(event) {
    let currentDate = new Date();
    let dd = new Date().setDate(currentDate.getDate() + 7);
    let dddd = new Date(dd);
    let tasks = document.querySelectorAll("#mainArea .task");
    for (let i=0; i<tasks.length; i++) {
        if (buildDateFromStr(tasks[i].children[1].textContent) < dddd) {
            tasks[i].style.display = "grid";
        } else {
            tasks[i].style.display = "none";
        }

    }

}

function filterAll(event) {
    let currentDate = new Date();
    let tasks = document.querySelectorAll("#mainArea .task");
    for (let i=0; i<tasks.length; i++) {
            tasks[i].style.display = "grid";
    }
}




/* function filtertoday(){

let popup = document.



} */
