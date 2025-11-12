<?php

function uploadFile($file, $destinationPath, $allowType = array(), $allowSize = 4096)
{
	if ($file['error'] == 1) {
		return array('', 'Unspecified Error in file upload');
	}
	if (!$file['name'])
		return array('', 'No file specified');

	$allowSize = $allowSize * 1024;
	$file_name = $file['name'];
	$file_type = $file['type'];
	$file_size = $file['size'];
	$ext_arr = explode(".", basename($file_name));
	$file_ext = strtolower($ext_arr[count($ext_arr) - 1]);

	$uniqer = substr(md5(uniqid(rand(), 1)), 0, 5);
	$file_name = $uniqer . '_' . str_replace(" ", "_", $file_name);

	if (count($allowType) > 0) {
		$lowerAllowType = array();
		foreach ($allowType as $key => $val) {
			$lowerAllowType[$key] = strtolower($val);
		}

		if (in_array($file_ext, $lowerAllowType));
		else {
			$result = "'" . $file['name'] . "' is not a valid file."; //Show error if any.
			return array('', $result);
		}
	}

	if ($file_size > $allowSize) {
		return array('', 'You have exceeded the file size limit.');
	}

	$uploadfile = $destinationPath . $file_name;

	$result = '';
	//Move the file from the stored location to the new location
	if (!@move_uploaded_file($file['tmp_name'], $uploadfile)) {
		$result = "Cannot upload the file '" . $file['name'] . "'"; //Show error if any.
		if (!file_exists($destinationPath)) {
			$result .= " : Folder don't exist.";
		} elseif (!is_writable($destinationPath)) {
			$result .= " : Folder not writable.";
		} elseif (!is_writable($uploadfile)) {
			$result .= " : File not writable.";
		}
		$file_name = '';
	}
	return array($file_name, $result);
}
function uploadVideoFile($file, $destinationPath, $allowType = array(), $allowSize = 2048)
{

	if ($file['error'] == 1) {
		return array('', 'Unspecified Error in file upload');
	}
	if (!$file['name'])
		return array('', 'No file specified');

	$allowSize = $allowSize * 1024;
	$file_name = $file['name'];
	$file_type = $file['type'];
	$file_size = $file['size'];
	$ext_arr = explode(".", basename($file_name));
	$file_ext = strtolower($ext_arr[count($ext_arr) - 1]);

	$uniqer = substr(md5(uniqid(rand(), 1)), 0, 5);
	$file_name = $uniqer . '_' . str_replace(" ", "_", $file_name);

	if (count($allowType) > 0) {
		$lowerAllowType = array();
		foreach ($allowType as $key => $val) {
			$lowerAllowType[$key] = strtolower($val);
		}

		if (in_array($file_ext, $lowerAllowType));
		else {
			$result = "'" . $file['name'] . "' is not a valid file."; //Show error if any.
			return array('', $result);
		}
	}

	if ($file_size > $allowSize) {
		return array('', 'You have exceeded the file size limit.');
	}

	$uploadfile = $destinationPath . $file_name;

	$result = '';
	//Move the file from the stored location to the new location
	if (!@move_uploaded_file($file['tmp_name'], $uploadfile)) {
		$result = "Cannot upload the file '" . $file['name'] . "'"; //Show error if any.
		if (!file_exists($destinationPath)) {
			$result .= " : Folder don't exist.";
		} elseif (!is_writable($destinationPath)) {
			$result .= " : Folder not writable.";
		} elseif (!is_writable($uploadfile)) {
			$result .= " : File not writable.";
		}
		$file_name = '';
	}
	return array($file_name, $result);
}
function uploadAudioFile($file, $destinationPath, $allowType = array(), $allowSize = 2048)
{

	if ($file['error'] == 1) {
		return array('', 'Unspecified Error in file upload');
	}
	if (!$file['name'])
		return array('', 'No file specified');

	$allowSize = $allowSize * 1024;
	$file_name = $file['name'];
	$file_type = $file['type'];
	$file_size = $file['size'];
	$ext_arr = explode(".", basename($file_name));
	$file_ext = strtolower($ext_arr[count($ext_arr) - 1]);

	$uniqer = substr(md5(uniqid(rand(), 1)), 0, 5);
	$file_name = $uniqer . '_' . str_replace(" ", "_", $file_name);

	if (count($allowType) > 0) {
		$lowerAllowType = array();
		foreach ($allowType as $key => $val) {
			$lowerAllowType[$key] = strtolower($val);
		}

		if (in_array($file_ext, $lowerAllowType));
		else {
			$result = "'" . $file['name'] . "' is not a valid file."; //Show error if any.
			return array('', $result);
		}
	}

	if ($file_size > $allowSize) {
		return array('', 'You have exceeded the file size limit.');
	}

	$uploadfile = $destinationPath . $file_name;

	$result = '';
	//Move the file from the stored location to the new location
	if (!@move_uploaded_file($file['tmp_name'], $uploadfile)) {
		$result = "Cannot upload the file '" . $file['name'] . "'"; //Show error if any.
		if (!file_exists($destinationPath)) {
			$result .= " : Folder don't exist.";
		} elseif (!is_writable($destinationPath)) {
			$result .= " : Folder not writable.";
		} elseif (!is_writable($uploadfile)) {
			$result .= " : File not writable.";
		}
		$file_name = '';
	}
	return array($file_name, $result);
}

