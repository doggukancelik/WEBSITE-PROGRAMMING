

<html>
<head>
<title>Contact Us Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form name="frmContact" id="" frmContact"" method="POST"
            action="" enctype="multipart/form-data" class="login-email"
            onsubmit="return validateContactForm()">
<p class="login-text" style="font-size: 2rem; font-weight: 800;">CONTACT US</p>
            <div class="input-group">
                 <span id="userName-info" class="info"></span> <input
                    type="text" class="input-field" placeholder="Name" name="userName"
                    id="userName" />
            </div>
            <div class="input-group">
                 <span id="userEmail-info"
                    class="info"></span> <input type="text"
                    class="input-field" placeholder="Email" name="userEmail" id="userEmail" />
            </div>
            <div class="input-group">
                 <span id="subject-info"
                    class="info"></span><input type="text"
                    class="input-field" placeholder="Subject" name="subject" id="subject" />
            </div>

            <div class="input-group">
                 <span id="userMessage-info"
                    class="info"></span><input type="text"
                    class="input-field"  placeholder="Message" name="content" id="content" />
            </div>

            <div>
            	<div class="input-group">
               </a><input type="submit" name="send" class="btn"
                    value="SEND";
                 
                    
                    
            


/>
                    <br>
				</div>
			
                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <?php
                            header("Location: /mycomputer/appStarterPhp2/");
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
</html>