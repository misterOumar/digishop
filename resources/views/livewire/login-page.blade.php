<!-- CONTENT -->
<section class="py-12">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6">

          <!-- Card -->
          <div class="card card-lg mb-10 mb-md-0">
            <div class="card-body">

              <!-- Heading -->
              <h6 class="mb-7">Returning Customer</h6>

              <!-- Form -->
              <form>
                <div class="row">
                  <div class="col-12">

                    <!-- Email -->
                    <div class="form-group">
                      <label class="visually-hidden" for="loginEmail">
                        Email Address *
                      </label>
                      <input class="form-control form-control-sm" id="loginEmail" type="email" placeholder="Email Address *" required>
                    </div>

                  </div>
                  <div class="col-12">

                    <!-- Password -->
                    <div class="form-group">
                      <label class="visually-hidden" for="loginPassword">
                        Password *
                      </label>
                      <input class="form-control form-control-sm" id="loginPassword" type="password" placeholder="Password *" required>
                    </div>

                  </div>
                  <div class="col-12 col-md">

                    <!-- Remember -->
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" id="loginRemember" type="checkbox">
                        <label class="form-check-label" for="loginRemember">
                          Remember me
                        </label>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-auto">

                    <!-- Link -->
                    <div class="form-group">
                      <a class="fs-sm text-reset" data-bs-toggle="modal" href="#modalPasswordReset">Forgot Password?</a>
                    </div>

                  </div>
                  <div class="row justify-content-center">

                    <!-- Button -->
                    <button class="btn btn-sm btn-dark" type="submit">
                        Se connecter
                    </button>

                </div>
                <div>
                    <!-- Link -->
                    <div class="form-group fs-sm text-center">
                        vous n'avez pas de compte ? <a wire:navigate href="{{ route('customer.register') }}">inscrivez-vous</a>.
                    </div>
                </div>
                </div>
              </form>

            </div>
          </div>

        </div>
        
      </div>
    </div>
  </section>