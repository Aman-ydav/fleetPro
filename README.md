# Fleet Management System

> **Note:** This project is a **class assignment** for **INT220** and **INT219** in the **4th semester**. The application is built using **HTML**, **Tailwind CSS**, and **JavaScript** for the frontend, with **PHP** as the backend and **MySQL** as the database.

A comprehensive fleet management solution built with:

- **Frontend**: HTML, Tailwind CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL (phpMyAdmin)  

🔗 **Live Demo**: [Fleet Pro](https://fleet-pro.infinityfreeapp.com/)

---

## 🚀 Features

- User authentication (login/register)
- Vehicle management (CRUD operations)
- Driver management (CRUD operations)
- Dashboard with fleet statistics
- Responsive design for all devices
- Real-time updates
- Secure authentication

---

## ⚙️ Installation

1. Import the database schema from `sql/setup.sql` into your MySQL database.
2. Configure the database connection in `includes/config.php`:
   
   Update these lines to match your local setup:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'your_username');
   define('DB_PASS', 'your_password');
   define('DB_NAME', 'fleet_management');
   ```php
   
## fleet-management/
-├── assets/            # Static assets
-├── includes/          # PHP includes
-│   ├── auth.php       # Authentication functions
-│   ├── config.php     # Database configuration
-│   └── db.php         # Database operations
-├── sql/               # Database schema
-│   └── setup.sql      # Database setup script
-├── about.php          # About page
-├── dashboard.php      # Dashboard
-├── drivers.php        # Driver management
-├── index.php          # Landing page
-├── login.php          # Login page
-├── logout.php         # Logout handler
-├── register.php       # Registration page
-└── vehicles.php       # Vehicle management
