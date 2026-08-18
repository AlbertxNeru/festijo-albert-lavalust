<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile | <?= htmlspecialchars($name) ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
            min-height: 100vh;
        }

        nav {
            background: #172554;
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
        }

        .profile {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        .badge {
            display: inline-block;
            background: #dcfce7;
            color: #166534;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        h1 {
            color: #172554;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 30px;
        }

        .row {
            padding: 16px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .row small {
            display: block;
            color: #64748b;
            margin-bottom: 5px;
        }

        .button {
            margin-top: 30px;
            display: inline-block;
            padding: 12px 20px;
            background: #172554;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }

        @media(max-width: 700px) {
            nav {
                flex-direction: column;
                gap: 12px;
            }
        }
    </style>
</head>

<body>

<nav>
    <h2>Student Portal</h2>

    <div>
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </div>
</nav>

<div class="container">

    <div class="profile">

        <div class="badge">
            ✓ StudentMiddleware Access Verified
        </div>

        <h1><?= htmlspecialchars($name) ?></h1>

        <p class="subtitle">
            Student Profile Information
        </p>

        <div class="row">
            <small>Student ID</small>
            <strong><?= htmlspecialchars($student_id) ?></strong>
        </div>

        <div class="row">
            <small>Course</small>
            <strong><?= htmlspecialchars($course) ?></strong>
        </div>

        <div class="row">
            <small>Year Level</small>
            <strong><?= htmlspecialchars($year) ?></strong>
        </div>

        <div class="row">
            <small>Section</small>
            <strong><?= htmlspecialchars($section) ?></strong>
        </div>

        <div class="row">
            <small>Email</small>
            <strong><?= htmlspecialchars($email) ?></strong>
        </div>


        <div class="row">
            <small>Skills</small>
            <strong><?= htmlspecialchars($skills) ?></strong>
        </div>

        <div class="row">
            <small>Hobbies</small>
            <strong><?= htmlspecialchars($hobbies) ?></strong>
        </div>

        <a class="button"
           href="<?= site_url('student/lock'); ?>">
            Lock Profile & Return Home
        </a>

    </div>

</div>

</body>
</html>