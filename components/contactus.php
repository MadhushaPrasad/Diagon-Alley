<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="contactus.css" rel="stylesheet">
</head>
<body>
    <div class="contact-form">
        <form method="post">
            <h3>Send us a message</h3>
            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="txtFirstName" class="form-control" placeholder="First Name" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtLastName" class="form-control" placeholder="Last Name" value="" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Mobile Number" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Email" value="" />
                </div>
            </div>
            <div class="form-group">
                <textarea name="txtMsg" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="btnSubmit" class="btnContact" value="Send" />
            </div>
        </form>
    </div>
</body>
</html>