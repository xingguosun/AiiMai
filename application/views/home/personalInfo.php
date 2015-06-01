<div class="" style="padding-left:30px;">
	<nav class="navbar navbar-default" style="margin-top:10px;">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <a class="navbar-brand" style="color:green;"><?php echo $_SESSION['username'];?></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<!--
			<li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li>
			-->
			<li class="dropdown" onmouseover="$('#ShoppingList').show();" onmouseout="$('#ShoppingList').hide();">
			  <a href="#" class="dropdown-toggle">Shopping List <span class="caret"></span></a>
			  <ul class="dropdown-menu" id="ShoppingList">
				<li><a href="/home/recentOrders">Recent Orders</a></li>
				<li><a href="/home/cancelRefund">Cancel/Refund</a></li>
				<li><a href="/home/auction">Auction</a></li>
				<li><a href="/home/viewAll">ViewAll</a></li>
			  </ul>
			</li>
			<li class="dropdown" onmouseover="$('#Myinfo').show();" onmouseout="$('#Myinfo').hide();">
			  <a href="#" class="dropdown-toggle">My info<span class="caret"></span></a>
			  <ul class="dropdown-menu" id="Myinfo">
				<li><a href="/home/personalInfo">Personal Info</a></li>
			  </ul>
			</li>
			<!--
			<li class="dropdown" onmouseover="$('#aAccount').show();" onmouseout="$('#aAccount').hide();">
			  <a href="#" class="dropdown-toggle">A·account <span class="caret"></span></a>
			  <ul class="dropdown-menu" id="aAccount">
				<li><a href="#">A·money</a></li>
				<li><a href="#">A·point</a></li>
				<li><a href="#">Coupon</a></li>
				<li class="divider"></li>
				<li><a href="#">A·stamp</a></li>
				<li class="divider"></li>
				<li><a href="#">A·tocken</a></li>
				<li><a href="#">Gift Card</a></li>
				<li><a href="#">CallPoint</a></li>
				<li><a href="#">A·prime Club</a></li>
				<li><a href="#">Online Top-Up</a></li>
				<li><a href="#">Wi-Fi Ticket</a></li>
			  </ul>
			</li>
			-->
		  </ul>
		  <!--
		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown" onmouseover="$('#aList').show();" onmouseout="$('#aList').hide();">
			  <a href="#" class="dropdown-toggle">A-List <span class="caret"></span></a>
			  <ul class="dropdown-menu" id="aList">
				<li><a href="#">Viewed List</a></li>
				<li><a href="#">Viewed Qspecialsn</a></li>
				<li><a href="#">Favorite Qspecial</a></li>
				<li><a href="#">Wish List</a></li>
				<li><a href="#">Following Shop</a></li>
				<li class="divider"></li>
				<li><a href="#">My event</a></li>
				<li><a href="#">My Review</a></li>
				<li><a href="#">My Charity</a></li>
				<li><a href="#">My Inquiry & Report</a></li>
			  </ul>
			</li>
		  </ul>-->
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="km-panel km-panel-primary" style="width: 98%;margin-top:20px;">
		<div class="km-panel-heading">Personal Info</div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width15p br">Username</td>
					<td class="value tal"><?php echo $user->user_username;?></td>
				  </tr>
				  <tr>
					<td class="field br">Mobile number</td>
					<td class="value tal"><?php echo $user->user_phone;?></td>
				  </tr>
				  <tr>
					<td class="field br">Date of Birth</td>
					<td class="value tal"><?php echo $user->user_birthday;?></td>
				  </tr>
				  <tr>
					<td class="field br">Gender</td>
					<td class="value tal"><?php echo $user->user_gender;?></td>
				  </tr>
				  <?php /*?>
				  <tr>
					<td class="field"><?php echo lang('cms_sider_Sellertype');?></td>
					<td class="value"><?php echo $merchant->merchant_type=='1'?lang('cms_sider_Person'):'Company';?></td>
					<td class="field"><?php echo lang('cms_sider_Sellerlevel');?></td>
					<td class="value"><?php echo $merchant->merchant_grade;?><?php //echo lang('cms_sider_StandardSeller');?></td>
					<td class="field"><?php echo lang('cms_sider_Password');?></td>
					<td class="value" style="padding: 2px 0;">
						<button onclick="modifySellerBaseInfoPwd();" type="button" class="km-btn km-btn-primary" style="height: 30px;font-size: 12px;"><?php echo lang('cms_sider_Editpassword');?></button>
						<div class="km-modal-dialog width40p" id="sellerBaseInfoPwd">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_sider_SellerInformation').'-'.lang('cms_sider_EditPassword');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="seller_baseinfo_oldpwd" class="km-control-label"><?php echo lang('cms_sider_CurrentPassword');?>:</label>
									<input type="password" class="km-form-control" id="seller_baseinfo_oldpwd" style="width: 95%;padding: 0 5px;">
									<label for="seller_baseinfo_newpwd" class="km-control-label"><?php echo lang('cms_sider_NewPassword');?>:</label>
									<input type="password" class="km-form-control" id="seller_baseinfo_newpwd" style="width: 95%;padding: 0 5px;">
									<label for="seller_baseinfo_confirmpwd" class="km-control-label"><?php echo lang('cms_sider_ReenterNewPassword');?>:</label>
									<input type="password" class="km-form-control" id="seller_baseinfo_confirmpwd" style="width: 95%;padding: 0 5px;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_sider_Close');?></button>
									<button type="button" class="km-btn km-btn-primary" onclick="saveSellerBaseInfoPwd('Successfully saved!');"><?php echo lang('cms_sider_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				  <?php */?>
				</tbody>
			</table>
		</div>
	</div>
	<?php /*?>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_sider_SettleInformation').' (* '.lang('cms_sider_SettleInformationTip').'<a href="mailto:seller_regist@aiimai.com" style="color:white;">[seller_regist@aiimai.com]</a>)';?> </div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width15p"><?php echo lang('cms_sider_Settledate');?></td>
					<td class="value width17p"><?php echo lang('cms_sider_SettledateMsg15');?></td>
					<td class="field width15p"><?php echo lang('cms_sider_SettlementCurrency');?></td>
					<td class="value width17p">SGD</td>
					<td class="field width15p"><?php echo lang('cms_sider_Tax');?></td>
					<td class="value "><!--税--></td>
				  </tr>
				  <tr>
					<td class="field"><?php echo lang('cms_sider_Bank');?></td>
					<td class="value" colspan="3">DBS Bank Ltd / POSB   <?php echo lang('cms_sider_BranchInfo');?>  : POSB Tampines Central</td>
					<td class="field"><?php echo lang('cms_sider_Accountnumber');?></td>
					<td class="value">194186231</td>
				  </tr>
				  <tr>
					<td class="field"><?php echo lang('cms_sider_copyofbusinesslicense');?></td>
					<td class="value" colspan="5">
						<div class="km-input-group fl">
						  <span class="km-input-group-addon" style="font-size: 12px;"><?php echo lang('cms_sider_causeofchanging');?></span>
						  <input id="BusinessLicenseMsg" type="text" class="km-form-control" placeholder="ASM Seller Confirm" style="height:20px;font-size: 12px;">
						</div>
						<button onclick="$('#fileBusinessLicense').click();" type="button" class="km-btn km-btn-primary" style="height: 32px;font-size: 12px;"><?php echo lang('cms_sider_Upload');?></button>
						<img src="/assets/images/cms/loading.gif" id="loadingBusinessLicense" class="hide">
						<a href="<?php echo $merchant->merchant_business_license;?>" target="_blank"><?php echo lang('cms_sider_Viewimage');?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo lang('cms_sider_ViewimageTip');?>
						<form id="upload_BusinessLicense_form" method="post" enctype="multipart/form-data">
							<input onchange="return uploadBusinessLicense()" name="image" type="file" id="fileBusinessLicense" style="display:none;" accept="image/*">
						</form>
					</td>
				  </tr>
				  <tr>
					<td class="field"><?php echo lang('cms_sider_Copyofbankaccount');?></td>
					<td class="value" colspan="5">
						<div class="km-input-group fl">
						  <span class="km-input-group-addon" style="font-size: 12px;"><?php echo lang('cms_sider_causeofchanging');?></span>
						  <input id="BankbookMsg" type="text" class="km-form-control" placeholder="ASM Seller Confirm" style="height:20px;font-size: 12px;">
						</div>
						<button type="button" onclick="$('#fileBankbook').click();" class="km-btn km-btn-primary" style="height: 32px;font-size: 12px;"><?php echo lang('cms_sider_Upload');?></button>
						<img src="/assets/images/cms/loading.gif" id="loadingBankbook" class="hide">
						<a href="<?php echo $merchant->merchant_bank_account;?>" target="_blank"><?php echo lang('cms_sider_Viewimage');?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo lang('cms_sider_ViewimageTip');?>
						<form id="upload_bankbook_form" method="post" enctype="multipart/form-data">
							<input onchange="return uploadBankbook()" name="image" type="file" id="fileBankbook" style="display:none;" accept="image/*">
						</form>
					</td>
				  </tr>
				  <tr>
					<td class="field"><?php echo lang('cms_sider_Requestforapproval');?></td>
					<td class="value">
						<button onclick="requestForSettleInfo()" type="button" class="km-btn km-btn-primary" style="height: 32px;font-size: 12px;"><?php echo lang('cms_sider_Request');?></button>
					</td>
					<td class="field"><?php echo lang('cms_sider_Processingstatus');?></td>
					<td class="value" colspan="3">
						<?php echo lang('cms_sider_ProcessingstatusTip1');?>
					</td>
				  </tr>
				  <tr>
					<td class="field"><?php echo lang('cms_sider_AaccountPassword');?></td>
					<td class="value" colspan="5">
						<button onclick="modifyAAccountPwd();" type="button" class="km-btn km-btn-primary" style="height: 32px;font-size: 12px;"><?php echo lang('cms_sider_ChangePassword');?></button>
						<div class="km-modal-dialog width40p" id="AAccountPwd">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_sider_SettleInformation').'-'.lang('cms_sider_ChangeAaccountPassword');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="seller_baseinfo_oldpwd" class="km-control-label"><?php echo lang('cms_sider_CurrentPassword');?>:</label>
									<input type="password" class="km-form-control" id="a_account_oldpwd" style="width: 95%;padding: 0 5px;">
									<label for="seller_baseinfo_newpwd" class="km-control-label"><?php echo lang('cms_sider_NewPassword');?>:</label>
									<input type="password" class="km-form-control" id="a_account_newpwd" style="width: 95%;padding: 0 5px;">
									<label for="seller_baseinfo_confirmpwd" class="km-control-label"><?php echo lang('cms_sider_ReenterNewPassword');?>:</label>
									<input type="password" class="km-form-control" id="a_account_confirmpwd" style="width: 95%;padding: 0 5px;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_sider_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_sider_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading">GST Info</div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width15p">Name</td>
					<td class="value width17p"><input id="gstName" value="<?php echo $merchant->merchant_gst_name;?>" type="text" class="km-form-control" placeholder="" style="height:20px;width:90%;"></td>
					<td class="field width15p">GST Registration No.</td>
					<td class="value width17p"><input id="gstNumber" value="<?php echo $merchant->merchant_gst_number;?>" type="text" class="km-form-control" placeholder="" style="height:20px;width:90%;"></td>
				  </tr>
				  <tr>
					<td class="field">Address</td>
					<td class="value" colspan="3">
						<input id="gstAddress" value="<?php echo $merchant->merchant_gst_address;?>" type="text" class="km-form-control fl" placeholder="" style="height:20px;width:80%;">
						<button onclick="saveGstInfo();" type="button" class="km-btn km-btn-primary fr" style="height: 32px;line-height:20px;font-size: 12px;">Request</button>
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_myInfo_BasicInfo');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width10p" rowspan="2"><?php echo lang('cms_myInfo_ContactNo');?></td>
					<td class="value width17p">
						<span class="km-label km-label-default fl"><?php echo lang('cms_myInfo_MobilephoneNo');?></span>  <?php echo $merchant->merchant_phone1;?> <?php echo $merchant->merchant_phone2;?>-<?php echo $merchant->merchant_phone3;?> 
						<button onclick="setDivCenter('#baseInfoMobilePhoneNumber',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="baseInfoMobilePhoneNumber">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_BasicInfo').'-'.lang('cms_myInfo_MobilephoneNo');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_MobilephoneNo');?>:</label>
									<select id="merchant_phone1" style="display:block;height: 30px;">
										<option value="">Choose Country</option>
										<option value="AU">Australia</option>
										<option value="BR">Brazil</option>
										<option value="BN">Brunei Darussalam</option>
										<option value="CA">Canada</option>
										<option value="CN">China</option>
										<option value="DK">Denmark</option>
										<option value="EG">Egypt</option>
										<option value="FI">Finland</option>
										<option value="FR">France</option>
										<option value="DE">Germany</option>
										<option value="GR">Greece</option>
										<option value="HK">Hong Kong</option>
										<option value="HU">Hungary</option>
										<option value="IN">India</option>
										<option value="ID">Indonesia</option>
										<option value="IL">Israel</option>
										<option value="IT">Italy</option>
										<option value="JP">Japan</option>
										<option value="KW">Kuwait</option>
										<option value="MO">Macau</option>
										<option value="MY">Malaysia</option>
										<option value="MX">Mexico</option>
										<option value="MM">Myanma</option>
										<option value="NL">Netherlands</option>
										<option value="NZ">New Zealand</option>
										<option value="NO">Norway</option>
										<option value="PH">Philippines</option>
										<option value="PL">Poland</option>
										<option value="PT">Portugal</option>
										<option value="RU">Russia</option>
										<option value="SG" selected>Singapore</option>
										<option value="KR">South Korea</option>
										<option value="ES">Spain</option>
										<option value="SE">Sweden</option>
										<option value="CH">Switzerland</option>
										<option value="TW">Taiwan</option>
										<option value="TH">Thailand</option>
										<option value="TR">Turkey</option>
										<option value="GB">United Kingdom</option>
										<option value="US">United States</option>
										<option value="VN">Vietnam</option>
									</select><br>
									<input type="text" class="km-form-control" id="merchant_phone2" value="<?php echo $merchant->merchant_phone2;?>" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">-
									<input type="text" class="km-form-control" id="merchant_phone3" value="<?php echo $merchant->merchant_phone3;?>" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary" onclick="saveMyInfoMobilephoneNo();"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
					<td class="field width10p" rowspan="2"><?php echo lang('cms_myInfo_Email');?></td>
					<td class="value width17p" rowspan="2">
						<?php echo $merchant->merchant_email;?>
						<button onclick="setDivCenter('#baseContactInfoEmail',true);" type="button" class="km-btn km-btn-primary" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button><br>
						<?php echo lang('cms_myInfo_EmailTip');?></td>
						<div class="km-modal-dialog width40p" id="baseContactInfoEmail">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_BasicInfo').'-'.lang('cms_myInfo_Email');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_Email');?>:</label>
									<input type="text" class="km-form-control" id="merchant_email" value="<?php echo $merchant->merchant_email;?>" style="width: 95%;padding: 0 5px;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary" onclick="saveMyInfoEmail();"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
				  </tr>
				  <tr>
					<td class="value width17p">
						<span class="km-label km-label-default fl"><?php echo lang('cms_myInfo_Phonenumber');?></span>  <?php echo $merchant->merchant_homephone1;?> <?php echo $merchant->merchant_homephone2;?>-<?php echo $merchant->merchant_homephone3;?> 
						<button onclick="setDivCenter('#baseInfoPhoneNumber',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="baseInfoPhoneNumber">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_BasicInfo').'-'.lang('cms_myInfo_Phonenumber');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_Phonenumber');?>:</label>
									<select id="merchant_homephone1" style="display:block;height: 30px;">
										<option value="">Choose Country</option>
										<option value="AU">Australia</option>
										<option value="BR">Brazil</option>
										<option value="BN">Brunei Darussalam</option>
										<option value="CA">Canada</option>
										<option value="CN">China</option>
										<option value="DK">Denmark</option>
										<option value="EG">Egypt</option>
										<option value="FI">Finland</option>
										<option value="FR">France</option>
										<option value="DE">Germany</option>
										<option value="GR">Greece</option>
										<option value="HK">Hong Kong</option>
										<option value="HU">Hungary</option>
										<option value="IN">India</option>
										<option value="ID">Indonesia</option>
										<option value="IL">Israel</option>
										<option value="IT">Italy</option>
										<option value="JP">Japan</option>
										<option value="KW">Kuwait</option>
										<option value="MO">Macau</option>
										<option value="MY">Malaysia</option>
										<option value="MX">Mexico</option>
										<option value="MM">Myanma</option>
										<option value="NL">Netherlands</option>
										<option value="NZ">New Zealand</option>
										<option value="NO">Norway</option>
										<option value="PH">Philippines</option>
										<option value="PL">Poland</option>
										<option value="PT">Portugal</option>
										<option value="RU">Russia</option>
										<option value="SG" selected>Singapore</option>
										<option value="KR">South Korea</option>
										<option value="ES">Spain</option>
										<option value="SE">Sweden</option>
										<option value="CH">Switzerland</option>
										<option value="TW">Taiwan</option>
										<option value="TH">Thailand</option>
										<option value="TR">Turkey</option>
										<option value="GB">United Kingdom</option>
										<option value="US">United States</option>
										<option value="VN">Vietnam</option>
									</select><br>
									<input type="text" class="km-form-control" id="merchant_homephone2" value="<?php echo $merchant->merchant_homephone2;?>" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">-
									<input type="text" class="km-form-control" id="merchant_homephone3" value="<?php echo $merchant->merchant_homephone3;?>" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary" onclick="saveMyInfoPhonenumber();"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_myInfo_Sellersinformationdisplayedtocustomer');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_Address');?></td>
					<td class="value width17p tal" colspan="3">
						<span class="km-label km-label-success" style="padding:0 0.6em"><?php echo lang('cms_myInfo_Display');?></span> (521168) 168A SIMEI LANE 168A Simei Lane Singapore 521168	<br>
						<span class="km-label km-label-danger" style="padding:0 0.6em"><?php echo lang('cms_myInfo_Hide');?></span> Singapore 9685-1921
						<button onclick="setDivCenter('#MyInfoCustomerViewAddress',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="MyInfoCustomerViewAddress">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_Sellersinformationdisplayedtocustomer').'-'.lang('cms_myInfo_Address');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="seller_baseinfo_oldpwd" class="km-control-label">Address:</label>
									<input id="baseInfoAddress" type="checkbox"><label for="baseInfoAddress">Display</label>
									<input value="(521168) 168A SIMEI LANE 168A Simei Lane Singapore 521168" type="text" class="km-form-control" id="customer_view_address" style="width: 95%;padding: 0 5px;height: 30px;">
									<label for="customer_view_email" class="km-control-label">Phone:</label>
									<input id="baseInfoPhone" type="checkbox"><label for="baseInfoPhone">Display</label>
									<select id="customer_view_fax_countrycode" style="display:block;height: 30px;"><?php require('countryPhoneNO.php');?></select><br>
									<input type="text" class="km-form-control" id="customer_view_address_areacode" value="9685" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">-
									<input type="text" class="km-form-control" id="customer_view_address_number" value="1921" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_Faxnumber');?></td>
					<td class="value width17p">
						Singapore 9685-1921
						<button onclick="setDivCenter('#MyInfoCustomerViewFax',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="MyInfoCustomerViewFax">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_Sellersinformationdisplayedtocustomer').'-'.lang('cms_myInfo_Faxnumber');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_Faxnumber');?>:</label>
									<select id="customer_view_fax_countrycode" style="display:block;height: 30px;"><?php require('countryPhoneNO.php');?></select><br>
									<input type="text" class="km-form-control" id="customer_view_fax_areacode" value="9685" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">-
									<input type="text" class="km-form-control" id="customer_view_fax_number" value="1921" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
					<td class="field width10p" rowspan="2"><?php echo lang('cms_myInfo_CustomerCenterWorkingHour');?></td>
					<td class="value width17p" rowspan="2">周一~周五：上午9点~下午6点<br>周六： 上午9点~下午1点<br>周日，公休日：停业	
						<button onclick="setDivCenter('#MyInfoCustomerViewBusinessHours',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="MyInfoCustomerViewBusinessHours">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_Sellersinformationdisplayedtocustomer').'-'.lang('cms_myInfo_CustomerCenterWorkingHour');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_CustomerCenterWorkingHour');?>:</label>
									<textarea class="km-form-control" id="customer_view_businessHours" style="width:90%;min-height:60px;">周一~周五：上午9点~下午6点<br>周六： 上午9点~下午1点<br>周日，公休日：停业	</textarea>
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_Email');?></td>
					<td class="value width17p">
						kcheongn@gmail.com
						<button onclick="modifyMyInfoCustomerViewEmail();" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="MyInfoCustomerViewEmail">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_Sellersinformationdisplayedtocustomer').'-'.lang('cms_myInfo_Email');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_Email');?>:</label>
									<input type="text" class="km-form-control" id="customer_view_email" value="kcheongn@gmail.com" style="width: 95%;padding: 0 5px;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_myInfo_SalesStaffInformation').'-'.lang('cms_myInfo_SalesStaffInformationTip');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_Salesstaff');?></td>
					<td class="value width17p">
						kcheongn
						<button onclick="setDivCenter('#managePrincipal',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="managePrincipal">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_SalesStaffInformation').'-'.lang('cms_myInfo_Salesstaff');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label">Name:</label>
									<input type="text" class="km-form-control" id="managePrincipal_name" value="kcheongn" style="width: 95%;padding: 0 5px;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
					<td class="field width10p"><?php echo lang('cms_myInfo_Email');?></td>
					<td class="value width17p">
						kcheongn@gmail.com   
						<button onclick="setDivCenter('#manageEmail',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button><br>
						<div class="km-modal-dialog width40p" id="manageEmail">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_SalesStaffInformation').'-'.lang('cms_myInfo_Email');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_Email');?>:</label>
									<input type="text" class="km-form-control" id="baseContactInfo_email" value="kcheongn@gmail.com" style="width: 95%;padding: 0 5px;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_MobilephoneNo');?></td>
					<td class="value width17p">
						Singapore 9685-1921 
						<button onclick="setDivCenter('#manageMobilePhoneNumber',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="manageMobilePhoneNumber">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_SalesStaffInformation').'-'.lang('cms_myInfo_MobilephoneNo');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_MobilephoneNo');?>:</label>
									<select id="customer_view_fax_countrycode" style="display:block;height: 30px;"><?php require('countryPhoneNO.php');?></select><br>
									<input type="text" class="km-form-control" id="customer_view_fax_areacode" value="9685" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">-
									<input type="text" class="km-form-control" id="customer_view_fax_number" value="1921" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
					<td class="field width10p"><?php echo lang('cms_myInfo_Phonenumber');?></td>
					<td class="value width17p">
						Singapore 9685-1921 
						<button onclick="setDivCenter('#managePhoneNumber',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="managePhoneNumber">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_SalesStaffInformation').'-'.lang('cms_myInfo_Phonenumber');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_Phonenumber');?>:</label>
									<select id="customer_view_fax_countrycode" style="display:block;height: 30px;"><?php require('countryPhoneNO.php');?></select><br>
									<input type="text" class="km-form-control" id="customer_view_fax_areacode" value="9685" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">-
									<input type="text" class="km-form-control" id="customer_view_fax_number" value="1921" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_Faxnumber');?></td>
					<td class="value width17p" colspan="3">
						Singapore 9685-1921 
						<button onclick="setDivCenter('#manageFax',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
						<div class="km-modal-dialog width40p" id="manageFax">
							<div class="km-modal-content">
								<div class="km-modal-header">
									<button type="button" class="km-close"><span>&times;</span></button>
									<h4 class="km-modal-title"><?php echo lang('cms_myInfo_SalesStaffInformation').'-'.lang('cms_myInfo_Faxnumber');?></h4>
								</div>
								<div class="km-modal-body">
									<label for="customer_view_email" class="km-control-label"><?php echo lang('cms_myInfo_Faxnumber');?>:</label>
									<select id="customer_view_fax_countrycode" style="display:block;height: 30px;"><?php require('countryPhoneNO.php');?></select><br>
									<input type="text" class="km-form-control" id="customer_view_fax_areacode" value="9685" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">-
									<input type="text" class="km-form-control" id="customer_view_fax_number" value="1921" style="width: 30%;height: 30px;padding: 0 5px;display: inline-block;">
								</div>
								<div class="km-modal-footer">
									<button type="button" class="km-btn km-btn-default km-btn-close"><?php echo lang('cms_myInfo_Close');?></button>
									<button type="button" class="km-btn km-btn-primary"><?php echo lang('cms_myInfo_Savechanges');?></button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading"><?php echo lang('cms_myInfo_ShippingInformation');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_Shipfromaddress');?></td>
					<td class="value width17p">
						(521168) 168A SIMEI LANE 168A Simei Lane Singapore 521168<br>
						<?php echo lang('cms_myInfo_ShipfromaddressTip');?>
						<button onclick="setDivCenter('#',true);" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_myInfo_Edit');?></button>
					</td>
					<td class="field width10p"><?php echo lang('cms_myInfo_DeliveryCompany');?></td>
					<td class="value width17p">
						<select id="sel_srch_takbae" style="height: 30px;"><option value="">Select</option><option value="100000002">Singpost normal mail</option><option value="100000003">Singpost registered mail</option><option value="100000040">Singpost Smartpac</option><option value="100000004">TAQBIN</option><option value="100000005">EMS</option><option value="100000011">Korea registered airmail</option><option value="100000012">Korea normal airmail</option><option value="100000020">Qxpress</option><option value="100000053">Qxpress normal mail</option><option value="100000017">Speedpost</option><option value="100000058">SRE</option><option value="100000063">Quantium</option><option value="100000007">Toll</option><option value="100000009">DHL</option><option value="100000025">FedEx</option><option value="100000034">UPS</option><option value="100000026">Chinapost normal airmail</option><option value="100000027">Chinapost registered airmail</option><option value="100000030">Dex-i</option><option value="100000037">HK post normal mail</option><option value="100000038">HK post registered mail</option><option value="100000047">Thailand registered mail</option><option value="100000021">Citylink</option><option value="100000013">USPS registered mail</option><option value="100000056">USPS normal mail</option><option value="100000062">Asendia</option><option value="100000023">Arrow Air Action</option><option value="100000024">Cuckoo Express</option><option value="100000035">Comone Express</option><option value="100000065">YAMATO Global</option><option value="100000019">4PX Express</option><option value="100000029">Aramex</option><option value="100000031">Japanpost registered mail</option><option value="100000036">MypostOnline</option><option value="100000043">Airpak</option><option value="100000057">POS daftar</option><option value="100000052">Pos Laju</option><option value="100000008">Others</option></select>
						<button onclick="setDivCenter('#',true);" type="button" class="km-btn km-btn-primary fr" style="height: 28px;font-size: 12px;padding: 5px 10px;"><?php echo lang('cms_common_save');?></button>
					</td>
				  </tr>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_Orderalerttype');?></td>
					<td class="value width17p tal" colspan="3">
						<input type="checkbox" style="vertical-align: middle;margin-right: 5px;"><?php echo lang('cms_myInfo_ASMAndemailnotify');?> <input type="text" class="km-form-control" id="customer_view_fax_areacode" value="XXX@gmail.com" style="width: 30%;height: 25px;padding: 0 5px;display: inline-block; font-size:10px;"> <?php echo lang('cms_myInfo_ASMAndemailnotifyTip');?><br>
						<input type="checkbox" style="vertical-align: middle;margin-right: 5px;"> <?php echo lang('cms_myInfo_SMSreceive');?>
						<div class="km-popover-wrapper">
							<img onclick="$(this).next().toggle(100)" src="/assets/images/cms/questionMark.png" width="14px" style="cursor:pointer;">
							<div class="km-popover km-bottom" style="top: 25px;left:-125px; width:260px;">
							  <div class="km-arrow"></div>
							  <h3 class="km-popover-title"><?php echo lang('cms_myInfo_Description');?></h3>

							  <div class="km-popover-content">
								<p><?php echo lang('cms_myInfo_DescriptionContent');?></p>
							  </div>
							</div>
						</div>
						<?php echo lang('cms_myInfo_MobilephoneNo');?>：Singapore 9685-1921 <button onclick="setDivCenter('#',true);" type="button" class="km-btn km-btn-primary" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_common_Editmobilephonenumber');?></button>
						<button onclick="" type="button" class="km-btn km-btn-primary fr" style="height: 28px;font-size: 12px;padding: 5px 10px;"><?php echo lang('cms_common_save');?></button>
					</td>
				  </tr>
				  <tr>
					<td class="field width10p"><?php echo lang('cms_myInfo_Sendingnotifymail');?></td>
					<td class="value width17p tal" colspan="3">
						<input type="checkbox" style="vertical-align: middle;margin-right: 5px;"> <?php echo lang('cms_myInfo_Use');?> 	<?php echo lang('cms_myInfo_UseTip');?>
						<button onclick="" type="button" class="km-btn km-btn-primary fr" style="height: 18px;font-size: 10px;padding: 0px 10px;"><?php echo lang('cms_common_save');?></button>
					</td>
				  </tr>
				  <tr>
					<td class="field width10p">e-Ticket <?php echo lang('cms_sider_Password');?></td>
					<td class="value width17p tal" colspan="3">
						<input type="text" class="km-form-control" id="customer_view_fax_number" style="width: 30%;height: 25px;padding: 0 5px;display: inline-block;">
						<button onclick="" type="button" class="km-btn km-btn-primary fr" style="height: 22px;font-size: 10px;padding: 2px 10px;"><?php echo lang('cms_common_save');?></button>
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="km-panel km-panel-primary" style="width: 98%;">
		<div class="km-panel-heading">AiiMai<?php echo lang('cms_sider_staffAndcontactinformation');?></div>
		<div class="km-panel-body" style="padding:0px;">
			<table class="km-table">
				<tbody>
				  <tr>
					<td class="field width50p" style="border-right: 1px solid #ddd;"><?php echo lang('cms_sider_Salesmanager');?></td>
					<td class="field width50p"><?php echo lang('cms_sider_GeneralSellingInquiryforAiiMai');?></td>
				  </tr>
				  <tr>
					<td class="value width10p tal" style="border-right: 1px solid #ddd;">
						<?php echo lang('cms_myInfo_Name');?>: Deal offer<br>
						<?php echo lang('cms_myInfo_Email');?> : deal@aiimai.com<br>
						<?php echo lang('cms_myInfo_Phonenumber');?> : <br>
						<?php echo lang('cms_myInfo_ForpromotionofyourproductOrservices');?>
					</td>
					<td class="value width17p tal" colspan="3">
						<a href="#no">FAQs</a>    |    <a href="#no"><?php echo lang('cms_myInfo_AskaQuestion');?></a><br><?php echo lang('cms_myInfo_Formoreinformationaboutshippingsettlementetc');?>
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<?php */?>
</div>
<script src="/assets/js/cms-myInfo.js" type="text/javascript"></script>