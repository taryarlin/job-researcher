<?php require base_path('views/admin_panel/layouts/header.view.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">

                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <h5>Admins</h5>

                        <a href="/admins/create" class="btn btn-primary">Create Admin</a>
                    </div>

                    <hr/>

                    <table class="table table-striped w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($admins as $key => $admin) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $admin['name']; ?></td>
                                    <td><?= $admin['email']; ?></td>
                                    <td><?= $admin['phone']; ?></td>
                                    <td><?= $admin['created_at']; ?></td>
                                    <td><?= $admin['updated_at']; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require base_path('views/admin_panel/layouts/footer.view.php') ?>
