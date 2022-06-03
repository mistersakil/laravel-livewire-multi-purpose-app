<div class="row">

    <div class="col-md-12">
        <div class="card box-shadow-3 border-primary">

            <div class="card-content collapse show">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-xs table-bordered table-hover">
                            <thead>
                                <tr class="table-active">
                                    <th>SL</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>sakil@gmail.com</td>
                                    <td>01720092787</td>
                                    <td>
                                        <div class="form-group">

                                            <button type="button" class="btn btn-icon btn-warning btn-sm">
                                                <i class="fas fa-pen-to-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm">
                                                <i class="fa-solid fa-delete-left"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>sakil@gmail.com</td>
                                    <td>01720092787</td>
                                    <td>
                                        <div class="form-group">

                                            <button type="button" class="btn btn-icon btn-warning btn-sm">
                                                <i class="fas fa-pen-to-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm">
                                                <i class="fa-solid fa-delete-left"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>sakil@gmail.com</td>
                                    <td>01720092787</td>
                                    <td>
                                        <div class="form-group">

                                            <button type="button" class="btn btn-icon btn-warning btn-sm">
                                                <i class="fas fa-pen-to-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm">
                                                <i class="fa-solid fa-delete-left"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive  -->
                </div>
                <!-- /.card-body  -->
            </div>
            <!-- /.card-content  -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->

    <!-- Create Modal -->
    <div class="modal fade" id="create_modal" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <form wire:submit.prevent="createNew" enctype="multipart/form-data" id="create_form" autocomplete="off">
                    <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel">Add New User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <!-- /.modal-header -->

                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="first_name" class="col-md-3 col-form-label">
                                <strong>First Name</strong>
                                <sup title="Required" class="text-danger">*</sup>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Ex: Sakil" autofocus />
                            </div>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group row">
                            <label for="last_name" class="col-md-3 col-form-label">
                                <strong>Last Name</strong>
                                <sup title="Required" class="text-danger">*</sup>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Ex: Mahmud" />
                            </div>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label">
                                <strong>Email</strong>
                                <sup title="Required" class="text-danger">*</sup>
                            </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Ex: sakil.diu.cse@gmail.com" />
                            </div>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group row">
                            <label for="mobile" class="col-md-3 col-form-label">
                                <strong>Mobile Number</strong>
                                <sup title="Required" class="text-danger">*</sup></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                    placeholder="Ex: 01720092787" />
                            </div>
                        </div>
                        <!-- /.form-group -->


                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label">
                                <strong>Password</strong>
                                <sup title="Required" class="text-danger">*</sup>
                            </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="********" />
                            </div>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group row">
                            <label for="password_confirm" class="col-md-3 col-form-label">
                                <strong>Conform Password</strong>
                                <sup title="Required" class="text-danger">*</sup>
                            </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password_confirm"
                                    name="password_confirm" placeholder="********" />
                            </div>
                        </div>
                        <!-- /.form-group -->


                    </div>
                    <!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button wire:click.prevent="createNew" type="button" class="btn btn-info">Sava</button>
                    </div>
                    <!-- /.modal-footer -->
                </form>
                <!-- /#create_form -->
            </div>
            <!-- /.modal-content -->

        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End Create Modal & /.modal -->

</div>
<!-- /.row -->
