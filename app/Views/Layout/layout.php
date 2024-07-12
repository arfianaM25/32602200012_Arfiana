<!DOCTYPE html>
<html>
<head>
    <title>Website Pribadi Arfiana Maulidiyah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header, nav, main, footer {
            padding: 20px;
            margin: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        table.profile-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table.profile-table, th, td {
            border: 1px solid #ddd;
        }
        table.profile-table th, table.profile-table td {
            padding: 12px;
            text-align: left;
        }
        table.profile-table th {
            background-color: #4CAF50;
            color: white;
        }
        ul.skills-list {
            list-style-type: disc;
            padding-left: 20px;
        }
        footer {
            text-align: center;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Website Pribadi Arfiana Maulidiyah</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/skills">Skills</a></li>
        </ul>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>Arfiana Maulidiyah © 2024</p>
    </footer>
</body>
</html>