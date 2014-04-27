<?php
/**
 * Elgg file download.
 *
 * @package ElggFile
 */

// Get the guid
$file_guid = get_input("guid");

// Get the file
$file = get_entity($file_guid);
if (!$file) {
	register_error(elgg_echo("file:downloadfailed"));
	forward();
}

$mime = $file->getMimeType();
if (!$mime) {
	$mime = "application/octet-stream";
}


// USER AGENT?
$ua = $_SERVER['HTTP_USER_AGENT'];
$filename = mb_convert_encoding($file->originalfilename,'UTF-8');
if (preg_match('/MSIE/i', $ua)){
  //IEは、URL encodeで
  //
  // IE(Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0))
  $fnset = 'filename="' . rawurlencode($filename) . '"';
  $charset = '; charset=utf-8';
}
elseif (preg_match('/opera/i', $ua)) {
  //Operaは エンコード情報付きのURL encodeで
  //
  // Opera( Opera/9.80 (Windows NT 6.1; WOW64) Presto/2.12.388 Version/12.16)
  $fnset = "filename*=utf-8''" . rawurlencode($filename) . '"';
  $charset = '; charset=utf-8';
}
elseif (preg_match('/safari/i', $ua)) {
  //Safariは、そのまま
  //
  //Safariの場合、右クリックメニューで「リンク先のファイルを．．」選択して
  //保存しようとするとような場合は、
  //ここでは引っかからずにelseに飛んでいく
  //
  // Safari(Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2)
  // Epiphany(Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.22+ (KHTML, like Gecko) Chromium/17.0.963.56 Chrome/17.0.963.56 Safari/535.22+ Epiphany/2.30.6)
  // 
  $fnset = 'filename="' . $filename . '"';
  $charset = '; charset=utf-8';
}
elseif (preg_match('/Firefox/i', $ua) || preg_match('/chrome/i',$ua)) {
  // Firefoxと、chromeは Base64 encodeで。
  //
  // Firefox(Mozilla/5.0 (X11; Linux x86_64; rv:17.0) Gecko/20100101 Firefox/17.0)
  $fnset = 'filename="=?UTF-8?B?' . base64_encode($filename) . '?="';
  $charset = '; charset=utf-8';
}
else {
  //Safariの場合、右クリックメニューで「リンク先のファイルを．．」選択して
  //保存しようとするとような場合は、ここに飛んでくる。
  //この場合、どのようにエンコード使用が化けてしまう。
  //@Todo 何とかする
  $fnset = 'filename="' . $filename . '"';
  $charset = '; charset=utf-8';
}


// fix for IE https issue
header("Pragma: public");

header("Content-type: $mime $charset");

//pdfファイルの場合もダウンロードに持っていく
//inline でファイル名を指定しても、Safari,Operaで正しく表示されない
//if (strpos($mime, "image/") !== false || $mime == "application/pdf") {
if (strpos($mime, "image/") !== false ) {
  header("Content-Disposition: inline; $fnset");
}
else {
  header("Content-Disposition: attachment; $fnset");
}
header("Content-Length: " . filesize($file->getFilenameOnFilestore()));
ob_clean();
flush();
readfile($file->getFilenameOnFilestore());
exit;
