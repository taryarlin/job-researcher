<?php require base_path('views/admin_panel/layouts/header.view.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">

                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <h5>Categories</h5>

                        <a href="/categories/create" class="btn btn-primary">Create Category</a>
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
                            <?php foreach($categories as $key => $category) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $category['name']; ?></td>
                                    <td><?= $category['created_at']; ?></td>
                                    <td><?= $category['updated_at']; ?></td>
                                    <td>
                                        <div style="display: flex;justify-content: space-between;align-items: center;">
                                            <a href="/categories/show?id=<?= $category['id']; ?>" class="btn btn-info">View</a>

                                            <a href="/categories/edit?id=<?= $category['id']; ?>" class="btn btn-warning">Edit</a>

                                            <form method="POST" action="/categories/delete" id="delete_admin">
                                                <input type="hidden" name="id" value="<?= $category['id']; ?>">

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
