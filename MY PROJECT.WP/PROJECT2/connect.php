<?php
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstName = trim($_POST['firstName'] ?? '');
$lastName = trim($_POST['lastName'] ?? '');
$day = trim($_POST['dayOfBirth'] ?? '');
$month = trim($_POST['monthOfBirth'] ?? '');
$year = trim($_POST['yearOfBirth'] ?? '');
$email = trim($_POST['emailID'] ?? '');
$mobile = trim($_POST['mobileNumber'] ?? '');
$gender = trim($_POST['gender'] ?? '');
$address = trim($_POST['address'] ?? '');
$city = trim($_POST['city'] ?? '');
$pin = trim($_POST['pinCode'] ?? '');
$state = trim($_POST['state'] ?? '');
$country = trim($_POST['country'] ?? '');
$otherHobby = trim($_POST['otherHobby'] ?? '');

$hobbies = [];
if (!empty($_POST['hobbies']) && is_array($_POST['hobbies'])) {
    foreach ($_POST['hobbies'] as $hobby) {
        $hobby = trim($hobby);
        if ($hobby === 'others') {
            continue;
        }
        if ($hobby !== '') {
            $hobbies[] = $hobby;
        }
    }
}
if ($otherHobby !== '') {
    $hobbies[] = $otherHobby;
}
$hobbiesString = implode(',', $hobbies);

$courses = [];
if (!empty($_POST['courses']) && is_array($_POST['courses'])) {
    foreach ($_POST['courses'] as $course) {
        $course = trim($course);
        if ($course !== '') {
            $courses[] = $course;
        }
    }
}
$coursesApplied = implode(',', $courses);

$dateOfBirth = sprintf('%s-%s-%s', $year, $month, $day);

$studentStmt = $conn->prepare(
    "INSERT INTO students (
        first_name,
        last_name,
        date_of_birth,
        email,
        mobile_number,
        gender,
        address,
        city,
        pin_code,
        state,
        country,
        hobbies,
        other_hobby,
        courses_applied
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
);

if (!$studentStmt) {
    die("Prepare failed: " . $conn->error);
}

$studentStmt->bind_param(
    'ssssssssssssss',
    $firstName,
    $lastName,
    $dateOfBirth,
    $email,
    $mobile,
    $gender,
    $address,
    $city,
    $pin,
    $state,
    $country,
    $hobbiesString,
    $otherHobby,
    $coursesApplied
);

if (!$studentStmt->execute()) {
    die("Insert student failed: " . $studentStmt->error);
}

$studentId = $conn->insert_id;
$studentStmt->close();

$exams = [
    1 => 'Class X',
    2 => 'Class XII',
    3 => 'Graduation',
    4 => 'Masters'
];

$qualificationStmt = $conn->prepare(
    "INSERT INTO student_qualifications (
        student_id,
        si_no,
        examination,
        board,
        percentage,
        year_of_passing
    ) VALUES (?, ?, ?, ?, ?, ?)"
);

if (!$qualificationStmt) {
    die("Prepare failed: " . $conn->error);
}

for ($i = 1; $i <= 4; $i++) {
    $board = trim($_POST["board$i"] ?? '');
    $percentage = trim($_POST["percentage$i"] ?? '');
    $yearOfPassing = trim($_POST["yearOfPassing$i"] ?? '');

    if ($board === '' && $percentage === '' && $yearOfPassing === '') {
        continue;
    }

    $examName = $exams[$i] ?? '';
    $qualificationStmt->bind_param(
        'iissss',
        $studentId,
        $i,
        $examName,
        $board,
        $percentage,
        $yearOfPassing
    );

    if (!$qualificationStmt->execute()) {
        die("Insert qualification failed: " . $qualificationStmt->error);
    }
}

$qualificationStmt->close();
$conn->close();

echo "Student registered successfully with ID: " . $studentId;
