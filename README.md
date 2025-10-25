# Activity 9 - Laravel Authentication System

## 📘 Description
This project implements a basic authentication system using Laravel 7.
It includes registration, login, redirection based on authentication state, 
and email notifications for registration and login alerts.

## 🧩 Features
- User registration and login
- Redirects based on authentication
- Dynamic navbar
- Dashboard protected by middleware
- Responsive design with Bootstrap
- Email notifications using Mailtrap

## 🖥️ Views
- **Landingpage:** visible to guests
- **Dashboard:** visible to logged-in users only
- **Emails:** Welcome and Login Alert emails

## 💾 Technologies
- Laravel 7
- PHP 8
- MySQL
- Bootstrap 4
- Font Awesome
- Mailtrap (for testing emails)

## 🚀 Run instructions
1. Clone repository
2. Configure `.env` file with database and Mailtrap credentials
3. Run migrations with `php artisan migrate`
4. Start the server: `php artisan serve`