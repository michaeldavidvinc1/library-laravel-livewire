<div>
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card form-signin p-4 rounded shadow">
                        <form wire:submit='save'>
                            <a href="index.html"><img src="{{ asset('assets/logo.svg') }}" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                            <h5 class="mb-3 text-center">Reset your password</h5>

                            <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>
                        
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" wire:model='email'>
                                <label for="floatingInput">Email address</label>
                            </div>
            
                            <button class="btn btn-primary w-100" type="submit">Send</button>

                            <div class="col-12 text-center mt-3">
                                <p class="mb-0 mt-3"><small class="text-dark me-2">Remember your password ?</small> <a href="{{ route('login.page') }}" class="text-dark fw-bold">Sign in</a></p>
                            </div><!--end col-->

                            <p class="mb-0 text-muted mt-3 text-center">© <script>document.write(new Date().getFullYear())</script> LibraSync.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--end container-->
    </section>
</div>
