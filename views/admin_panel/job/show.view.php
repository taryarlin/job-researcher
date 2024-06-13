<?php require base_path('views/admin_panel/layouts/header.view.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">

                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <h5>Admins</h5>

                        <a href="/admins" class="btn btn-primary">Back</a>
                    </div>

                    <hr/>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><?= $admin['name'] ?></td>
                                <td><?= $admin['email'] ?></td>
                                <td><?= $admin['phone'] ?></td>
                                <td><?= $admin['created_at'] ?></td>
                                <td><?= $admin['updated_at'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require base_path('views/admin_panel/layouts/footer.view.php') ?>
