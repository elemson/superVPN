function fetchClickID() {
	const queryString = window.location.search;
	const urlParams = new URLSearchParams(queryString);
	const clickID = (urlParams.get('clickid'))
	let URL = "https://track.ultravpn.com/5d02892a4faea/click";
	if (clickID) {
		URL += "/";
		URL += clickID;
		return URL;
	}
	return window.location.href
}

//Run when button is clicked
function RedirectURL() {
	window.location = fetchClickID();
}