
<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if(isset($_POST['submit'])){
	$url = $_POST['url'];
	$quality = $_POST['quality'];

	if($quality == "highest"){
		$command = "youtube-dl -f bestaudio --extract-audio --audio-format mp3 -o '%(title)s.%(ext)s' $url";
	} else {
		$command = "youtube-dl -f 'bestaudio[abr<=$quality]' --extract-audio --audio-format mp3 -o '%(title)s.%(ext)s' $url";
	}

	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename='".basename($command)."'");
	system($command);
	exit;
}
?>
