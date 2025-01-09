# Mikbotam Project

This project is a Dockerized PHP application using Nginx and PHP-FPM. It is designed to run a web application with a MySQL database.

## Requirements

- Docker
- Docker Compose
- A MySQL database server

## Setup Instructions

1. **Clone the Repository**

   Clone this repository to your local machine:

   ```bash
   git clone https://github.com/naandan/mikbotam.git
   cd mikbotam
   ```

2. **Configure Environment Variables**

   Copy the `.env.example` file to `.env` and update the environment variables as needed:

   ```bash
   cp .env.example .env
   ```

   Edit the `.env` file to set your database credentials and other configuration options.

3. **Build and Run the Containers**

   Use Docker Compose to build and run the containers:

   ```bash
   docker build -t mikbotam .
   docker compose up -d
   ```

   This will start the Nginx and PHP-FPM services.

4. **Access the Application**

   Open your web browser and go to `http://localhost:8080` to access the application.

## Configuration

- **Database Configuration**: Ensure your MySQL database is running and accessible. Update the `DB_HOST`, `DB_USER`, `DB_PASS`, and other related environment variables in the `.env` file.

- **Nginx Configuration**: The Nginx configuration is located in `nginx/nginx.conf`. Modify this file if you need to change server settings.

## Troubleshooting

- If you encounter issues connecting to the database, verify that your database credentials in the `.env` file are correct and that the database server is accessible from the Docker network.

- Check the logs for any errors:

  ```bash
  docker compose logs
  ```

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes. 