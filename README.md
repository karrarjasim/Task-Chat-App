# Chat App Readme

## Project Overview

This project is a real-time chat application built using the Laravel framework for the backend, Vue.js for the frontend, and Pusher for real-time communication. Unlike traditional chat applications, this app requires no authentication. Users simply enter their name upon accessing the page and can immediately start sending and receiving messages in real-time.

## Features

- **No authentication required:** Users can join the chat room without the need for registration or login.
- **Name prompt:** A prompt appears upon accessing the page, asking users to enter their name before entering the chat.
- **Real-time messaging:** Instantly send and receive messages in the chat room.
- **Responsive design:** A user-friendly interface that adapts to various screen sizes.
- **Pusher integration:** Utilizes Pusher for real-time updates and notifications.

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- PHP (>= 7.3)
- Composer
- Node.js (>= 10)
- npm
- Laravel CLI
- Pusher account (for API key and secret)

## Installation

Follow these steps to set up and run the Chat App:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/karrarjasim/Task-Chat-App.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd chat-app
    ```

3. **Install backend dependencies:**

    ```bash
    composer install
    ```

4. **Install frontend dependencies and build assets :**

    ```bash
    npm install 
    ```    

5. **Configure environment variables:**

    Copy the `.env.example` file to `.env` and configure the database connection and Pusher credentials.

    ```bash
    cp .env.example .env
    ```

6. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

7. **Run migrations:**

    ```bash
    php artisan migrate
    ```

8. **Compile frontend assets:**

    ```bash
    npm run dev
    ```

9. **Start the development server:**

    ```bash
    php artisan serve
    ```

10. **Open your browser and visit [http://localhost:8000](http://localhost:8000)**

11. **Create a Pusher account:**

    Create an account on [Pusher](https://pusher.com/) and obtain your API key, secret, and app ID. Update the `.env` file with your Pusher credentials.

12. **Update .env :**

    Open `.env` and update the pusher credentials.

    ```PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_HOST=
    PUSHER_PORT=443
    PUSHER_SCHEME=https
    PUSHER_APP_CLUSTER=
    ```

13. **Restart the development server:**

    Stop the development server (if running) and start it again:

    ```bash
    php artisan serve
    ```

Now, users can access the Chat App in their browser, enter their name when prompted, and immediately start chatting in real-time!

## Workflow

1. **Access Page:**
   - Users access the page, and a prompt appears, asking them to enter their name.

2. **Enter Name:**
   - Users enter their name in the prompt to identify themselves.

3. **Real-time Chat:**
   - After entering their name, users can immediately start sending and receiving messages in the chat room.

4. **Responsive Design:**
   - The application provides a responsive design for a seamless experience across different devices.


