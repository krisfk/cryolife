<?php
if(isset($_GET["tab"])){
	if($_GET["tab"] == "1"){
		$port = "8001";
	}
	else{
		$port = "8003";
	}
}

    $url = "http://root:cam%23cttc@202.64.221.98:$port/cgi-bin/video.jpg";

    $imginfo = getimagesize( $url );
    header("Content-type: ".$imginfo['mime']);
    readfile( $url );
    exit;
?>
