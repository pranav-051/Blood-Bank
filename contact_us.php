<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="Style/bootstrap.min.css">

</head>

<body>

<?php $active ='contact';
include 'head.php'; ?>


<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
  <h1 class="mt-4 mb-3">Contact Us</h1>
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form name="sentMessage" method="post">

            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" name="fullname" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="contactno"  required >
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary" style="margin:1cm;" onclick="show()" >Send Message</button>
        </form>
    </div>
    <div class="col-lg-4 mb-4">
        <h2>Contact Details</h2>
        <br>
        <p>
            <h4>Address :</h4>
            Gadge Nagar, Amravati
        </p>
        <p>
            <h4>Contact Number :</h4>
            8275807713
        </p>
        <p>
          <h4>  Email: </h4><a href="aadityathakare124@gmail.com">gpamravati@gmail.com</a>
          </a></b>
        </p>
    </div>
</div>

<script>
    function show()
    {
        alert('Query Sent, We will contact you shortly.');
    }
</script>



</div>
</div>

</div>
</body>

</html>
