<!-- CONTENT -->
<section class="py-12">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-md-6">

                <!-- Card -->
                <div class="card card-lg">
                    <div class="card-body">

                        <!-- Heading -->
                        <h6 class="mb-7">New Customer</h6>

                        <!-- Form -->
                        <form>
                            <div class="row">
                                <div class="col-12">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="registerFirstName">
                                            First Name *
                                        </label>
                                        <input class="form-control form-control-sm" id="registerFirstName"
                                            type="text" placeholder="First Name *" required>
                                    </div>

                                </div>
                                <div class="col-12">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="registerLastName">
                                            Last Name *
                                        </label>
                                        <input class="form-control form-control-sm" id="registerLastName" type="text"
                                            placeholder="Last Name *" required>
                                    </div>

                                </div>
                                <div class="col-12">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="registerEmail">
                                            Email Address *
                                        </label>
                                        <input class="form-control form-control-sm" id="registerEmail" type="email"
                                            placeholder="Email Address *" required>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="registerPassword">
                                            Password *
                                        </label>
                                        <input class="form-control form-control-sm" id="registerPassword"
                                            type="password" placeholder="Password *" required>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="registerPasswordConfirm">
                                            Confirm Password *
                                        </label>
                                        <input class="form-control form-control-sm" id="registerPasswordConfirm"
                                            type="password" placeholder="Confrm Password *" required>
                                    </div>

                                </div>
                                <div class="col-12 col-md-auto">

                                    <!-- Link -->
                                    <div class="form-group fs-sm text-muted">
                                       En s'inscrivant vous acceptez nos <a href="#">Conditions d'utilisation</a> et notre <a href="#">Politique de Confidentialité</a>.
                                    </div>

                                </div>
                                <div class="col-12 col-md">

                                    <!-- Newsletter -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" id="registerNewsletter" type="checkbox">
                                            <label class="form-check-label" for="registerNewsletter">
                                                Sign me up for the Newsletter!
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row justify-content-center">

                                    <!-- Button -->
                                    <button class="btn btn-sm btn-dark" type="submit">
                                        S'inscrire
                                    </button>

                                </div>
                                <div>
                                    <!-- Link -->
                                    <div class="form-group fs-sm text-center">
                                        vous avez deja un compte ? <a wire:navigate href="{{ route('customer.login') }}">Connexion</a>.
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