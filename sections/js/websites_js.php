<script>
$(document).ready(function() {
    /* Laptops Plus */
    $("#laptops-plus-btn").on('click', function() {
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

    /* Bullards Bar */
    $("#bullards-bar-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/bullards_bar_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* Solano Computer Guy */
    $("#solano-computer-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/solano_computer_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* My Wire Guy */
    $("#my-wire-guy-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/my_wire_guy_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* Sircles */
    $("#sircles-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/sircles_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* Scarlett's Cancerfree Community */
    $("#scarlett-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/scarlett_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* Bice */
    $("#bice-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/bice_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* Flight Training */
    $("#flight-training-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/flight_training_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* Madden Lawyer */
    $("#madden-lawyer-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/madden_lawyer_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* TLC Computer Solutions */
    $("#tlc-computer-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/tlc_computer_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* San Diego Computer Help */
    $("#sd-computer-help-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/sd_computer_help_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });

    /* FireUp */
    $("#fireup-btn").on('click', function() {
        $("#project-portal").show();
        $.ajax({
            url: "ajax/fireup_info.php",
            method: "POST",
            data: {},
            success: function(data) {
                $("#project-portal-contents").html(data);
            }
        });
    });
})

</script>