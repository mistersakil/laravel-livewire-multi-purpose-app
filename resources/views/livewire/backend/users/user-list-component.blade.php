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
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Age</th>
                                <th scope="col">Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bridie Kessler</td>
                                <td>Developer</td>
                                <td>35</td>
                                <td>2014-12-05</td>
                            </tr>

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
    <div class="modal fade" id="add_modal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <input type="name" class="form-control" wire:model.defer="user.name"
                                placeholder="Full Name">
                            <label for="name">Name</label>
                        </div>
                        <!-- /.form-floating -->

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" wire:model.defer="user.email" placeholder="Email">
                            <label>Email</label>
                        </div>
                        <!-- /.form-floating -->

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" wire:model.defer="user.password"
                                placeholder="Password">
                            <label>Password</label>
                        </div>
                        <!-- /.form-floating -->


                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" wire:model.defer="user.confirm_password"
                                placeholder="Password">
                            <label for="password">Confirm Password</label>
                        </div>
                        <!-- /.form-floating -->


                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" wire:model.defer="user.mobile"
                                placeholder="Mobile">
                            <label for="mobile">Mobile</label>
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
