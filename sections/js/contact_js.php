<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
$('#message-form').on("submit", function(event) {
    event.preventDefault();

    let captcha_response = $('textarea[name=g-recaptcha-response]').val();

    if (captcha_response == '') {
        Swal.fire({
            icon: 'error',
            title: "CAPTCHA Check Required"
        });
        return;
    }

  
    $.ajax({
		url:"ajax/contact_form.php",
		method:"POST",
		data:$('#message-form').serialize(),
		success:function(data){
			Swal.fire(
			  data
			);
		}
	});
});
</script>