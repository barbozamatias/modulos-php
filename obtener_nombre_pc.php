function getNamePC(){
	return gethostbyaddr($_SERVER['REMOTE_ADDR']);
}
