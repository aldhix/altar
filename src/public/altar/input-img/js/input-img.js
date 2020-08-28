$.fn.inputImg = function(){
  var id = this.attr('id');
  var app = this.parents('.profile-input').attr('id',id);
  var parent_id = "#"+id;

	$(document).on('click',parent_id+' .img-remove', function() {
	  $(parent_id+' .photo').val('');
	  $(this).hide();
	  $(parent_id+' .img-find').show();
	  var img_src = $(parent_id+' .img-preview').attr('data-src');
	  $(parent_id+' .img-preview').css('background-image', 'url('+img_src+')');
	  $(parent_id+' .img-preview').css('background-size', '160px');
	});

	$(document).on('click',parent_id+' .img-find', function() {
	  $(parent_id+' .photo').click();
	});

	$(document).on('change',parent_id+' .photo', function() {
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
	            $(parent_id+' .img-preview').css('background-size', new_width+'px');  
	          } else {
	            $(parent_id+' .img-preview').css('background-size', '160px');
	          }
	          $(parent_id+' .img-preview').css('background-image', 'url('+this.src+')');
	          $(parent_id+' .img-find').hide();
	          $(parent_id+' .img-remove').show();
	      }
	  };
	  reader.readAsDataURL(thisFile.files[0]);
	});
}