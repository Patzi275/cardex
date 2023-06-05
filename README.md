# Cardex - Car Rental Platform

Cardex is a comprehensive car rental platform designed to simplify the process of renting cars. This repository contains the code for the website and administration panel built using Laravel and Bootstrap respectively.

## Features

### User-Facing Website

- User registration and authentication.
- Browse and search available cars.
- Filter cars by location, date, and other specifications.
- Make online reservations and manage bookings.
- View rental history and invoices.

### Administration Panel

- Secure login for administrators.
- Manage car listings, including creation, editing, and deletion.
- Track and manage car availability and reservations.

## Getting Started

To set up and run Cardex on your local machine, follow these steps:

1. Clone this repository to your local machine.
2. Configure your development environment (e.g., PHP, MySQL).
3. Create a new MySQL database for Cardex.
4. Copy the `.env.example` file and rename it to `.env`. Update the necessary configuration variables, including the database credentials.
5. Install the project dependencies by running `composer install`.
6. Generate an application key by running `php artisan key:generate`.
7. Run the database migrations using `php artisan migrate`.
9. Start the development server using `php artisan serve`.
10. Access the Cardex website and administration panel by visiting `http://localhost:8000` and `http://localhost:8000/admin` respectively.

## Contributing

Contributions to Cardex are welcome! If you have suggestions for new features, improvements, or bug fixes, please open a pull request. Ensure that your code adheres to the project's coding standards and follows good software development practices.

## License

Cardex is released under the [MIT License](LICENSE). You are free to use, modify, and distribute this project for personal or commercial purposes.

## Acknowledgments

We would like to extend our gratitude to the Laravel and Bootstrap communities for their fantastic frameworks that made developing Cardex a delightful experience.

