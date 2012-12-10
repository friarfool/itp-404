<?php
echo "<script language='javascript'>";
echo "var biz = '$biz';";
echo "var zip = '$zip';";
echo "var id = '$id';";
?>
console.log("hello");
(function() {


	$.ajax({
			url: '/ITP404-MVCpart1/mvc1/public/opentable/',
			data: {
				biz: biz,
				zip: zip
			},
			success: function(response) {
			console.log(response);
				
				
			},
			error: function() {
				console.log('error');
			}
			});
			
			})();
			
			</script>