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
	showAlert('success','修改成功!',imageSrc+'正在刷新...');
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
	showAlert('success','修改成功!',imageSrc+'正在刷新...');
}