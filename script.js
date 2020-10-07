let URL = "https://track.ultravpn.com/5d02892a4faea/click";

//If page loads with query parameter
window.onload = function fetchClickIDOnLoad() {
	const isQueryStringAbsent = window.location.href.indexOf('?') === -1;
	if(!isQueryStringAbsent) {
		document.location.search.substr(1).split('&').forEach(pair => {
			[key, value] = pair.split('=')
			URL += "/"
			URL += value
			window.location = URL;
		})
	}

}

//Function invokes when button is clicked
function fetchClickID() {
	const queryString = window.location.search;
	const urlParams = new URLSearchParams(queryString);
	const isClickID = (urlParams.has('clickid'))
	if(!isClickID) {
		urlParams.set('clickid', 123);
		URL += "/";
		URL += urlParams.get('clickid');
		console.log(URL)
		return URL
	}

}

//Runs when button is clicked
function RedirectURL() {
	window.location = fetchClickID();
}
