# Physiotherapy Management System

This project is a web-based admin dashboard for managing various aspects of a physiotherapy clinic. Built with Laravel, the dashboard allows admin users to manage orders, products, offers, doctors, trainers, users, appointments, and connection messages. The dashboard provides a user-friendly interface for admins to efficiently handle clinic operations.

### Features
* Admin Authentication: Secure login and logout functionality for admin users.
* Dashboard: Overview of the clinic's operations with quick access to different management sections.
* Orders Management: View and manage orders placed by users.
* Products Management: Add, edit, and delete products available in the clinic.
* Offers Management: Manage special offers and discounts provided by the clinic.
* Doctors Management: Add, edit, and manage information related to the clinic's doctors.
* Trainers Management: Add, edit, and manage information related to the clinic's trainers.
* Users Management: Manage user accounts, including viewing and editing user information.
* Appointments Management: View and manage appointments scheduled by users.
* Connection Messages: Manage messages sent through the clinic's contact forms.


### Technologies Used
* Laravel: A PHP framework used for building the web application.
* Blade: Laravel's templating engine for creating views.
* AdminLTE: A popular admin dashboard template for the UI.
* MySQL: Database used for storing application data.


### Installation
* Prerequisites
* PHP 10 or higher
* Composer
* MySQL

### Steps
1. Clone the repository:
   git clone https://github.com/AHMED-SAYED-MANSOUR/EhgzEstshara
   
2. cd physiotherapy

3. Install dependencies:
   * composer install
   * npm install
   * npm run dev

4. Configure the environment variables:
   * cp .env.example .env
   * php artisan key:generate
Update the .env file with your database credentials and other necessary configurations.

5. Run the migrations:
   * php artisan migrate

6. Seed the database:
   * php artisan db:seed

7. Serve the application:
   * php artisan serve

### The application will be accessible at http://127.0.0.1:8000.


# Usage

## Admin Login
* Navigate to http://127.0.0.1:8000/admin/login.
* Enter the admin credentials to log in.

## Admin Dashboard
* After logging in, you'll be redirected to the admin dashboard at http://127.0.0.1:8000/admin/dashboard.
* Use the sidebar to navigate through different management sections such as orders, products, offers, doctors, trainers, users, appointments, and connection messages.

## Directory Structure
* app/Http/Controllers/admin/AdminController.php: Contains the controller methods for handling admin login, logout, and dashboard views.
* routes/admin.php: Defines the web routes for the application, including admin routes.
* resources/views/admin/: Contains the Blade templates for the admin dashboard and other views.
* public/back: Contains assets for the AdminLTE template.

## Contributing
* Fork the repository.
* Create a new branch (git checkout -b feature-branch).
* Commit your changes (git commit -am 'Add new feature').
* Push to the branch (git push origin feature-branch).
* Create a new Pull Request.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

## Contact
For any questions or support, please open an issue in the GitHub repository or contact the project maintainer at hadyasaker8@gmail.com.

