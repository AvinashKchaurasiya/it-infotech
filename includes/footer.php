<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div>
                <h4>Contact Us</h4>
                <address class="footer-address">
                    <i class="bi bi-geo-alt-fill me-2"></i>Ramadevi Market,<br>
                    Kanpur Nagar, UP <br>
                    India<br>
                    <a href="tel:+91 88876 22182"><i class="bi bi-telephone-fill me-2"></i> +91 88876 22182</a><br>
                    <a href="mailto:contact@bharatxtechs.com "><i class="bi bi-envelope me-2"></i>contact@bharatxtechs.com</a>
                </address>
            </div>
            <div>
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4>Follow Us</h4>
                <ul class="footer-social-icons">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/104126240/admin/dashboard/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- JS links -->
<?php
require('includes/JSlink.php');
?>
<script>
    $(document).ready(function() {
        $("#contactForm").on("submit", function(event) {
            event.preventDefault();

            var formData = {
                name: $("#name").val(),
                email: $("#email").val(),
                subject: $("#subject").val(),
                message: $("#message").val()
            };

            $("#submitBtn").text("Loading...");

            $.ajax({
                type: "POST",
                url: "Code/contact-us.php",
                data: formData,
                dataType: "json",
                encode: true,
                success: function(response) {
                    $("#submitBtn").text("Submit");

                    // Show success message
                    showNotification(response.message, response.status);
                    $("#contactForm")[0].reset();
                },
                error: function(xhr, status, error) {
                    $("#submitBtn").text("Submit");

                    // Show error message
                    showNotification(response.message, response.status);
                    $("#contactForm")[0].reset();
                }
            });
        });

        function showNotification(message, type) {
            var notification = $("<div class='notification'></div>").text(message);
            if (type == "success") {
                notification.addClass("success");
            } else {
                notification.addClass("error");
            }

            $("body").append(notification);
            notification.animate({
                right: "10px"
            }, 500).delay(3000).fadeOut(700, function() {
                $(this).remove();
            });
        }
    });
</script>