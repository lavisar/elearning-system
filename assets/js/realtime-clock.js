function startTime() {
	const today = new Date();
    
	// for show time 
	let h = today.getHours();
	let m = today.getMinutes();
	let s = today.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
    // show only the time
	// document.getElementById("txt").innerHTML = h + ":" + m + ":" + s;
    // show date and time
    document.getElementById("txt").innerHTML = today;
	setTimeout(startTime, 1000);
    // console.log(today)
}

function checkTime(i) {
	if (i < 10) {
		i = "0" + i;
	} // add zero in front of numbers < 10
	return i;
}
