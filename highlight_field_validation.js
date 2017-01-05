/*
Add the js and style in your html page

<script type="text/javascript" src="https://s3-ap-southeast-1.amazonaws.com/abacasys/website/js/jquery.min.js"></script>
 <script type="text/javascript" src="https://s3-ap-southeast-1.amazonaws.com/abacasys/website/js/jquery.validate.min.js"></script>
 
<style>.error{border:2px solid #ff0000 !important;}</style>

*/
	$("#oracle_form").validate({
		//Highlight the fields with error borders:
		debug:true,
		errorPlacement: function(error, element) { },
		//rules
		rules: {
			phone: {
				required: true,
				number: true,
				minlength:6,
				maxlength:13,
			}
		},
		submitHandler: function(form) {
		rate_Card();
		}
		
	});