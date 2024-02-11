<div>
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Profile Setting</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Profile</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-6 mt-4">
            <div class="card border-0 rounded shadow">
                <div class="card-body">
                    <h5 class="text-md-start text-center mb-0">Personal Detail :</h5>
                    <form wire:submit='updateProfile'>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input name="name" id="name" type="text" class="form-control ps-5" wire:model='name'>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                        <input name="email" id="email" type="email" class="form-control ps-5" wire:model='email'>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                        <input name="name" id="occupation" type="text" class="form-control ps-5" wire:model='phone'>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="home" class="fea icon-sm icons"></i>
                                        <textarea name="comments" id="comments" rows="4" class="form-control ps-5" wire:model='address'></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" id="submit" name="send" class="btn btn-primary"
                                    value="Save Changes">
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                    <!--end form-->
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-lg-6 mt-4">
            <div class="card border-0 rounded shadow p-4">
                <h5 class="mb-0">Change password :</h5>
                <form wire:submit='updatePassword'>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Old password :</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                    <input type="password" class="form-control ps-5" placeholder="Old password"
                                        required wire:model='current_password'>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">New password :</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                    <input type="password" class="form-control ps-5" placeholder="New password"
                                        required="" wire:model='new_password'>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Re-type New password :</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                    <input type="password" class="form-control ps-5 @error('confirm_password')
                                    border border-danger
                                @enderror" placeholder="Re-type New password"
                                        required="" wire:model='confirm_password'>
                                    @error('confirm_password')
                                        <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 mt-2 mb-0">
                            <button type="submit" class="btn btn-primary">Save password</button>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
</div>