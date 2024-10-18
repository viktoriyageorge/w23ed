<?php
// Започваме сесията
session_start();
 
// Инициализиране на масиви за валидни данни и грешки
$valid = array();
$errors = array();
 
// Проверка дали сесията за курсове е вече създадена
if (!isset($_SESSION['courses1'])) {
    $_SESSION['courses1'] = array();  // Инициализираме празен масив за курсовете
}
 
// Проверка дали е подадена POST заявка (формата е изпратена)
if ($_POST) {
    // Получаване на стойността на полето 'title' от POST заявката
    $title = trim($_POST['title']);
    $teacher = trim($_POST['teacher']);
    $description = trim($_POST['description']);
    $group = trim($_POST['group']);
    $credits = trim($_POST['credits']);
 
    // Валидация на полето за курс
    if (!$title) {
        $errors['title'] = 'Името на курса е задължително поле.';
    } elseif (strlen($title) > 150) {
        $errors['title'] = 'Името на курса има максимална дължина от 150 символа.';
    }
    if (!$teacher) {
        $errors['teacher'] = 'Името на преподавателя е задължително поле.';
    } elseif (strlen($teacher) > 150) {
        $errors['teacher'] = 'Името на курса има максимална дължина от 200 символа.';
    }
    if (!$description) {
        $errors['description'] = 'Описанието е задължително';
    } elseif (strlen($description) < 10) {
        $errors['description'] = 'Описанието трябва да е минимум 10 символа';
    }
    $choices = array("ПМ", "М", "ОКН", "ЯКН");
    if (!$group) {
        $errors['group'] = 'Трябва да бъде избрана група';
    } elseif (!in_array($group, $choices)) {
        $errors['group'] = 'Трябва да бъде една от валидните група';
    }
 
    // Ако няма грешки, добавяме курса в сесията
    if (empty($errors)) {
        $_SESSION['courses1'][] = array(
            'title' => $title,
            'teacher' => $teacher,
            'description' => $description,
            'group' => $group,
            'credits'=> $credits
        );
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
        <input id="course-title" name="title"><br>
        <label for="course-teacher">Преподавател:</label><br>
        <input id="course-teacher" name="teacher"><br>
        <label for="course-description">Описание:</label><br>
        <textarea id="course-description" name="description" rows="3" cols="10"></textarea><br>
        <select name="group">
            <option value="М">М</option>
            <option value="ПМ">ПМ</option>
            <option value="ОКН">ОКН</option>
            <option value="ЯКН">ЯКН</option>
        </select>
        <label for="course-credits">Кредити:</label><br>
        <input id="course-credits" name="credits" type="number"><br>
        <?php if (isset($errors['title'])): ?>
            <p style="color: red;"><?= $errors['title'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['teacher'])): ?>
            <p style="color: red;"><?= $errors['teacher'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['description'])): ?>
            <p style="color: red;"><?= $errors['description'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['group'])): ?>
            <p style="color: red;"><?= $errors['group'] ?></p>
        <?php endif; ?>
        <button type="submit">Запази</button>
    </form>
 
    <!-- Списък с вече добавените курсове -->
    <h2>Запазени курсове</h2>
    <ul>
        <?php if (!empty($_SESSION['courses1'])): ?>
            <?php foreach ($_SESSION['courses1'] as $course): ?>
                <li>
                    Заглавие: <?= $course['title'] ?><br />
                    Преподавател: <?= $course['teacher'] ?><br>
                    Описание: <?= $course['description'] ?><br>
                    Група: <?= $course['group'] ?><br>
                    Кредити: <?= $course['credits'] ?><br>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Няма добавени курсове.</p>
        <?php endif; ?>
    </ul>
 
</body>
 
</html>

