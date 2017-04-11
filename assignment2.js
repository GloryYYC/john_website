//product list that list out the preduct
var productList = ["Product Plan 1", "Product Plan 2", "Product Plan 3", "Product Plan 4"];
//function that change product picture on click
function change(clicked_id) {
    //changing the image with src
    document.getElementById("contentPic").src = "img/" + productList[clicked_id] + ".jpg";
    //change the product name
    document.getElementById("contentTitle").innerHTML = "This is " + productList[clicked_id] + ".";
    //$("#" + clicked_id).addclass('clickedClass');
};
//*****display a Modal
function displayModal() {
    document.getElementById('memberModal').style.display = "block";
}
//****two method to close a modal: press the close button or click anywhere else
//*****closing the modal with the close button
function closeModal() {
    document.getElementById('memberModal').style.display = "none";
}
//*****clicking anywhere else to close it
window.onclick = function(event) {
    if (event.target == document.getElementById('memberModal')) {
        closeModal();
    }
}
// *****a testing array for user name that have be chosen
var usrNameArray = ["testing123", "testing223"];
var passwordArray = ["testing123", "testing223"];
//*****check the value of the sign up data
function signUpCheck() {
    //*****checking variable
    var check = 0;
    //*****var for loop
    var i;
    //*****if else check name length
    document.getElementById("signUpName").value.length < 8 ? alert("You user name is shorter than 8 characters.") : check++;
    //*****if else check password length
    document.getElementById("signUpPassword").value.length < 8 ? alert("You password is shorter than 8 characters.") : check++;
    //***** loop the whole array
    for (i = 0; i < usrNameArray.length; i++) {
        document.getElementById("signUpName").value == usrNameArray[i] ? alert("You user name had been chosen.") : check++;
    }
    //*****check all factor
    check >= 3 ? alert("You have signed up successfully.") : check = 0;
    //*****add to array
    if (check >= 3) {
        usrNameArray.push(document.getElementById("signUpName").value);
        passwordArray.push(document.getElementById("signUppassword").value);
    }
}

function displayChange(id) {
    if (id == "regButton"){
      document.getElementById('reg').style.display = 'block';
      document.getElementById('login').style.display = 'none';
    }else {
      document.getElementById('reg').style.display = 'none';
      document.getElementById('login').style.display = 'block';
    }
}

function checkAvailability() {
	$("#loaderIcon").show();
	$.ajax({
	url: "check_availability.php",
	data:'username='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#signUpName-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}

$().ready(
    function() {
        $('#register-form').submit(function(evt) {
            $('#timeTaken').val(timeExit);
            if ($('#frameSelected').val() === "") {
                alert("Please at least select one from each category");
                evt.preventDefault();
            }
        });
        $('#login-form').submit(function(evt) {
            $('#timeTaken').val(timeExit);
            if ($('#frameSelected').val() === "") {
                alert("Please at least select one from each category");
                evt.preventDefault();
            }
        });
      });
