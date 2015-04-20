/*
	• ajaxCheck(url)
	call a file and append content into table
	
*/
function ajaxCheck(url) {

        var httpRequest = false;

        if (window.XMLHttpRequest) { // Mozilla, Safari,...
            httpRequest = new XMLHttpRequest();
            if (httpRequest.overrideMimeType) {
                httpRequest.overrideMimeType('text/xml');
                // Voir la note ci-dessous à propos de cette ligne
            }
        }
        else if (window.ActiveXObject) { // IE
            try {
                httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e) {
                try {
                    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e) {}
            }
        }
        

        if (!httpRequest) {
            console.log('Abandon :( Impossible de créer une instance XMLHTTP');
            return false;
        }
        httpRequest.onreadystatechange = function() { alertContents(httpRequest); };
        httpRequest.open('GET', url, true);
        httpRequest.send(null);

    }

    function alertContents(httpRequest) {
		/*
		if (httpRequest.readyState == 0) { console.log("request not initialized") }
		if (httpRequest.readyState == 1) { console.log("server connection established") }
		if (httpRequest.readyState == 2) { console.log("request received") }
		if (httpRequest.readyState == 3) { console.log("processing request") }
		if (httpRequest.readyState == 4) { console.log("request finished and response is ready") }
		*/
		
		if (httpRequest.readyState < 4) {
			// show status
			document.getElementById("status").innerHTML="crawling..."
		}
		
        if (httpRequest.readyState == 4) {
            if (httpRequest.status == 200) {

            	var node = document.createElement("tr");
			    var textnode = document.createTextNode(httpRequest.responseText);
			    node.appendChild(textnode);
			    document.getElementById("check").innerHTML=httpRequest.responseText;
                //document.getElementById("coucou").innerHTML= httpRequest.responseText;
                
                // show status
				document.getElementById("status").innerHTML="crawled !"
            } else {
                // show status
				document.getElementById("status").innerHTML="problem"
            }
        }

    }