function uploadImage($file, $destinationPath, $allowSize = 102400)
{

	return uploadFile($file, $destinationPath, array("jpg", "jpeg", "gif", "png"), $allowSize);
}

function uploadVideo($file, $destinationPath, $allowSize = 102400)
{
	return uploadVideoFile($file, $destinationPath, array("mp4", "mpeg", "avi"), $allowSize);
}

function uploadAudio($file, $destinationPath, $allowSize = 102400)
{
	return uploadAudioFile($file, $destinationPath, array("mp3", "m4a"), $allowSize);
}

function uploadXlsxFile($file, $destinationPath, $allowSize = 102400)
{

	return uploadFile($file, $destinationPath, array("xlsx", "xls"), $allowSize);
}

function uploadPdfFile($file, $destinationPath, $allowSize = 102400)
{

	return uploadFile($file, $destinationPath, array("pdf"), $allowSize);
}

function display_error()
{
	$message = "";
	if (isset($_SESSION['error_msg']) && is_array($_SESSION['error_msg']) && count($_SESSION['error_msg']) > 0) {

		$message .= '<div class="alert alert-danger fade in">';
		$message .= '<ul class="error">';
		foreach ($_SESSION['error_msg'] as $_message) {
			$message .= '<li class="">' . $_message . '</li>';
		}
		$message .= '</ul>';
		$message .= '</div>';
		echo $message;
		$_SESSION['error_msg'] = array();
	}

	if (isset($_SESSION['notice_msg']) && $_SESSION['notice_msg']) {

		echo '<p class="alert alert-success"><span class="block-arrow bottom"><span></span></span>' . $_SESSION['notice_msg'] . '</p>';
		$_SESSION['notice_msg'] = '';
	}
}

if (!function_exists('array_column')) {
	function array_column(array $input, $columnKey, $indexKey = null)
	{
		$array = array();
		foreach ($input as $value) {
			if (!array_key_exists($columnKey, $value)) {
				trigger_error("Key \"$columnKey\" does not exist in array");
				return false;
			}
			if (is_null($indexKey)) {
				$array[] = $value[$columnKey];
			} else {
				if (!array_key_exists($indexKey, $value)) {
					trigger_error("Key \"$indexKey\" does not exist in array");
					return false;
				}
				if (!is_scalar($value[$indexKey])) {
					trigger_error("Key \"$indexKey\" does not contain scalar value");
					return false;
				}
				$array[$value[$indexKey]] = $value[$columnKey];
			}
		}
		return $array;
	}
}