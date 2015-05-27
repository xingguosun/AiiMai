$(document).ready(function(){
});
function column(handleType,nameNullMsg,successMsg){
	if($("#name").val()==""){
		alert(nameNullMsg);
		return false;
	}
	if($("#name").val()=="") $("#name").val("50");
	var column = new Object(); 
	column.fid = $("#fatherlevel").val();
	column.name = $("#name").val();
	column.display = $('input[name="display"]:checked').val();
	column.type = $("#type").val();
	column.order_num = $('#orderNum').val();
	if(handleType=="modify") column.id = $("#column_id").val();
	dataHandler(handleType,"column",column,null,null,null,successMsg,true);
}
function delColumn(currentId,confirmMsg,successMsg){
	showWait();
	var column = new Object(); 
	column.id = currentId;
	dataHandler("del","column",column,null,confirmMsg,closeWait(),successMsg,true);
}
function selectEssay(baseUrl){
	var extUrl="";
	if($("#state").val()!=-1) extUrl+="&state="+$("#state").val();
	if($("#column").val()!=0) extUrl+="&column="+$("#column").val();
	if($("#keyword").val()!="") extUrl+="&search="+$("#keyword").val();
	location.href=baseUrl+extUrl;
}
function uploadContentThumb(){
	uploadImage(addThumbBeforeUpload,addThumbAfterUpload);
}
function addThumbBeforeUpload(){
	$("#addImgList div img").attr("src","/assets/images/cms/loading.gif");
}
function addThumbAfterUpload(imageSrc){
	$("#addImgList div img").attr("src","/assets/images/cms/appbg_ad.png");
	var new_img_item='<li onmouseover="imgover(this)" onmouseout="imgout(this)" class="img-item imagelist"><img class="thumb-src" width="77" height="77" src="'+imageSrc+'"><img onclick="delclick(this)" class="del-bt" title="删除该缩略图" src="/assets/images/cms/delete.png"></li>';
	$("#addImgList").before(new_img_item);
	if($("#imgListDivs").children(".imagelist").length>=3){
		$("#addImgList").hide();
	}
}
function imgout(obj){
	$(obj).find('.del-bt').hide();
}
function imgover(obj){
	$(obj).find('.del-bt').show();
}
function delclick(obj){
	$(obj).parent('.imagelist').remove();
	$("#file").val("");
	$("#addImgList").show();
}

function delUser(currentId,confirmMsg,successMsg){
	showWait();
	var user = new Object();
	user.id = currentId;
	dataHandler("del","user",user,null,confirmMsg,closeWait(),successMsg,true);
}
function essayHandler(draft,successMsg,newEssay){
	if($("#column").val()==-1){
		alert("请选择发布到的栏目！");
		return false;
	}
	if($("#title").val()==""){
		alert("请输入文章标题！");
		return false;
	}
/*	if($("#imgListDivs .imagelist").length<1){
		alert("请上传至少一张缩略图！");
		return false;
	}*/
	var essay = new Object();
	essay.column_id = $("#column").val();
	essay.title = $("#title").val();
	essay.summary = $("#summary").val();
	essay.content = textEditor.html();
	essay.thumbnail = getThumb("#imgListDivs .imagelist");
	essay.draft = draft;
	var handlerType='';
	if(newEssay){
		handlerType='add';
	}else{
		essay.id = $("#essayId").val();
		handlerType='modify';
	}
	dataHandler(handlerType,'essay',essay,null,null,null,successMsg,true);
}
/*Example:
$(".slider-item").mouseout(function(){
	$(this).find('.oper').hide();
	$(this).find('.img-layer').hide();
});
$(".slider-item").mouseover(function(){
	$(this).find('.oper').show();
	$(this).find('.img-layer').show();
});
function upload_scroll(){
	$('#uploadScrollForm').ajaxSubmit({
		success: function (data) {
			var result=$.parseJSON(data);
			if(result.code){
				add_new_scroll(result.message);
			}else{
				alert(result.message);
			}
		},
		url: "/cms/index/upload_img",
		data: $('#uploadScrollForm').formSerialize(),
		type: 'POST',
		beforeSubmit: function () {
			$("#img_add").attr("src","/assets/images/cms/loading.gif");
		}
	});
	return false;
}
function scroll_delete(scrollid,order,amount){
	if(confirm("确定删除该滚动图片？")){
		$.post(
			"/kmadmin/admin/del_info",
			{
				'info_type':"scroll",
				'scrollid':scrollid,
				'order':order,
				'amount':amount
			},
			function(data){
				var result=$.parseJSON(data);
				if(result.result=="success"){
					location.reload();
				}else{
					alert(result.message);
				}
			});
	}
}
function app_union_click(appid){
	setDivCenter("#appUnionDialog");
	$("#bkDiv").show();
	app_id=appid;
	$.post(
	"/kmadmin/admin/get_allunion",
	{
		'appid':appid
	},
	function(data){
		var result=$.parseJSON(data);
		if(result.result=="success"){
			var uniondata=result.message;
			$("#unionlist").html("");
			for(var unionid in uniondata){
//				$("#per_mall").prop("checked",true);
//				$("#per_mall").removeAttr("checked");
//				alert(uniondata[unionid]["unionname"]);
				if(uniondata[unionid]["has"]==1)
					$("#unionlist").append('<li><input checked type="checkbox" unionid="'+unionid+'">'+uniondata[unionid]["unionname"]+'</li>');
				else
					$("#unionlist").append('<li><input type="checkbox" unionid="'+unionid+'">'+uniondata[unionid]["unionname"]+'</li>');
			}
		}else{
			alert(result.message);
		}
	});
}
function save_app_union(){
	//app_union(appid,unionid,type)($("#id").attr("checked")==true
	$("#unionlist li").each(function(){
		if($(this).find("input").prop("checked")){
			app_union(app_id,$(this).find("input").attr("unionid"),"add");
		}else{
			app_union(app_id,$(this).find("input").attr("unionid"),"drop");
		}
	});
}
//app_union('<?php echo $a->id_app;?>','<?php echo $necessity->id_marketunion;?>','add')
function closeUnionDialog(){
	$("#appUnionDialog").hide();
	$("#bkDiv").hide();
}
*/