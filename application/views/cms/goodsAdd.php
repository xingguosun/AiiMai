<style>
.cms-main{
	background-color:#FFF;
}
</style>
<div class="" style="padding-left:30px;">
	<ul class="km-nav km-nav-tabs clearfix">
	  <li><a href="/cms/goodsStatistics"><?php echo lang('cms_baseInfo_goodsStatistics_ItemListSummary');?></a></li>
	  <li class="active"><a href="/cms/goodsAdd"><?php echo lang('cms_baseInfo_goodsStatistics_NewItemListing');?></a></li>
	  <li><a href="/cms/goodsCopy"><?php echo lang('cms_baseInfo_goodsStatistics_CopyListing');?></a></li>
	  <li><a href="/cms/goodsEdit"><?php echo lang('cms_baseInfo_goodsStatistics_ChangeItemInfo');?></a></li>
	</ul>
	<div class="km-panel km-panel-primary mt10" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_baseInfo_goodsStatistics_CategoryandSellFormat');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_common_Category');?>
					</td>
					<td class="value tal">
						<select style="height: 30px;" onchange="mainCategoryChange()" id="MainCategory">
							<option value="-1">== <?php echo lang('cms_common_MainCategory');?> ==</option>
							<?php foreach($categories as $cat):?>
							<optgroup label="<?php echo $cat->category_name;?>">
								<?php foreach($cat->subCats as $subCat):?>
									<option value="<?php echo $subCat->category_id;?>"><?php echo $subCat->category_name;?></option>
								<?php endforeach;?>
							</optgroup>
							<?php endforeach;?>
						</select>
						<select style="height: 30px;" onchange="stSubCategoryChange()" id="stSubCategory">
							<option value="-1">== <?php echo lang('cms_common_1stSubCategory');?> ==</option>
						</select>
						<select style="height: 30px;"id="ndSubCategory">
							<option value="-1">== <?php echo lang('cms_common_2ndSubCategory');?> ==</option>
						</select>
						<!--
						<input type="text" placeholder="<?php echo lang('cms_baseInfo_goodsStatistics_Categorycode');?>" class="km-form-control" style="width: 30%;height: 30px;padding: 0px 5px;display: inline-block;font-size:12px;">-->
					</td>
				  </tr>
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_baseInfo_goodsStatistics_SellFormat');?>
					</td>
					<td class="value tal">
						<input type="radio" name="salesMode" id="salesMode1" value="1" style="vertical-align: middle;margin-right: 5px;" checked><label for="salesMode1"><?php echo lang('cms_baseInfo_goodsStatistics_SellFormat_Buynow');?></label><br>
						<input type="radio" name="salesMode" id="salesMode2" value="2" style="vertical-align: middle;margin-right: 5px;"><label for="salesMode2"><?php echo lang('cms_baseInfo_goodsStatistics_SellFormat_AuctionAndLuckyPrice');?></label><br>
						<input type="radio" name="salesMode" id="salesMode3" value="3" style="vertical-align: middle;margin-right: 5px;"><label for="salesMode3"><?php echo lang('cms_baseInfo_goodsStatistics_SellFormat_FreeFormat');?></label>
					</td>
				  </tr>
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_baseInfo_goodsStatistics_DeliveryType');?>
					</td>
					<td class="value tal">
						<input type="radio" name="shipType" id="shipType1" value="1" style="vertical-align: middle;margin-right: 5px;" checked><label for="shipType1"><?php echo lang('cms_baseInfo_goodsStatistics_Delivery');?></label>
						<input type="radio" name="shipType" id="shipType2" value="2" style="vertical-align: middle;margin-right: 5px;"><label for="shipType2"><?php echo lang('cms_baseInfo_goodsStatistics_eTicket');?></label>
						<div class="km-popover-wrapper">
							<img onclick="$(this).next().toggle(10)" src="/assets/images/cms/questionMark.png" width="14px" style="cursor:pointer;">
							<div class="km-popover km-bottom" style="top: 25px;left: -146px;width: 300px; max-width:656px;">
							  <div class="km-arrow"></div>
							  <h3 class="km-popover-title">e-Ticket</h3>
							  <div class="km-popover-content">
								<p><?php echo lang('cms_baseInfo_goodsStatistics_eTicketTip');?></p>
							  </div>
							</div>
						</div>
					</td>
				  </tr>
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_baseInfo_goodsStatistics_ItemCondition');?>
					</td>
					<td class="value tal">
						<input type="radio" name="goodsStatus" id="goodsStatus1" value="1" style="vertical-align: middle;margin-right: 5px;" checked><label for="goodsStatus1"><?php echo lang('cms_baseInfo_goodsStatistics_NewItem');?></label>
						<input type="radio" name="goodsStatus" id="goodsStatus2" value="2" style="vertical-align: middle;margin-right: 5px;"><label for="goodsStatus2"><?php echo lang('cms_baseInfo_goodsStatistics_UsedItem');?></label>
					</td>
				  </tr>
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_baseInfo_goodsStatistics_ItemTitle');?>
					</td>
					<td class="value tal">
						<span class="km-label km-label-default"> English </span><input id="title_english" type="text" placeholder="Please enter the correct trade name (up to 200 words)" class="km-form-control" style="width: 80%;height: 30px;margin-left:10px;padding: 0px 5px;display: inline-block;font-size:12px;"><br><br>
						<span class="km-label km-label-default">简体中文</span><input id="title_zh_cn" type="text" placeholder="请输入正确的型号名（最多200字）" class="km-form-control" style="width: 80%;height: 30px;margin-left:10px;padding: 0px 5px;display: inline-block;font-size:12px;"><br><br>
						<span class="km-label km-label-default">繁體中文</span><input id="title_tw_cn" type="text" placeholder="請輸入正確的型號名（最多200字）" class="km-form-control" style="width: 80%;height: 30px;margin-left:10px;padding: 0px 5px;display: inline-block;font-size:12px;"><br>
					</td>
				  </tr>
				  <!--
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_baseInfo_goodsStatistics_ShortTitle');?>
					</td>
					<td class="value tal">
						<input id="ShortTitle" type="text" placeholder="<?php echo lang('cms_baseInfo_goodsStatistics_ShortTitleTip');?>" class="km-form-control" style="width: 80%;height: 30px;padding: 0px 5px;display: inline-block;font-size:12px;">
					</td>
				  </tr>
				  -->
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_baseInfo_goodsStatistics_SellerCode');?>
					</td>
					<td class="value tal">
						<input id="SellerCode" type="text" class="km-form-control" style="width: 20%;height: 30px;padding: 0px 5px;display: inline-block;font-size:12px;">
						<?php echo lang('cms_baseInfo_goodsStatistics_SellerCodeTip');?>
					</td>
				  </tr>
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_baseInfo_goodsStatistics_ItemImageOrType');?>
					</td>
					<td class="value tal">
						<div class="km-upload-img" style="width: 400px;" onclick="$('#file').click();">
							<img src="" width="400" height="400" id="productImg">
							<p style="line-height: 400px;">Upload Image</p>
						</div>
						<form id="upload_image_form" method="post" enctype="multipart/form-data">
							<input onchange="return uploadProductImage('#uploadImgThumb')" name="image" type="file" id="file" style="display:none;" accept="image/*">
						</form>
					</td>
				  </tr>
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_baseInfo_goodsStatistics_ProductionPlace');?>
					</td>
					<td class="value tal">
						<select style="height: 30px;" id="ProductionPlaceCode">
							<option value="-1" selected="selected">====<?php echo lang('cms_baseInfo_goodsStatistics_select');?>=====</option>
							<option value="1"><?php echo lang('cms_baseInfo_goodsStatistics_Domestic');?></option>
							<option value="2"><?php echo lang('cms_baseInfo_goodsStatistics_Overseas');?></option>
							<option value="3"><?php echo lang('cms_baseInfo_goodsStatistics_Others');?></option>
						</select>
						<input id="ProductionPlaceDetail" type="text" class="km-form-control" style="width: 20%;height: 30px;padding: 0px 5px;display: inline-block;font-size:12px;">
					</td>
				  </tr>
				  <tr>
					<td class="field width10p tal br">
						<?php echo lang('cms_goodsAdd_AdultItem');?>？
					</td>
					<td class="value tal">
						<input type="radio" name="adult" id="adult1" value="0" style="vertical-align: middle;margin-right: 5px;" checked><label for="adult1"><?php echo lang('cms_goodsAdd_No');?></label><br>
						<input type="radio" name="adult" id="adult2" value="1" style="vertical-align: middle;margin-right: 5px;"><label for="adult2"><?php echo lang('cms_goodsAdd_Yes');?><?php echo lang('cms_goodsAdd_YesExample');?></label>
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary mt10" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_goodsAdd_PricingandQuantity');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width15p tal br">
						<?php echo lang('cms_goodsAdd_SellPrice');?> (S$)
					</td>
					<td class="value tal">
						<input id="SellPrice" type="text" class="km-form-control" style="width: 20%;height: 30px;padding: 0px 5px;display: inline-block;font-size:12px;"> 
						(<?php echo lang('cms_goodsAdd_SettlePrice');?>: <span class="km-label km-label-danger" id="SettlePrice">S$</span>)
						<div class="km-popover-wrapper">
							<img onclick="$(this).next().toggle(10)" src="/assets/images/cms/questionMark.png" width="14px" style="cursor:pointer;">
							<div class="km-popover km-bottom" style="top: 25px;left:-496px; max-width:1000px;width:1000px;">
							  <div class="km-arrow"></div>
							  <h3 class="km-popover-title"><?php echo lang('cms_goodsAdd_ServiceFee');?></h3>

							  <div class="km-popover-content">
								<?php echo lang('cms_goodsAdd_Detail');?>
							  </div>
							</div>
						</div>
					</td>
					<td class="field width10p tal br">
						<?php echo lang('cms_goodsAdd_Quantity');?>
					</td>
					<td class="value tal">
						<input id="Quantity" type="text" class="km-form-control" style="width: 50%;height: 30px;padding: 0px 5px;display: inline-block;font-size:12px;">
					</td>
				  </tr>
				  <tr>
					<td class="field tal br">
						<?php echo lang('cms_goodsAdd_AvailablePeriod');?>
					</td>
					<td class="value tal">
						<select style="height: 30px;" id="AvailablePeriod">
							<option value="">Select</option>  
							<option value="1">1 day</option>  
							<option value="3">3 days</option>  
							<option value="5">5 days</option>  
							<option value="7">7 days</option>  
							<option value="10">10 days</option>  
							<option value="20">20 days</option>  
							<option value="30">1 month</option>  
							<option value="60">2 months</option>  
							<option value="90">3 months</option>  
							<option value="180">6 months</option>  
							<option value="365" selected="">1 year</option>
						</select>
					</td>
					<td class="field width10p tal br">
						<?php echo lang('cms_goodsAdd_ReferencePrice');?> (S$)
					</td>
					<td class="value tal">
						<input id="ReferencePrice" type="text" class="km-form-control" style="width: 50%;height: 30px;padding: 0px 5px;display: inline-block;font-size:12px;">
					</td>
				  </tr>
				  <tr>
					<td class="field tal br">
						<?php echo lang('cms_goodsAdd_Displayleftavailableperiod');?>
					</td>
					<td class="value tal" colspan="3">
						<select style="height: 30px;" id="Displayleftavailableperiod">
							<option value="1">1 <?php echo lang('cms_goodsAdd_days');?></option>
							<option value="2">2 <?php echo lang('cms_goodsAdd_days');?></option>
							<option value="3">3 <?php echo lang('cms_goodsAdd_days');?></option>
							<option value="0" selected="selected">Not use</option>
						</select>
						<?php echo lang('cms_goodsAdd_DisplayleftavailableperiodTip');?>
					</td>
				  </tr>
				  <!--
				  <tr>
					<td class="field tal br">
						<?php echo lang('cms_goodsAdd_AInventory');?>
					</td>
					<td class="value tal" colspan="3">
						
					</td>
				  </tr>
				  -->
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary mt10" style="width: 98%;">
		<div class="km-panel-heading">
			Option Type
			<img onclick="addOption()" src="/assets/images/cms/icon-plus-white.png" width="14px" style="cursor:pointer;margin-left:10px;border:2px solid #FFF;border-radius:2px;">
		</div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody id="optionWrapper">
				  <tr>
					<th class="field br">
						Option Name
					</th>
					<th class="field">
						Option Detail  (You can set up price and quantity on Edit Options section after finish your setting for option name and detail.)
					</th>
				  </tr>
				</tbody>
			</table>
			<table class="km-table bt1">
				<tr>
					<td colspan="2">
						<button onclick="applyOption()" type="button" class="km-btn km-btn-primary" style="height: 28px;font-size: 12px;padding: 5px 20px;">Apply</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div id="applyOptionWrapper" class="km-panel km-panel-primary mt10" style="width: 98%;display:none;">
		<div class="km-panel-heading">Edit options</div>
		<div class="km-panel-body" style="padding:0px;">
			<div style="overflow:auto;">
				<table class="km-table" style="overflow:scroll;width:100%;">
					<tbody id="applyOptionData">
					  <tr style="border-top:2px solid #ddd;border-bottom:2px solid #ddd;">
						<td class="field br tac">Operation</td>
						<td id="optionPricePos" class="field br tac" style="">Price</td>
						<td class="field tac">Stock</td>
					  </tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="km-panel km-panel-primary mt10" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_goodsAdd_ShippingInformation');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width15p tal br">
						<?php echo lang('cms_goodsAdd_ShippingAddress');?>
					</td>
					<td class="value tal">
						<input id="shippingAddress" value="" type="text" class="km-form-control" style="width: 80%;height: 25px;padding: 0px 5px;display: inline-block;font-size:12px;"><br>
						<?php echo lang('cms_goodsAdd_ShippingAddressTip');?>
					</td>
				  </tr>
				  <tr>
					<td class="field width15p tal br">
						<?php echo lang('cms_goodsAdd_ShippingRate');?> (S$)
						<div class="km-popover-wrapper">
							<img onclick="$(this).next().toggle(10)" src="/assets/images/cms/questionMark.png" width="14px" style="cursor:pointer;">
							<div class="km-popover km-right" style="top: -443px;left: 26px; max-width:900px;width:900px;height:900px;">
							  <div class="km-arrow"></div>
							  <h3 class="km-popover-title"><?php echo lang('cms_goodsAdd_ShippingRate');?></h3>

							  <div class="km-popover-content" style="overflow:scroll;height: 851px;">
								<!--运费计算详情...-->Detail...
							  </div>
							</div>
						</div>
					</td>
					<td class="value tal">
						
					</td>
				  </tr>
				  <tr>
					<td class="field width15p tal br">
						<?php echo lang('cms_goodsAdd_ShippingRateOption');?>
					</td>
					<td class="value tal">
						
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary mt10" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_goodsAdd_ItemDescription');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<textarea id="goodsInfoEditor" style="600px">
			</textarea>
		</div>
	</div>
	<button onclick="productHandler('This product was listed successfully',true);" type="button" class="km-btn km-btn-primary" style="height: 28px;font-size: 12px;padding: 5px 20px;">List Item</button>
