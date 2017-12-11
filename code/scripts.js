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
}

function addNewTask() {
    var popup = document.getElementById("popup");
    popup.style.visibility="visible";
}

function clearPopup() {
    var popup = document.getElementById("popup");
    popup.style.visibility="hidden";   
}

function addNewItem() {
    var popup = document.getElementById("popupItem");
    popup.style.visibility="visible";
}

function clearPopupItem() {
    var popup = document.getElementById("popupItem");
    popup.style.visibility="hidden";   
}

function editProfile() {
    var popup = document.getElementById("editProfile");
    popup.style.visibility="visible";
}

function clearEditProfilePopup() {
    var popup = document.getElementById("editProfile");
    popup.style.visibility="hidden";   
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function addListToDatabase(title, date, category) {
    var popup = document.getElementById("popup");
    popup.style.visibility="hidden";   
}

function addItemToDatabase(id, date, content) {
    var popup = document.getElementById("popup");
    popup.style.visibility="hidden";      
}