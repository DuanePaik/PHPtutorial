<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<?php
ini_set("display_errors", "1");
/*업로드 할위치를 지정한 후, 파일을 업로드 시킨다.*/
$uploaddir = "C:\Bitnami\wampstack-8.1.1-0\apache2\htdocs\upload\\";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
/*tmp_name의 경로가 이동시킬 지정한 경로와 같다면 */
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다. \n";
} else{
    print "파일 업로드 공격의 가능성이 있습니다! \n";
}
echo "자세한 디버깅 정보입니다.<br />";
print_r($_FILES);
print "</pre>"
?>
<!--CSS 태그로 지정?-->
<img src="<?=$_FILES['userfile']['name']?>" />
</body>
</html>
