# ZimParks1 - Library Management System

[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-3.3.7-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![jQuery](https://img.shields.io/badge/jQuery-1.10.1-0769AD?style=for-the-badge&logo=jquery&logoColor=white)](https://jquery.com/)
[![DataTables](https://img.shields.io/badge/DataTables-1.10.0-FF6B6B?style=for-the-badge&logo=datatables&logoColor=white)](https://datatables.net/)
[![CKEditor](https://img.shields.io/badge/CKEditor-4.x-0287D0?style=for-the-badge&logo=ckeditor&logoColor=white)](https://ckeditor.com/)
[![Font Awesome](https://img.shields.io/badge/Font_Awesome-4.7.0-339AF0?style=for-the-badge&logo=fontawesome&logoColor=white)](https://fontawesome.com/)

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [User Roles](#user-roles)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)

## 🎯 Overview

ZimParks1 is a comprehensive Library Management System designed to streamline the borrowing and management of library resources. The system provides different interfaces for various user roles including administrators, supervisors, and regular users, each with specific permissions and capabilities.

## ✨ Features

### 🔐 Multi-Role Authentication System
- **Admin Panel**: Full system administration and user management
- **Supervisor Panel**: Oversight and approval workflows
- **User Panel**: Basic borrowing and request functionality

### 📚 Library Management
- Book and resource cataloging
- Borrowing and return tracking
- Request management system
- Due date monitoring
- Fine calculation

### 📊 Advanced Features
- Real-time activity logging
- DataTables for enhanced data presentation
- Rich text editing with CKEditor
- Responsive Bootstrap interface
- Search and filter capabilities
- Assessment and evaluation tools

## 👥 User Roles

### 🔧 Administrator
- Full system access and configuration
- User account management
- System monitoring and logs
- Database administration

### 👨‍💼 Supervisor
- Request approval workflows
- Assessment and evaluation tools
- Oversight of borrowing activities
- Report generation

### 👤 Regular User
- Browse available resources
- Submit borrowing requests
- Track personal borrowing history
- Manage account information

## 🚀 Installation

### Prerequisites
- PHP 8.0 or higher
- MySQL 8.0 or higher
- Web server (Apache/Nginx)
- Modern web browser

### Step-by-Step Setup

1. **Clone the Repository**
   ```bash
   git clone [repository-url]
   cd zimparks1
   ```

2. **Database Setup**
   ```bash
   # Import the database schema
   mysql -u your_username -p your_database < database/tra.sql
   ```

3. **Configuration**
   - Navigate to `connection/dbcon.php`
   - Update database credentials:
   ```php
   $host = "localhost";
   $username = "your_username";
   $password = "your_password";
   $database = "your_database";
   ```

4. **Web Server Configuration**
   - Point your web server to the project root directory
   - Ensure PHP has write permissions for log files

## ⚙️ Configuration

### Database Connection
Edit `connection/dbcon.php` with your database credentials:

```php
<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

### File Permissions
Ensure proper permissions for:
- Log files: `admin/activity_log.php`
- Upload directories (if applicable)
- Configuration files

## 📖 Usage

### Accessing the System

1. **Admin Access**: Navigate to `/admin/` directory
2. **Supervisor Access**: Navigate to `/supervisor/` directory
3. **User Access**: Navigate to `/normal/` or `/register/` directories

### Key Functionalities

- **Resource Management**: Add, edit, and manage library resources
- **Borrowing System**: Process borrowing requests and returns
- **User Management**: Create and manage user accounts
- **Reporting**: Generate reports and analytics
- **Activity Tracking**: Monitor system activities and user actions

## 📁 Project Structure

```
zimparks1/
├── admin/                 # Administrator panel
│   ├── activity_log.php   # System activity logging
│   ├── add_user.php      # User management
│   └── assets/           # Admin-specific assets
├── normal/               # Regular user interface
│   ├── add_borrow.php    # Borrowing functionality
│   └── assets/           # User-specific assets
├── supervisor/           # Supervisor panel
│   ├── assesment.php     # Assessment tools
│   └── assets/           # Supervisor-specific assets
├── register/             # Registration and user management
├── connection/           # Database connection
│   └── dbcon.php        # Database configuration
├── database/            # Database files
│   └── tra.sql          # Database schema
├── assets/              # Shared assets
├── bootstrap/           # Bootstrap framework
├── vendors/             # Third-party libraries
└── README.md           # This file
```

## 🛠️ Technologies Used

### Backend
- **PHP**: Server-side scripting and application logic
- **MySQL**: Database management and data storage

### Frontend
- **Bootstrap 3.3.7**: Responsive UI framework
- **jQuery 1.10.1**: JavaScript library for DOM manipulation
- **DataTables**: Enhanced table functionality
- **Font Awesome**: Icon library

### Rich Text & Editing
- **CKEditor**: Rich text editor for content management
- **TinyMCE**: Alternative rich text editor
- **Bootstrap WYSIWYG**: What-you-see-is-what-you-get editor

### Additional Libraries
- **FullCalendar**: Calendar functionality
- **Morris.js**: Chart and graph library
- **Flot**: Plotting library for charts
- **EasyPieChart**: Circular progress indicators
- **jGrowl**: Notification system

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Development Guidelines
- Follow PHP PSR-4 coding standards
- Ensure proper error handling
- Add comments for complex logic
- Test thoroughly before submitting

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

For support and questions:
- Create an issue in the repository
- Contact the development team
- Check the documentation in each module

---

**Note**: This is a legacy system using older versions of Bootstrap and jQuery. Consider upgrading to newer versions for production use.
