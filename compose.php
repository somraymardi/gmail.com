<!DOCTYPE html>
<html>
<head>
    <title>Gmail Clone - Compose</title>
</head>
<body>
    <h2>Send Email</h2>
    <form action="send_mail.php" method="post">
        From: <input type="email" name="from_email" required><br><br>
        To: <input type="email" name="to_email" required><br><br>
        Subject: <input type="text" name="subject" required><br><br>
        Message:<br>
        <textarea name="message" rows="10" cols="50" required></textarea><br><br>
        <button type="submit">Send Email</button>
    </form>
</body>
</html>
