<?php
header("Access-Control-Allow-Origin: *");
if (!file_exists('uploads')) {
	mkdir('uploads', 0700, true);
}
if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name'])) {
	if(isset($_POST["outputchoice"])&&$_POST("outputchoice") == "html") {
		echo "HTML output is selected";
		chmod("scripthtml.sh",0700);
		shell_exec('./scripthtml.sh');
	}elseif($_POST("outputchoice") == "xml") {{
		chmod("script.sh",0700);
		shell_exec('./script.sh');
	}
}else{
	echo "There was an error uploading the file, please try again!";
}

?>