<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($title) ?></title>

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

        nav h2 {
            font-size: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 950px;
            margin: 50px auto;
            padding: 20px;
        }

        .hero {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        .label {
            color: #2563eb;
            font-weight: bold;
            margin-bottom: 8px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 30px;
        }

        .information {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .info-box {
            background: #f8fafc;
            padding: 18px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
        }

        .info-box small {
            display: block;
            color: #64748b;
            margin-bottom: 5px;
        }

        .buttons {
            margin-top: 30px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .primary {
            background: #2563eb;
            color: white;
        }

        .secondary {
            background: #e2e8f0;
            color: #172554;
        }

        .message {
            padding: 15px;
            margin-bottom: 20px;
            background: #e0f2fe;
            border-left: 4px solid #0284c7;
            border-radius: 6px;
        }

        .status {
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            background: #f1f5f9;
        }

        footer {
            text-align: center;
            color: #64748b;
            padding: 25px;
        }

        @media(max-width: 700px) {
            .information {
                grid-template-columns: 1fr;
            }

            nav {
                flex-direction: column;
                gap: 12px;
            }

            h1 {
                font-size: 28px;
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

    <?php if (!empty($message)): ?>
        <div class="message">
            <?= htmlspecialchars($message) ?>
        </div>
    <?php endif; ?>

    <div class="hero">

        <p class="label">WEB SYSTEMS AND TECHNOLOGIES</p>

        <h1>Student Information</h1>

        <p class="subtitle">
            Laboratory Exercise No. 3 — LavaLust MVC Application
        </p>

        <div class="information">

            <div class="info-box">
                <small>Student ID</small>
                <strong><?= htmlspecialchars($student_id) ?></strong>
            </div>

            <div class="info-box">
                <small>Student Name</small>
                <strong><?= htmlspecialchars($name) ?></strong>
            </div>

            <div class="info-box">
                <small>Course</small>
                <strong><?= htmlspecialchars($course) ?></strong>
            </div>

            <div class="info-box">
                <small>Year Level</small>
                <strong><?= htmlspecialchars($year) ?></strong>
            </div>

            <div class="info-box">
                <small>Section</small>
                <strong><?= htmlspecialchars($section) ?></strong>
            </div>

            <div class="info-box">
                <small>Email</small>
                <strong><?= htmlspecialchars($email) ?></strong>
            </div>

        </div>

        <div class="status">
            Profile Status:
            <strong>
                <?= $access_granted
                    ? 'Access Enabled'
                    : 'Protected by StudentMiddleware' ?>
            </strong>
        </div>

        <div class="buttons">

            <?php if (!$access_granted): ?>

                <a class="button primary"
                   href="<?= site_url('student/access'); ?>">
                    Enable Profile Access
                </a>

            <?php else: ?>

                <a class="button primary"
                   href="<?= site_url('student/profile'); ?>">
                    View Student Profile
                </a>

                <a class="button secondary"
                   href="<?= site_url('student/lock'); ?>">
                    Lock Profile
                </a>

            <?php endif; ?>

        </div>

    </div>

</div>

<footer>
    LavaLust Student Information Application
</footer>

</body>
</html>