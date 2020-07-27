window.onload = function() {
	leadsubmit();
	pageshare();
	
};

function leadsubmit(){
	var classname = document.getElementsByClassName("lead-submit-btn");
	var submitleadnow = function(event) {
		event.preventDefault();
		
		var editmode = document.getElementById('editmode');		
		if (editmode === null){
			document.getElementById("leadform").submit();
		}
	};

	for (var i = 0; i < classname.length; i++) {
		classname[i].addEventListener('click', submitleadnow, false);
	}
}


function pageshare(){

	var classname = document.getElementsByClassName("socialsharebtn");
	var shareType = {
		"facebook":"http://www.facebook.com/sharer.php?u=",
		"twitter":"https://twitter.com/share?url=",
		"google":"https://plus.google.com/share?url=",
		"linkedin":"www.linkedin.com/shareArticle?mini=true&url=",
		"pinterest":"https://www.pinterest.com/pin/create/button/?url=",
		
	};
	var sharenow = function(event) {
		event.preventDefault();
		
		var editmode = document.getElementById('editmode');
		if (editmode === null){
			var attribute = this.getAttribute("share-type");
			var shareurl = this.getAttribute("href");
			if (!shareurl.match("^(http://|https://|mailto:)") || shareurl == "#" || shareurl == "http://#") {
				shareurl = window.location.href;
			}

			window.open(shareType[attribute]+shareurl , "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=200,width=400,height=400");
		}
	};

	for (var i = 0; i < classname.length; i++) {
		classname[i].addEventListener('click', sharenow, false);
	}
}

function openPopup(popup_id, open_now){
	if(open_now === undefined) { open_now = false; }
	var editmode = document.getElementById('editmode');
	if (editmode === null || open_now){
		$('#'+popup_id).modal('show');
	}
}