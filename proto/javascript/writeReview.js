$(document).ready(function(){
	// Check Radio-box
        $(".rating input:radio").attr("checked", false);

        $('.rating input').click(function () {
        	$(".rating span").removeClass('checked');
                $(this).parent().addClass('checked');
        }); 

	$('#writeReviewBtn').click(function() {
		$('#writeReview').css("visibility", "visible");
		$('#writeReview').css("opacity", "1");
	});

	$('#cancelReview').click(function() {
		$('#writeReview').css("opacity", "0");
		$('#writeReview').css("visibility", "hidden");
		$('input[name=Choose]').attr('checked',false);
		$('#writeReviewComment').val('');
		$(".rating span").removeClass('checked');
	});

	$('#submitButton').click(function() {
		$rating = $('input[name=rating]:checked').val();
		$comment = $('#writeReviewComment').val();
		$productID = $('#productID').val();
		var $result;

		$.ajax({
			type:"POST",
			url: "../../api/add_review.php",
			async: false,
			data: {
				rating: $rating ,
				comment: $comment,
				productID: $productID,
			},
			success: function(result) {
				$result = JSON.parse(result);
				$inserthtml = "	<hr>\
						<div class='row'>\
							<div class='col-md-12'>\
								<p class='pull-right'>";
				for (i = 0; i < $rating; i++) {
    					$inserthtml += "<span class='glyphicon glyphicon-star'></span>";
				}
				for (i = 0; i < 5 - $rating; i++) {
    					$inserthtml += "<span class='glyphicon glyphicon-star-empty'></span>";
				}
				$inserthtml += "	</p>\
						<p class='data'>" + $result['Date'] + "</p>\
						<div class='rev'>\
							<p>Subscried by: <br></p>\
							<p class='username'>" + $result['FirstName'] + " " + $result['LastName'] + "</p>\
							<p class='descr'>" + $comment + "</p>\</div> </div> </div>";
				$("#ReviewsTitle").after($inserthtml);
				$('#cancelReview').click();
			},
			error: function (xhr, ajaxOptions, thrownError) {
        			alert(xhr.status);
        			alert(thrownError);
      			}
		});
	});
});