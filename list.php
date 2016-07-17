<?
include 'config.php';
include 'header.php';

$name = "윤 상 창";
$articles=getRows("SELECT * FROM article ORDER BY id DESC");


?>
<h1><?=$name?> 게시물 리스트 입니다.</h1>


<table border="1">
<thead>
<tr>
     <th>번호</th>
     <th>작성자</th>
     <th>내용</th>
     <th>날짜</th>
</tr>
<script>
function deleteArticle(btn){
	if(confirm('삭제하시겠습니까?')==false)
	{
		return;
	}

	var $clickedBtn=$(btn);
	var $listItem=$clickedBtn.closest('tr');
	$listItem.remove();

	var id = $listItem.data('id');

	$.post(
		'/service/article/delete.php',
		{'id':id},
		function(data){
			alert(data.id+'가 삭제가 완료되었습니다.');
		},
		'json'
	);
}
</script>
</thead>
<tbody>
<? foreach($articles as $article){?>
<tr data-id="<?=$article['id']?>">
     <td><?=$article['id']?></td>
     <td><?=$article['writer']?></td>
     <td><?=$article['body']?></td>
     <td><?=$article['regData']?></td>	 
	 <td><button onclick="deleteArticle(this);">삭제</button></td>
</tr>
<? } ?>
</tbody>