<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тапсырмалар тақтасы - To-Do</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Меню бар (Header) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="dashboard.html">To-Do Manager</a>
            <div class="d-flex">
                <a href="profile.html" class="btn btn-outline-light me-2">Профиль</a>
                <a href="login.html" class="btn btn-light text-primary">Шығу</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <!-- Сол жақ: Сүзгі мен Жаңа тапсырма қосу -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-3 mb-3">
                    <h5>Жаңа тапсырма қосу</h5>
                    <form>
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Тапсырма атауы..." required>
                        </div>
                        <div class="mb-2">
                            <textarea class="form-control" rows="2" placeholder="Сипаттамасы..."></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label small text-muted">Санаты</label>
                            <select class="form-select">
                                <option>Жұмыс</option>
                                <option>Оқу</option>
                                <option>Жеке</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Дедлайн</label>
                            <input type="date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Қосу</button>
                    </form>
                </div>

                <!-- Сүзгі (Filter) -->
                <div class="card shadow-sm p-3">
                    <h5>Сүзгі мен Іздеу</h5>
                    <input type="text" class="form-control mb-2" placeholder="Тапсырманы іздеу...">
                    <select class="form-select mb-2">
                        <option>Барлық статустар</option>
                        <option>Орындалуда</option>
                        <option>Орындалды</option>
                    </select>
                </div>
            </div>

            <!-- Оң жақ: Тапсырмалар тізімі -->
            <div class="col-md-8">
                <div class="card shadow-sm p-3">
                    <h5 class="mb-3">Тапсырмалар тізімі</h5>
                    <div class="list-group">
                        
                        <!-- 1-тапсырма -->
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">PHP жобасының 9-аптасын аяқтау</h6>
                                <p class="mb-1 text-muted small">Frontend беттерін жасап, GitHub-қа жүктеу.</p>
                                <span class="badge bg-warning text-dark">Орындалуда</span>
                                <span class="badge bg-secondary">Оқу</span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-success me-1">✓</button>
                                <button class="btn btn-sm btn-outline-secondary me-1">✎</button>
                                <button class="btn btn-sm btn-danger">✗</button>
                            </div>
                        </div>

                        <!-- 2-тапсырма -->
                        <div class="list-group-item d-flex justify-content-between align-items-center mt-2">
                            <div>
                                <h6 class="mb-1 task-done">ER-диаграмманы дайындау</h6>
                                <p class="mb-1 text-muted small">Mermaid арқылы 3 кестені құрастыру.</p>
                                <span class="badge bg-success">Орындалды</span>
                                <span class="badge bg-secondary">Оқу</span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary me-1">✎</button>
                                <button class="btn btn-sm btn-danger">✗</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>