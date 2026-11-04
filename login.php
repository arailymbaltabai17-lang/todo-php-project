<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Жүйеге кіру - Тапсырмалар менеджері</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">

    <div class="container" style="max-width: 450px;">
        <div class="card shadow-sm p-4">
            <h3 class="text-center mb-4 text-primary">Тапсырмалар менеджері</h3>
            
            <!-- Навигация (Кіру / Тіркелу) -->
            <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button">Кіру</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill" data-bs-target="#pills-register" type="button">Тіркелу</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <!-- Кіру формасы -->
                <div class="tab-pane fade show active" id="pills-login">
                    <form action="dashboard.html" method="GET">
                        <div class="mb-3">
                            <label class="form-label">Email немесе Логин</label>
                            <input type="text" class="form-control" placeholder="Логиніңізді енгізіңіз" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Пароль</label>
                            <input type="password" class="form-control" placeholder="Пароліңізді енгізіңіз" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Жүйеге кіру</button>
                    </form>
                </div>

                <!-- Тіркелу формасы -->
                <div class="tab-pane fade" id="pills-register">
                    <form action="dashboard.html" method="GET">
                        <div class="mb-3">
                            <label class="form-label">Пайдаланушы аты</label>
                            <input type="text" class="form-control" placeholder="Аты-жөніңіз" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Электронды пошта</label>
                            <input type="email" class="form-control" placeholder="example@mail.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Пароль</label>
                            <input type="password" class="form-control" placeholder="Пароль ойлап табыңыз" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Тіркелу</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>