<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #ededed;">

    <div class="container">
        <div class="row" style="height: 100vh;">
            <div class="col-md-4 offset-md-4" style="display: grid; align-content: center;">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Login To Admin</h5>

                        <hr/>

                        <form action="/admin/login" method="POST">
                            <div class="from-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <div class="from-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <button class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
