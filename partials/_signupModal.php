
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="signupModalLabel">Sign Up Here!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/donation/partials/_handleSignup.php" method="post">
        <div class="modal-body">

        <div class="mb-3">
              <label for="name" class="form-label"><b>Full Name</b> </label>
              <input type="text" class="form-control" id="name" name="name"  placeholder="Enter your name">
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label"><b>Phone</b> </label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
            </div>

            <div class="mb-3">
              <label for="nid_no" class="form-label"><b>NID No</b></label>
              <input type="text" class="form-control" id="nid_no" name="nid_no" placeholder="Enter your NID number">
            </div>
            
            <p>
             <b>Adress</b>  
              <p/>
            <hr>

            <div class="mb-3">
              <label for="road_no" class="form-label">Road No</label>
              <input type="text" class="form-control" id="road_no" name="road_no" placeholder="Enter your road number">
            </div>

            <div class="mb-3">
              <label for="area" class="form-label">Area</label>
              <input type="text" class="form-control" id="area" name="area" placeholder="Enter your area">
            </div>

            <div class="mb-3">
              <label for="zip" class="form-label">Zip Code</label>
              <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter your zip code">
            </div>

            <div class="mb-3">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city">
            </div>



          <hr>

          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="signupEmail" name="signupEmail" placeholder="name@xmail.com" required>
            <label for="signupEmail"><b>Email address</b></label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Password" required>
            <label for="signupPassword"><b>Password</b></label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="signupcPassword" name="signupcPassword" placeholder="Confirm Password" required>
            <label for="signupcPassword"><b>Confirm Password</b></label>
          </div>
        </div>




        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
</div>

