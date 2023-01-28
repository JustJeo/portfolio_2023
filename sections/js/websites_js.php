<script>
$(document).ready(function() {
    /* Laptops Plus */
    $("#laptops-plus-btn").on('click', function() {
        // $("html, body").animate({ scrollTop: "0" });
        $("#project-portal").show();
        $.ajax({
            url: "ajax/laptops_plus_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });
})

</script>