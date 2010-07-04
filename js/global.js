// JavaScript Document
$(document).ready(function(){
	$("#flipPage").fadeOut(500);					   
	$("#flipPage").jFlip(700,853,{background:"../img/paper.jpg",cornersTop:true,scale:"fit"}).
	bind("flip.jflip",function(event,index,total){
		$("#pageNumber").html("Image "+(index+1)+" of "+total);
	});
});