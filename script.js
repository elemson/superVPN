function fetchClickID() {
	const queryString = window.location.search;
	const urlParams = new URLSearchParams(queryString);
	const isClickID = (urlParams.has('clickid'))
	const clickID = (urlParams.get('clickid'))
	const isQueryStringAbsent = window.location.href.indexOf('?') == -1
	let URL = "https://track.ultravpn.com/5d02892a4faea/click";
	if (isClickID) {
		URL += "/";
		URL += clickID;
		return URL;
	}	else if (isQueryStringAbsent) {
		URL += "/";
		URL += '123'
		return URL
	}
	return window.location.href
}

//Run when button is clicked
function RedirectURL() {
	window.location = fetchClickID();
}