<?php
// Започваме сесията, за да съхраняваме курсовете в нея
session_start();

// Инициализиране на масиви за валидни данни и грешки
$valid = array();
$errors = array();

// Проверка дали сесията за курсове е вече създадена
if (!isset($_SESSION['courses'])) {
    $_SESSION['courses'] = array();  // Инициализираме празен масив за курсовете
}

// Проверка дали е подадена POST заявка (формата е изпратена)
if ($_POST) {
    // Получаване на стойността на полето 'title' от POST заявката
    $title = trim($_POST['title']);

    // Валидация на полето
    if (!$title) {
        $errors['title'] = 'Името е задължително поле.';
    } elseif (strlen($title) > 150) {
        $errors['title'] = 'Името има максимална дължина от 150 символа.';
    } else {
        $valid['title'] = $title;

        // Добавяме валидния курс в масива със съхранените курсове в сесията
        $_SESSION['courses'][] = $title;
    }
}

?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title>Добавяне на курс</title>
</head>
<body>

<!-- Форма за добавяне на нов курс -->
<h1>Добавяне на нов курс</h1>
<form method="post" action="">
    <label for="course-title">Име на курса:</label><br>
    <input id="course-title" name="title" value="<?= isset($valid['title']) ? htmlspecialchars($valid['title']) : '' ?>"><br>
    <?php if (isset($errors['title'])): ?>
        <p style="color: red;"><?= $errors['title'] ?></p>
    <?php endif; ?>
    <button type="submit">Запази</button>
</form>

<!-- Списък с вече добавените курсове -->
<h2>Запазени курсове</h2>
<ul>
    <?php if (!empty($_SESSION['courses'])): ?>
        <?php foreach ($_SESSION['courses'] as $course): ?>
            <li><?= htmlspecialchars($course) ?></li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Няма добавени курсове.</p>
    <?php endif; ?>
</ul>

</body>
</html>
