# 📧 Gmail SMTP Email Sender (PHP)

This is a simple web-based email sender application built using **PHP** and **PHPMailer**, which allows sending real emails using **Gmail SMTP**.

---

## 🚀 Features

- Send emails using Gmail SMTP
- Use custom "From", "To", subject, and message
- Built with plain PHP and HTML
- PHPMailer integrated
- Easy to host on XAMPP / cPanel
- Beginner-friendly code structure

---

## 🧱 Technologies Used

- PHP (Core)
- PHPMailer (for SMTP email)
- HTML/CSS (Simple frontend)
- Gmail SMTP server

---

## 📂 Folder Structure

```
gmail_smtp_clone/
├── compose.php          # Email form
├── send_mail.php        # Mail sending backend
├── config.php           # Gmail credentials (add yourself)
├── phpmailer/           # PHPMailer library
│   ├── PHPMailer.php
│   ├── SMTP.php
│   └── Exception.php
├── README.md            # This file
└── .gitignore           # Git ignore settings
```

---

## ⚙️ Setup Instructions

### ✅ 1. Enable Gmail App Password
- Go to: [Google Account > Security](https://myaccount.google.com/security)
- Turn on **2-Step Verification**
- Generate **App Password**
- Copy and save the 16-character password

### ✅ 2. Edit `config.php`
```php
<?php
define("GMAIL_USER", "yourgmail@gmail.com");       // Your Gmail ID
define("GMAIL_PASS", "your-app-password");         // Gmail App Password
```

### ✅ 3. Run Project
- Place the folder in your XAMPP `htdocs` directory
- Open browser: `http://localhost/gmail_smtp_clone/compose.php`
- Fill the form and send email ✅

---

## 🛑 Security Notes

- Never upload your actual password or `config.php` file to GitHub.
- Use `.gitignore` to exclude sensitive files.

---

## 📜 License

This project is open-source and free to use for learning and development.
