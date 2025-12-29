<div class="row" style="padding: 100px 300px">
  <div class="col-50">
    <div class="container"></div>

    <form action="payscript.php" method="post" style="padding: 25px;">

      <div class="row">
        <div class="col-25">
          <h3 style="text-align: center;margin: 20px 10px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
            Checkout Form
          </h3>

          <label for="fname"><i class="fa fa-user"></i> Full Name</label>
          <input type="text" id="fname" name="name" placeholder="John M. Doe" required>

          <label for="email"><i class="fa fa-envelope"></i> Email</label>
          <input type="email" id="email" name="email" placeholder="john@example.com" required>

          <!-- PHP should run in .php file -->
          <input type="hidden" value="<?php echo 'OID'.rand(100,1000); ?>" name="orderid">
          <input type="hidden" value="<?php echo 1; ?>" name="amount">

          <label for="mobile"><i class="fa fa-mobile"></i> Mobile</label>
          <input type="tel" id="mobile" name="mobile" placeholder="+91 123 456 7890" required pattern="[0-9]{10,12}">

          <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
          <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
        </div>

        <input type="submit" value="Proceed to Pay" class="btn">
      </div>

    </form>
  </div>
</div>
