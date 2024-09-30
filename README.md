# Laravel Employer-Employee Management System

## About The Project

This project is an Employer-Employee Management System built with Laravel. It provides a robust platform for managing employers and their associated employees, featuring user authentication, CRUD operations, and image upload functionality.

### Key Features

-   User Authentication (Register, Login, Logout)
-   Employer Management
    -   List all employers
    -   Add new employers
-   Employee Management
    -   List employees for each employer
    -   Add multiple employees to an employer
    -   Upload employee images
-   jQuery and AJAX form submissions
-   Email validation for uniqueness

## Built With

-   [Laravel](https://laravel.com) - The web framework used
-   [MySQL](https://www.mysql.com/) - Database
-   [jQuery](https://jquery.com/) - JavaScript library for DOM manipulation and AJAX
-   [Tailwind CSS](https://tailwindcss.com/) - For styling

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

-   PHP >= 8.1
-   Composer
-   Node.js and npm
-   MySQL

### Installation

1. Clone the repository
   sh
   git clone https://github.com/your_username/your_project.git

2. Install Composer dependencies
   sh
   composer install

3. Install NPM packages
   sh
   npm install

4. Create a copy of your .env file
   sh
   cp .env.example .env

5. Generate an app encryption key
   sh
   php artisan key:generate

6. Create an empty database for the application
7. In the .env file, add database information to allow Laravel to connect to the database
8. Migrate the database
   sh
   php artisan migrate

9. Compile assets
   sh
   npm run dev

10. Start the local development server
    ```
    sh
    php artisan serve

You can now access the server at http://localhost:8000

## Usage

After installation, you can:

1. Register a new user account
2. Log in with your credentials
3. Add new employers
4. Add employees to employers
5. View lists of employers and their employees

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Your Name - [your-email@example.com](mailto:your-email@example.com)

Project Link: [https://github.com/your_username/your_project](https://github.com/your_username/your_project)

## Acknowledgements

-   [Laravel Documentation](https://laravel.com/docs)
-   [jQuery Documentation](https://api.jquery.com/)
-   [Tailwind CSS Documentation](https://tailwindcss.com/docs)
