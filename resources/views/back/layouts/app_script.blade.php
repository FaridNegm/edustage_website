<script>
	// check all input checkbox
	$('#checkAll').click(function () {    
		$('input:checkbox').prop('checked', this.checked);    
	});

	// Focus Search input when click ctrl+/
	$(document).bind('keydown', function(event) {
		if( event.which === 191 && event.ctrlKey ) {
			$(".app-search input").focus();
		}
	});

	// Style To Search input When Focus In And Out
	$(document).ready(function(){
		$(".app-search input").focusin(function(){
			$(this).css({
				background: "#fddc92",
				color: "black",
				fontWeight: "bold",
				transition: "all 0.5s ease-in-out",
			});
		});
		$(".app-search input").focusout(function(){
			$(this).css({
				background: "#f3f3f9",
			});
		});
	});
</script>

{{-- <script>
	var firstUpload = new FileUploadWithPreview('file_upload');
</script> --}}
{{-- <script>
		$(function() {  
			$("body").niceScroll({
				zindex: 20000,
				scrollspeed: 100,
			});
		});
</script> --}}