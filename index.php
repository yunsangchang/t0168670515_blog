<?
include 'config.php';
include 'header.php';

$name = "윤 상 창";
$articles=getRows("SELECT * FROM article ORDER BY id DESC");


?>
<h1><?=$name?> 메인 블로그 입니다.</h1>

</tbody>
<?
include 'footer.php';
?>