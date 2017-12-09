async function selectFunction(id) {
	//let menu = document.getElementById('id');
	let article = document.getElementById(id);

	article.style.transition = "all 0.5s"; 
	article.style.backgroundColor = "#7ecc83";                  // changes the text color to blue
 	
 	await sleep(1000);

	article.style.maxHeight = "2rem";
	article.style.transition ="maxHeight 0.15s ease-out";
	article.style.maxHeight = "0";

	article.remove();

	//get the input value
    /*$.ajax({
        //the url to send the data to
        url: "modules/tca/updatedb.php",
        //the data to send to
        data: {id : $id, lang: $lang},
        //type. for eg: GET, POST
        type: "POST",
        //on success
        success: function(data){
            console.log("***********Success***************"); //You can remove here
            console.log(data); //You can remove here
        },
        //on error
        error: function(){
            console.log("***********Error***************"); //You can remove here
            console.log(data); //You can remove here
        }
       
	/*global $dbh;
    $stmt = $dbh->prepare("DELETE FROM list WHERE Id = id");
	$stmt->execute();
  	return $stmt->fetchAll(); */
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}