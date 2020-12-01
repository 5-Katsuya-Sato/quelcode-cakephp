<?php
// なぜ配列の中に入っている値を絞って取り出そうとすると取り出せない？
// foreach ($bidinfo as $key => $info):
// echo $key;
// echo$info;
// var_dump($bidinfo);
// endforeach;
// なぜ矢印では取り出せなくて、[]では取り出せるのか調べる
if($login_userid === $bidder_id):?>
<?php if($shipping_to['is_shipped'] === true && $shipping_to['is_received'] === false): ?>
<h2>商品「<?=$biditem['name'] ?>」の発送先情報</h2>
<table class="vertical-table">
	<tr>
		<th class="small" scope="row">宛名</th>
		<td><?= h($shipping_to['bidder_name']) ?></td>
	</tr>
	<tr>
		<th class="small" scope="row">住所</th>
		<td><?= h($shipping_to['address']) ?></td>
	</tr>
	<tr>
		<th class="small" scope="row">電話番号</th>
		<td><?= h($shipping_to['phone_number']) ?></td>
	</tr>
</table>
<h3>※発送されました</h3>
<?= $this->Form->create($shipping) ?>
<?= $this->Form->button('受取通知を送る',['type' => 'submit','value' => 1,'name' =>'is_received']) ?>
<?php elseif($shipping_to['is_received'] === true): ?>
<h2>商品「<?=$biditem['name'] ?>」の発送先情報</h2>
<table class="vertical-table">
	<tr>
		<th class="small" scope="row">宛名</th>
		<td><?= h($shipping_to['bidder_name']) ?></td>
	</tr>
	<tr>
		<th class="small" scope="row">住所</th>
		<td><?= h($shipping_to['address']) ?></td>
	</tr>
	<tr>
		<th class="small" scope="row">電話番号</th>
		<td><?= h($shipping_to['phone_number']) ?></td>
	</tr>
</table>
<h3>※発送されました</h3>
<h3>※受け取りました</h3>
<?php endif; ?>
<?php endif; ?>
