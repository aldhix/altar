$.fn.inputImg = function(){
  var id = this.attr('id');
  var app = this.parents('.profile-input').attr('id',id);

	$(document).on('click','#'+id+' .img-remove', function() {
	  $('#'+id+' .photo').val('');
	  $(this).hide();
	  $('#'+id+' .img-find').show();
	  var img_src = $('#'+id+' .img-preview').attr('data-src');
	  $('#'+id+' .img-preview').css('background-image', 'url('+img_src+')');
	  $('#'+id+' .img-preview').css('background-size', '160px');
	});

	$(document).on('click','#'+id+' .img-find', function() {
	  $('#'+id+' .photo').click();
	});

	$(document).on('change','#'+id+' .photo', function() {
	var thisFile = this;
	var reader = new FileReader();
	  reader.onload = function( e ){
	      var img = new Image();
	      img.src = e.target.result;
	      
	      img.onload = function () {
	          var w = this.width;
	          var h = this.height;
	          if(w > h){
	            var scala = 160/h;
	            var new_width = Math.floor(w * scala);
	            $('#'+id+' .img-preview').css('background-size', new_width+'px');  
	          } else {
	            $('#'+id+' .img-preview').css('background-size', '160px');
	          }
	          $('#'+id+' .img-preview').css('background-image', 'url('+this.src+')');
	          $('#'+id+' .img-find').hide();
	          $('#'+id+' .img-remove').show();
	      }
	  };
	  reader.readAsDataURL(thisFile.files[0]);
	});
}