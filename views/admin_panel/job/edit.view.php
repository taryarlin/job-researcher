<?php require base_path('views/admin_panel/layouts/header.view.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">

                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <h5>Edit Company</h5>

                        <a href="/categories" class="btn btn-primary">Back</a>
                    </div>

                    <hr/>

                    <?php if(isset($errors) && count($errors) > 0) : ?>
                        <?php foreach($errors as $error) : ?>
                            <div class="alert alert-danger">
                                <?= $error; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <form action="/companies/edit" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $company['id'] ?>" >
                        <!-- <input type="hidden" name="_method" value="PATCH" > -->

                        <div class="form-group mb-3">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $company['name']; ?>">
                        </div>

                        <div>
                            <img
                                src="<?= $company['logo'] ?>"
                                alt="<?= $company['name']; ?>"
                                style="object-fit: cover;width: 100px;height: auto;"
                            />
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo <span class="text-danger">*</span></label>

                            <input type="file" class="form-control" id="logo" name="logo">
                        </div>

                        <button class="btn btn-primary mt-3">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require base_path('views/admin_panel/layouts/footer.view.php') ?>
