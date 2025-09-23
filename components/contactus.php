<div class="contact-form">
    <form method="post" onsubmit="return validateForm();">
        <h3>Send us a message</h3>
        <div class="form-row">
            <div class="form-group">
                <input type="text" name="txtFirstName" class="form-control" placeholder="First Name" value="" required />
            </div>
            <div class="form-group">
                <input type="text" name="txtLastName" class="form-control" placeholder="Last Name" value="" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <input type="text" name="txtPhone" class="form-control" placeholder="Mobile Number" value="" required pattern="[0-9]{10}" />
                <span class="error-msg" id="phone-error"></span>
            </div>
            <div class="form-group">
                <input type="text" name="txtEmail" class="form-control" placeholder="Email" value="" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" />
                <span class="error-msg" id="email-error"></span>
            </div>
        </div>
        <div class="form-group">
            <textarea name="txtMsg" class="form-control" placeholder="Message" required></textarea>
        </div>
        <div class="form-group text-center">
            <input type="submit" name="btnSubmit" class="btnContact" value="Send" />
        </div>
    </form>
    </div>

    <!-- Footer Section -->
<footer>
  <div class="footer-container"  >
    <div class="footer-logo">
      <img src="../../assets/img/logo.svg" alt="Diagon Alley Logo">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit nunc facilisis amet sed justo pellentesque. Enim congue nunc at auctor et leo, diam faucibus tellus.</p>
    </div>

    <div class="footer-links">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Books</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>

    <div class="footer-terms">
      <h4>Terms and Conditions</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit nunc facilisis amet sed justo pellentesque. Enim congue nunc at auctor et leo, diam faucibus tellus.</p>
    </div>

    <div class="footer-contact"  >
      <h4>Contact</h4>
      <ul>
        <li><i class="fa fa-phone"></i> 000-000-000</li>
        <li><i class="fa fa-envelope"></i> info@email.com</li>
        <li><i class="fa fa-map-marker"></i> Kalutara South</li>
      </ul>
    </div>
  </div>
</footer>


<script>
    function validateForm() {
        document.getElementById('phone-error').textContent = '';
        document.getElementById('email-error').textContent = '';
        const phoneNumber = document.querySelector('input[name="txtPhone"]').value;
        if (!/^[0-9]{10}$/.test(phoneNumber)) {
            document.getElementById('phone-error').textContent = 'Invalid phone number format';
            return false;
        }
        const email = document.querySelector('input[name="txtEmail"]').value;
        if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) {
            document.getElementById('email-error').textContent = 'Invalid email format';
            return false;
        }
        return true;
    }
</script>

<link href="../../components/contactus.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
