$(document).ready(function(){
	
});
function modifyMyInfoCustomerViewEmail(){
	setDivCenter('#MyInfoCustomerViewEmail',true);
}
function modifySellerBaseInfoPwd(){
	setDivCenter('#sellerBaseInfoPwd',true);
}
function saveSellerBaseInfoPwd(successMsg){
	if($("#seller_baseinfo_oldpwd").val()==""){
		alert('Old password can not be empty!');
		return false;
	}
	if($("#seller_baseinfo_newpwd").val()==""){
		alert('New password can not be empty!');
		return false;
	}
	if($("#seller_baseinfo_newpwd").val()!=$("#seller_baseinfo_confirmpwd").val()){
		alert('The two password don`t match!');
		return false;
	}
	var pwd = new Object(); 
	pwd.oldpwd = $("#seller_baseinfo_oldpwd").val();
	pwd.newpwd = $("#seller_baseinfo_newpwd").val();
	dataHandler("modify","merchantpwd",pwd,null,null,null,successMsg,true);
}
function modifyAAccountPwd(){
	setDivCenter('#AAccountPwd',true);
}
function uploadBusinessLicense(){
	uploadImageAdvance("#upload_BusinessLicense_form",addBusinessLicenseBeforeUpload,addBusinessLicenseAfterUpload)
}
function addBusinessLicenseBeforeUpload(){
	$("#loadingBusinessLicense").show();
}
function addBusinessLicenseAfterUpload(imageSrc){
	//update database
	$("#loadingBusinessLicense").hide();
	var merchantBusinessLicense = new Object(); 
	merchantBusinessLicense.src = imageSrc;
	merchantBusinessLicense.Msg = $("#BusinessLicenseMsg").val();
	dataHandler("modify","merchantBusinessLicense",merchantBusinessLicense,successBusinessLicense,null,null,null,true);
}
function successBusinessLicense(){
	showAlert('success','Successfully Uploaded!','Refreshing...');
}
function uploadBankbook(){
	uploadImageAdvance("#upload_bankbook_form",addBankbookBeforeUpload,addBankbookAfterUpload)
}
function addBankbookBeforeUpload(){
	$("#loadingBankbook").show();
}
function addBankbookAfterUpload(imageSrc){
	//update database
	$("#loadingBankbook").hide();
	var merchantBankbook = new Object(); 
	merchantBankbook.src = imageSrc;
	merchantBankbook.Msg = $("#BankbookMsg").val();
	dataHandler("modify","merchantBankbook",merchantBankbook,successBankbook,null,null,null,true);
}
function successBankbook(){
	showAlert('success','Successfully Uploaded!','Refreshing...');
}
function requestForSettleInfo(){
	showAlert('success','Successfully Requested!','Please Wait...');
}
function saveGstInfo(){
	var GST = new Object();
	GST.gstName = $("#gstName").val();
	GST.gstNumber = $("#gstNumber").val();
	GST.gstAddress = $("#gstAddress").val();
	dataHandler("modify","GstInfo",GST,successGstInfo,null,null,null,true);
}
function successGstInfo(){
	showAlert('success','Successfully Saved!','Refreshing...');
}
function saveMyInfoMobilephoneNo(){
	var myInfoMobilephoneNo = new Object();
	myInfoMobilephoneNo.id=$("#merchantId").val();
	myInfoMobilephoneNo.merchant_phone1 = $("#merchant_phone1").val();
	myInfoMobilephoneNo.merchant_phone2 = $("#merchant_phone2").val();
	myInfoMobilephoneNo.merchant_phone3 = $("#merchant_phone3").val();
	dataHandler("modify","myInfoMobilephoneNo",myInfoMobilephoneNo,successRefresh,null,null,null,true);
}
function successRefresh(){
	showAlert('success','Success!','Refreshing...');
}
function saveMyInfoPhonenumber(){
	var myInfoPhonenumber = new Object();
	myInfoPhonenumber.id=$("#merchantId").val();
	myInfoPhonenumber.merchant_homephone1 = $("#merchant_homephone1").val();
	myInfoPhonenumber.merchant_homephone2 = $("#merchant_homephone2").val();
	myInfoPhonenumber.merchant_homephone3 = $("#merchant_homephone3").val();
	dataHandler("modify","myInfoPhonenumber",myInfoPhonenumber,successRefresh,null,null,null,true);
}
function saveMyInfoEmail(){
	var myInfoEmail = new Object();
	myInfoEmail.id=$("#merchantId").val();
	myInfoEmail.merchant_email = $("#merchant_email").val();
	dataHandler("modify","myInfoEmail",myInfoEmail,successRefresh,null,null,null,true);
}