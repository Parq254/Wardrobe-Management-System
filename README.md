# Wardrobe Management System

This is a Wardrobe Management System built using Vue3 for the frontend and Laravel 11 for the backend.

## Features

- User authentication (login/registration)
- Add, edit, and delete clothing items
- Categorize items (e.g., tops, bottoms, shoes)
- Filter and search functionality
- Responsive and friendly UI

## Prerequisites

- Node.js
- Composer
- PHP
- Laravel

## Setup Instructions

### Backend

1. Navigate to the `backend` directory:

   ```sh
   cd backend
   ```

2. Install the dependencies:

   ```sh
   composer install
   ```

3. Copy the environment file and generate the application key:

   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. Set up your database in the `.env` file.

5. Run the database migrations:

   ```sh
   php artisan migrate
   ```

6. Start the Laravel development server:

   ```sh
   php artisan serve
   ```

### Frontend

1. Navigate to the `frontend` directory:

   ```sh
   cd frontend
   ```

2. Install the dependencies:

   ```sh
   npm install
   ```

3. Start the Vue development server:

   ```sh
   npm run serve
   ```

## Usage

1. Open your browser and navigate to `http://localhost:8080` for the frontend.
2. Use `http://localhost:8000` for the backend API.