</div>
<script src="/assets/js/cms-goods.js" type="text/javascript"></script>
<link rel="stylesheet" href="/assets/kindEditor/themes/default/default.css" />
<script charset="utf-8" src="/assets/kindEditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/kindEditor/lang/<?php echo $_SESSION['language'];?>.js"></script>
<script>
	var goodsInfoEditor;
	$(document).ready(function(){
		KindEditor.ready(function(K) {
			goodsInfoEditor = K.create('#goodsInfoEditor', {
				uploadJson : '/assets/kindEditor/php/upload_json.php',
				fileManagerJson : '/assets/kindEditor/php/file_manager_json.php',
				allowFileManager : true,
				width : '100%',
				height:'600px',
				resizeType:0,
				imageTabIndex:1,
				langType : '<?php echo $_SESSION['language']=="english"?'en':'zh_CN';?>'
			});
		});
		$("#SellPrice").on('input',function(e){
			if(!$.isNumeric($("#SellPrice").val())){
				showAlert('danger','Error!','Price must be a number!');
				$("#SellPrice").val('');
				$("#SettlePrice").text('S$');
				return false;
			}
		    $("#SettlePrice").text('S$'+$("#SellPrice").val());
		});
		$("#ReferencePrice").on('input',function(e){
			if(!$.isNumeric($("#ReferencePrice").val())){
				showAlert('danger','Error!','Reference Price must be a number!');
				$("#ReferencePrice").val('');
				return false;
			}
		});
		$("#Quantity").on('input',function(e){
			if(!$.isNumeric($("#Quantity").val())){
				showAlert('danger','Error!','Quantity must be a number!');
				$("#Quantity").val('');
				return false;
			}
		});
		/*
		$('#SellPrice').bind('input propertychange', function() {
			alert('ff');
		});*/
	});
</script>