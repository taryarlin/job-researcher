<?php require base_path('views/admin_panel/layouts/header.view.php') ?>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-body">

                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <h5>Create Job</h5>

                        <a href="/jobs" class="btn btn-primary">Back</a>
                    </div>

                    <hr/>

                    <form action="/jobs/create" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="name">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="title">
                        </div>

                        <div class="form-group mb-3">
                            <label>Category</label>
                            <select class="form-control select2" name="category_id">
                                <?php foreach($categories as $category) : ?>
                                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Company</label>
                            <select class="form-control select2" name="company_id">
                                <?php foreach($companies as $company) : ?>
                                    <option value="<?php echo $company['id'] ?>"><?php echo $company['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="requirement">Requirements</label>
                            <textarea class="form-control summernote" name="requirement" rows="5"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control summernote" name="description" rows="5"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="salary_range">Salary Range</label>
                            <input type="text" name="salary_range" id="salary_range" class="form-control">
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
