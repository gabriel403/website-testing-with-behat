$(function() {
	var clickedon = false;
	$("#loginButton").on("click", function(e) {
		if (!clickedon) {
			e.preventDefault();
			$(this).before( '<input type="email" name="email" placeholder="email address">' );
			$(this).before( '<input type="password" name="password" placeholder="password">' );
			clickedon = true
		}
	})
});
