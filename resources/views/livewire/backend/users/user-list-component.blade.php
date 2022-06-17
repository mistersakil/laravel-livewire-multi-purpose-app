<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>
                        User List
                    </h3>
                </div>
            </div>
            <!-- /.page-header-left -->
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item">
                        <a class="btn-primary btn-sm" wire:click.prevent="create">
                            <i class="fas fa-plus"></i>
                            Add New
                        </a>
                    </li>
                    <!-- /.breadcrumb-item -->
                </ol>
                <!-- /.breadcrumb -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.page-header -->
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                @if (isset($users) && count($users))
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="table-active">
                                <th width="5%">#</th>
                                <th width="20%">Name</th>
                                <th width="20%">Email</th>
                                <th width="15%">Mobile</th>
                                <th width="10%">Status</th>
                                <th width="15%">Created At</th>
                                <th width="15%" class="text-center">Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>
                                        @if ($user->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at }}</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" wire:click.prevent="show({{ $user }})"
                                            class="badge bg-secondary" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="javascript:void(0)" wire:click.prevent="edit({{ $user }})"
                                            class="badge bg-warning" title="View">
                                            <i class="fas fa-pencil"></i>
                                        </a>
                                        <a href="javascript:void(0)" wire:click.prevent="delete({{ $user->id }})"
                                            class="badge bg-danger" title="View">
                                            <i class="fas fa-trash"></i>
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
                        {{ $users->links() }}
                    </div>
                    <!-- End: Pagination links -->
                @else
                    <h4 class="text-muted p-2"> No data found </h4>
                @endif
            </div>
            <!-- /.table-responsive -->


        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- Modal (create & edit user) -->
    <div class="modal fade" id="add_modal" wire:ignore.self>
        <div class="modal-dialog">
            <form wire:submit.prevent="{{ !$is_edit ? 'store' : 'update' }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            @if ($is_edit)
                                Edit User Info
                            @else
                                Add New User
                            @endif

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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


                    <div class="row mb-2">
                        <div class="col-md-4 col-form-label ">Full Name</div>
                        <div class="col-md-8">
                            <input wire:model="user.name" class="form-control" readonly />
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row mb-2">
                        <div class="col-md-4 col-form-label ">Email</div>
                        <div class="col-md-8">
                            <input wire:model="user.email" class="form-control" readonly />
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row mb-2">
                        <div class="col-md-4 col-form-label ">Mobile</div>
                        <div class="col-md-8">
                            <input wire:model="user.mobile" class="form-control" readonly />
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row mb-2">
                        <div class="col-md-4 col-form-label ">Joined At</div>
                        <div class="col-md-8">
                            <input wire:model="user.created_at" class="form-control" readonly />
                        </div>
                    </div>
                    <!-- /.row -->


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
                    Hay! {{ $toast_message }}
                </div>
                <!-- /.toast-body -->
            </div>
            <!-- /.toast -->
        </div>
        <!-- /.toast-container -->
    </div>
    <!-- End: Toast Notification -->
</div>
<!-- /.container-fluid -->
