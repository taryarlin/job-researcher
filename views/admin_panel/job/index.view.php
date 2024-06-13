<?php require base_path('views/admin_panel/layouts/header.view.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">

                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <h5>Jobs</h5>

                        <a href="/jobs/create" class="btn btn-primary">Create Job</a>
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
                            <?php foreach($jobs as $key => $job) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td>
                                        <?= $job['title']; ?>
                                    </td>
                                    <td><?= $job['created_at']; ?></td>
                                    <td><?= $job['updated_at']; ?></td>
                                    <td>
                                        <div style="display: flex;justify-content: space-between;align-items: center;">
                                            <a href="/jobs/show?id=<?= $job['id']; ?>" class="btn btn-info">View</a>

                                            <a href="/jobs/edit?id=<?= $job['id']; ?>" class="btn btn-warning">Edit</a>

                                            <form method="POST" action="/jobs/delete" id="delete_admin">
                                                <input type="hidden" name="id" value="<?= $job['id']; ?>">

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
