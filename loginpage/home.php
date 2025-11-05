<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>

<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="style.css">
<style>
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #74ebd5, #ACB6E5);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.home-container {
    max-width: 500px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    padding: 40px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.logout-btn {
    display: inline-block;
    margin-top: 25px;
    padding: 10px 25px;
    background: linear-gradient(90deg, #00b09b, #96c93d);
    color: white;
    text-decoration: none;
    border-radius: 10px;
    font-weight: 600;
    transition: transform 0.2s;
}
.logout-btn:hover {
    transform: scale(1.05);
}

footer {
    margin-top: 30px;
    color: #666;
    font-size: 14px;
}
</style>
</head>

<body>

<div class="home-container">
    <h1 class="fw-bold">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p class="mt-2">You have successfully logged in.</p>

    <div id="dynamicMessage" class="mt-3 text-secondary"></div>

    <a href="logout.php" class="logout-btn mt-4">Logout</a>

    <footer>
        <p>© <?php echo date("Y"); ?> My Website | Built by Stefano</p>
    </footer>
</div>

<!-- Bootstrap + JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Simple JavaScript Greeting -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const msg = document.getElementById("dynamicMessage");
    const hours = new Date().getHours();
    let greeting;

    if (hours < 12) greeting = "☀️ Good morning!";
    else if (hours < 18) greeting = "🌤️ Good afternoon!";
    else greeting = "🌙 Good evening!";

    msg.textContent = greeting + " Hope you're having a great day!";
});
</script>

</body>
</html>