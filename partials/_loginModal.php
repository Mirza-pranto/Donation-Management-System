<div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content  ">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/donation/partials/_handleLogin.php" method="post">
      <div class="modal-body ">
        
        <div class="form-floating mb-3 ">
            <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="name@xmail.com">
            <label for="loginEmail">Email address</label>
          </div>
          <div class="form-floating ">
            <input type="password" class="form-control" id="loginPass" name="loginPass" placeholder="Password">
            <label for="loginPass">Password</label>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-dark">Login</button>
      </div>
    </form> 
    </div>
  </div>
</div>