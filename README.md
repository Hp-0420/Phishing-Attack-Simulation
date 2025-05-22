## ✅ Project: Phishing Attack Simulation

### 📁 Folder Structure

```
phishing-simulation/
├── fake_login/
│   ├── index.html          # Fake login page
│   ├── login.php           # Credentials catcher (saves input)
│   └── credentials.txt     # Captured credentials
├── README.md
```

## 🛑 Legal Warning

> ⚠️ **This project is for educational purposes only.**
> Never deploy or use phishing tools against any user, system, or service without **explicit consent**.
> Misuse can result in legal consequences.

---


## 📄 `README.md`

# 🎣 Phishing Attack Simulation (Ethical Use Only)

This project simulates a phishing attack by creating a fake login page (e.g., Facebook clone). When a user inputs credentials, they are captured and saved for analysis in a local file.

---

## ⚙️ Requirements

- Local web server (XAMPP, WAMP, MAMP)
- PHP support
- HTML/CSS (optional for styling)

---

## 🚀 How to Run

1. Copy the `fake_login/` folder into your web server's root directory:
   - XAMPP: `htdocs/`
   - WAMP: `www/`

2. Start Apache server.

3. Visit:  
   `http://localhost/fake_login/`

---

## 🧪 How It Works

- The `index.html` file mimics a login page.
- When the form is submitted, data is POSTed to `login.php`.
- The `login.php` script saves the credentials in `credentials.txt`.

---

## 🕵️ Simulation Use Cases

- Demonstrate how easy phishing can be.
- Train users on phishing awareness.
- Conduct security awareness sessions.

---

## 🔐 Prevention Tips

- Always verify URLs before logging in.
- Use browser-based password managers.
- Enable 2FA on all accounts.
- Educate users regularly.

---

## ⚠️ Ethical Reminder

> This is a controlled simulation for educational use only. Never conduct phishing without written permission.

---
## 🔐 Next Steps (Advanced)

* Host on LAN or internal virtual machine for simulation.
* Customize for other sites (Gmail, Instagram, etc.).
* Add logging for IP and timestamp.
* Use **ngrok** to tunnel for mobile/lab access (ethical use only).
