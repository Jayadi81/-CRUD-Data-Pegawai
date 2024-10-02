<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('https://img.freepik.com/premium-vector/modern-dark-blue-abstract-background-paper-shine-layer-element-vector-presentation-design-suit-business-corporate-institution-party-festive-seminar-talks_249611-2889.jpg');
        height: 300px;
        "></div>
        <!-- Background image -->
        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-2 text-uppercase">Login Akun Pegawai</h2>
                        <form action="prosess_login.php" method="POST">
                            <!-- Email input -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <!-- Password input -->
                            <div class="mb-3">
                                <label for="pasword" class="form-label">Password</label>
                                <input type="pasword" name="pasword" id="pasword" class="form-control" required><br>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <div>
                          <p class="mb-0">Belum punya Akun ? <a href="registerasi.php"
                          class="text-white-50 fw-bold"><a href='registerasi.php'>Registerasi</a></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>

</html>

