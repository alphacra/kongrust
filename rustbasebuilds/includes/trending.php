<?php
$selectbase = $db->query("SELECT * FROM bases ORDER BY views DESC, upvotes DESC LIMIT 1");
$trendingbase = $selectbase->fetch();
$count = $selectbase->rowCount();

?>
<?php
if ($count == 0) {
  die("<h4>There are no bases right now!</h4>");
}
?>
<div class="image">
  <img src="image/headers/<?=$trendingbase['header']?>" class="trending">
  <h4>Upvotes: <span><?=number_format($trendingbase['upvotes'])?></span> <i class="fa fa-arrow-circle-o-up" aria-hidden="true" style="color:green;"></i></h4>
  <h4>Views: <span><?=number_format($trendingbase['views'])?></span> <i class="fa fa-eye" aria-hidden="true" style="color:gold;"></i></h4>
</div>
