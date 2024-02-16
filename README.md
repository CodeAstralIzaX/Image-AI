# Image-AI Laravel 10 Application

Welcome to the Image-AI Laravel 10 application repository! This application is built using Laravel 10 and includes CRUD functionality with image handling, authentication, and image-to-image generation using OpenAI's API.

## Repository Link
[Image-AI GitHub Repository](https://github.com/CodeAstralIzaX/Image-AI)

## Table of Contents
1. [Introduction](#introduction)
2. [Features](#features)
3. [Installation](#installation)
4. [Usage](#usage)
5. [Contributing](#contributing)
6. [License](#license)

## Introduction
This Laravel 10 application is designed to provide a comprehensive solution for image management and generation. It incorporates CRUD operations with image handling, user authentication, and leverages OpenAI's API for image-to-image generation.

## Features
- **CRUD Operations:** Perform Create, Read, Update, and Delete operations on images within the application.
- **Authentication:** Secure user authentication ensures that only authorized users can access and manage images.
- **Image-to-Image Generation:** Utilize OpenAI's API for image-to-image generation, providing an innovative and creative aspect to the application.

## Installation
Follow these steps to set up and run the Image-AI Laravel 10 application:

1. Clone the repository:
   ```bash
   git clone https://github.com/CodeAstralIzaX/Image-AI.git
   ```

2. Navigate to the project directory:
   ```bash
   cd Image-AI
   ```

3. Install dependencies using Composer:
   ```bash
   composer install
   ```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the database and OpenAI API credentials.

5. Generate an application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

8. Access the application in your browser at `http://localhost:8000`.

## Usage
1. Register or log in to access the application.
2. Explore the CRUD functionality for managing images.
3. Experience the image-to-image generation feature powered by OpenAI's API.

## Contributing
Contributions are welcome! If you find any issues or have enhancements to propose, please open an issue or submit a pull request. Follow the [Contribution Guidelines](CONTRIBUTING.md) for more details.

## License
This project is licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute as per the terms of the license.
