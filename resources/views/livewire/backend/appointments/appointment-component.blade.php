<section class="section">
    <div class="pagetitle d-flex justify-content-between">
        <div>
            <h1>
                Appointments
            </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.appointments') }}">Appointments</a>
                    </li>
                </ol>
                <!-- /.breadcrumb -->
            </nav>
            <!-- /nav -->
        </div>
        <div>
            <button type="button" class="btn btn-secondary pull-right" id="add_btn" data-bs-toggle="modal"
                wire:click.prevent="create">
                <i class="bi bi-plus me-1"></i>
                Add New
            </button>
        </div>

    </div>
    <!-- /.pagetitle -->

    <!-- User List -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card pt-3">
                <div class="card-body table-responsive">
                    @if (isset($models) && count($models))
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-active">
                                    <th width="5%">#</th>
                                    <th width="20%">Client</th>
                                    <th width="20%">Date</th>
                                    <th width="15%">Time</th>
                                    <th width="10%">Status</th>
                                    <th width="15%">Created At</th>
                                    <th width="15%" class="text-center">Actions</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($models as $key => $model)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $model->client_id }}</td>
                                        <td>{{ $model->date }}</td>
                                        <td>{{ $model->time }}</td>
                                        <td>
                                            @if ($model->status)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{ $model->created_at->diffForHumans() }}</td>
                                        <td class="text-center">
                                            <a wire:click.prevent="show({{ $model }})"
                                                class="btn badge bg-secondary" title="View">
                                                <i class="bi bi-eye me-1"></i>
                                            </a>
                                            <a wire:click.prevent="edit({{ $model }})"
                                                class="btn badge bg-warning" title="View">
                                                <i class="bi bi-pencil me-1"></i>
                                            </a>
                                            <a wire:click.prevent="delete({{ $model->id }})"
                                                class="btn badge bg-danger" title="View">
                                                <i class="bi bi-trash me-1"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <!-- /tbody -->
                        </table>
                        <!-- /.table -->

                        <!-- Pagination links -->
                        <div class="d-flex justify-content-end">
                            {{ $models->links() }}
                        </div>
                        <!-- End: Pagination links -->
                    @else
                        <h4 class="text-muted p-2"> No data found </h4>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Modal (create & edit user) -->
    <div class="modal fade" id="add_modal" wire:ignore.self>
        <div class="modal-dialog">
            <form wire:submit.prevent="{{ isset($is_edit) && $is_edit ? 'update' : 'store' }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            @if (isset($is_edit) && $is_edit)
                                Edit User Info
                            @else
                                Add New User
                            @endif

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <!-- /.modal-header -->
                    <div class="modal-body">

                        <div class="form-floating mb-3">
                            <input type="name" class="form-control  @error('name') is-invalid @enderror"
                                wire:model.defer="user.name" placeholder="Full Name" />
                            <label for="name">Full Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <!-- /.form-floating -->

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                wire:model.defer="user.email" placeholder="Email Address" />
                            <label>Email Address</label>
                            @error('email')
                                <div id="invalid_name" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- /.form-floating -->

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                wire:model.defer="user.password" placeholder="Password" />
                            <label>Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- /.form-floating -->


                        <div class="form-floating mb-3">
                            <input type="password"
                                class="form-control @error('password_confirmation ') is-invalid @enderror"
                                wire:model.defer="user.password_confirmation" placeholder="Confirm Password" />
                            <label>Confirm Password</label>
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- /.form-floating -->


                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('mobile') is-invalid @enderror"
                                wire:model.defer="user.mobile" placeholder="Mobile Number" />
                            <label>Mobile Number</label>
                            @error('mobile')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- /.form-floating -->

                    </div>
                    <!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x"></i>
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bxs-cloud-upload"></i>
                            Save
                        </button>
                    </div>
                    <!-- /.modal-footer -->
                </div>
                <!-- /.modal-contents -->
            </form>
            <!-- /form -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal show details -->
    <div class="modal fade" id="show_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        User Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- /.modal-header -->
                <div class="modal-body">

                    <div class="show">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                            <div class="col-lg-9 col-md-8"></div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Company</div>
                            <div class="col-lg-9 col-md-8"></div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Job</div>
                            <div class="col-lg-9 col-md-8"></div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.show -->
                </div>
                <!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x"></i>
                        Close
                    </button>
                </div>
                <!-- /.modal-footer -->

            </div>
            <!-- /.modal-contents -->

        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal delete user confirmation -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Delete User
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- /.modal-header -->
                <div class="modal-body">
                    Are you sure? You can't revert this action! It's permanent.
                </div>
                <!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x"></i>
                        Close
                    </button>
                    <button wire:click.prevent="destroy" type="button" class="btn btn-danger">
                        <i class="bx bxs-trash"></i>
                        Delete
                    </button>
                </div>
                <!-- /.modal-footer -->

            </div>
            <!-- /.modal-contents -->

        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Toast Notification -->
    <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative">
        <div class="toast-container position-fixed top-0 end-0 p-1" style="z-index: 111111">
            <div class="toast" id="toast_alert">
                <div class="toast-header">
                    <strong class="me-auto">Successful</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                <!-- /.toast-header -->
                <div class="toast-body bg-success text-light">
                    Hay!
                    @if (isset($toast_message))
                        {{ $toast_message }}
                    @endif
                </div>
                <!-- /.toast-body -->
            </div>
            <!-- /.toast -->
        </div>
        <!-- /.toast-container -->
    </div>
    <!-- End: Toast Notification -->

</section>
<!-- /.section -->