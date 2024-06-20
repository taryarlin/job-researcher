<?php require base_path('views/admin_panel/layouts/header.view.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">

                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <h5>Edit Job</h5>

                        <a href="/jobs" class="btn btn-primary">Back</a>
                    </div>

                    <hr/>

                    <?php if(isset($errors) && count($errors) > 0) : ?>
                        <?php foreach($errors as $error) : ?>
                            <div class="alert alert-danger">
                                <?= $error; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <form action="/jobs/edit" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $job['id'] ?>" >
                        <!-- <input type="hidden" name="_method" value="PATCH" > -->

                        <div class="form-group mb-3">
                            <label for="name">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="title" value="<?= $job['title'] ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label>Category</label>
                            <select class="form-control select2" name="category_id">
                                <?php foreach($categories as $category) : ?>
                                    <?php if($selected_category) : ?>
                                        <option value="<?= $selected_category['id'] ?>"><?= $selected_category['name'] ?></option>
                                    <?php endif; ?>

                                    <option
                                        value="<?php echo $category['id'] ?>"
                                    >
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Company</label>
                            <select class="form-control select2" name="company_id">
                                <?php if($selected_company) : ?>
                                    <option value="<?= $selected_company['id'] ?>"><?= $selected_company['name'] ?></option>
                                <?php endif; ?>

                                <?php foreach($companies as $company) : ?>
                                    <option value="<?php echo $company['id'] ?>"><?php echo $company['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="requirement">Requirements</label>
                            <textarea class="form-control summernote" name="requirement" rows="5"><?= $job['requirement'] ?></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control summernote" name="description" rows="5"><?= $job['description'] ?></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="salary_range">Salary Range</label>
                            <input type="text" name="salary_range" id="salary_range" class="form-control" value="<?= $job['salary_range'] ?>">
                        </div>

                        <div>
                            <img src="<?php echo '/' . $job['logo'] ?>" alt="<?= $job['title'] ?>">
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
