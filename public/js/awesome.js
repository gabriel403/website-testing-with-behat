$(function() {
	$("#loginButton").on("click", function(e) {
		if ('button' == $(this).prop('type')) {
			e.preventDefault();
			$(this).before( '<input type="email" name="email" placeholder="email address">' );
			$(this).before( '<input type="password" name="password" placeholder="password">' );
			$(this).prop('type','submit');
		}
	})
});
