<section class="section">

    <div class="pagetitle d-flex justify-content-between">
        <div>
            <h1>
                User List
            </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
                <!-- /.breadcrumb -->
            </nav>
            <!-- /nav -->
        </div>
        <div>
            <button type="button" class="btn btn-secondary pull-right" id="add_btn" data-bs-toggle="modal"
                wire:click.prevent="add_modal">
                <i class="bi bi-plus me-1"></i>
                Add New
            </button>
        </div>

    </div>
    <!-- /.pagetitle -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card pt-3">
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="table-active">
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th class="text-center">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
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
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-secondary btn-sm" title="View">
                                            <i class="bi bi-eye me-1"></i>
                                        </a>
                                        <a href="" class="btn btn-warning btn-sm" title="View">
                                            <i class="bi bi-pencil me-1"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm" title="View">
                                            <i class="bi bi-trash me-1"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- /.table -->

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Modal -->
    <div class="modal fade" id="add_modal" wire:ignore.self>
        <div class="modal-dialog">
            <form wire:submit.prevent="create">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <!-- /.modal-header -->
                    <div class="modal-body">

                        <div class="form-floating mb-3">
                            <input type="name" class="form-control  @error('name') is-invalid @enderror"
                                wire:model.defer="user.name" placeholder="Full Name">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <!-- /.form-floating -->

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                wire:model.defer="user.email" placeholder="Email">
                            <label>Email</label>
                            @error('email')
                                <div id="invalid_name" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- /.form-floating -->

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                wire:model.defer="user.password" placeholder="Password">
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
                                wire:model.defer="user.password_confirmation" placeholder="Password">
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
                                wire:model.defer="user.mobile" placeholder="Mobile">
                            <label>Mobile</label>
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
</section>
<!-- /.section -->
