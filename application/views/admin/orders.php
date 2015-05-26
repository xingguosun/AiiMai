<div class="padding10 contentlist column-list">
<!--
	<div class="titA tit-bot pb5" style="">
		<div style="float: right;margin-left:10px;">
			<a href="/admin/addColumn" class="msg-btn">添加栏目</a>
		</div>
		<div class="clear">
		</div>
	</div>-->
	<table>
		<thead>
			<tr class="table-head">
				<th style="width:100px;">Order Number</th>
				<th style="width:400px;">Products</th>
				<th style="width:150px;">Shipping Address</th>
				<th style="width:150px;">Status</th>
				<th style="width:280px;">Operation</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($orders as $order):?>
			<tr class="list1">
				<td><?php echo $order->order_number;?></td>
				<td class="column-name">
					<a href="" target="_blank"><?php echo $order->order_products;?></a>
				</td>
				<td><?php echo $order->order_address;?></td>
				<td><?php echo $order->order_status;?></td>
				<td>
					<a href="/admin/contentList?column=<?php echo $order->order_id;?>">Details</a>&nbsp;&nbsp;&nbsp;
					<a href="/admin/editColumn?column=<?php echo $order->order_id;?>">Edit</a>&nbsp;&nbsp;&nbsp;
					<a href="javascript:delColumn('<?php echo $order->order_id;?>','Sure to freeze <<?php echo $order->order_id;?>>？','Successfully froze <?php echo $order->order_id;?>')">Freeze</a>&nbsp;&nbsp;&nbsp;
					<a href="javascript:delColumn('<?php echo $order->order_id;?>','Sure to delete <<?php echo $order->order_id;?>>？','Successfully deleted <?php echo $order->order_id;?>')">Delete</a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	<nav>
	  Total <?php echo $amount;?>
	  <ul class="km-pagination">
		<li <?php if($firstPage=="no"):?>class="disabled"<?php endif;?>>
			<a href="<?php echo $firstPage=="no"?"#":$firstPage;?>"><span>«</span></a>
		</li>
		<?php for($i=1;$i<=$pageAmount;$i++):?>
		<li <?php if($currentPage==$i):?>class="active"<?php endif;?>>
			<a href="<?php echo $jumpPage.$i;?>"><?php echo $i;?></a>
		</li>
		<?php endfor;?>
		<li <?php if($lastPage=="no"):?>class="disabled"<?php endif;?>>
			<a href="<?php echo $lastPage=="no"?"#":$lastPage;?>"><span>»</span></a>
		</li>
	  </ul>
	</nav>
</div>
<div id="msg_content" class="showinfo">
	<div class="dialog-hd">信息内容</div>
	<div class="itemPar" id="msgwait"><img src="/assets/images/cms/loading.gif" width="60" height="60"></div>
	<div class="itemPar" id="msgdata"></div>
</div>
<script src="/assets/js/admin.js" type="text/javascript"></script>