<?php require base_path('views/admin_panel/layouts/header.view.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">

                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <h5>Companies</h5>

                        <a href="/companies/create" class="btn btn-primary">Create Company</a>
                    </div>

                    <hr/>

                    <table class="table table-striped w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($companies as $key => $company) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $company['name']; ?></td>
                                    <td><?= $company['created_at']; ?></td>
                                    <td><?= $company['updated_at']; ?></td>
                                    <td>
                                        <div style="display: flex;justify-content: space-between;align-items: center;">
                                            <a href="/companies/show?id=<?= $company['id']; ?>" class="btn btn-info">View</a>

                                            <a href="/companies/edit?id=<?= $company['id']; ?>" class="btn btn-warning">Edit</a>

                                            <form method="POST" action="/companies/delete" id="delete_admin">
                                                <input type="hidden" name="id" value="<?= $company['id']; ?>">

                                                <button id="deleteBtn" type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
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
