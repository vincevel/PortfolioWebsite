# Portfolio Website

## Overview
This is a personal portfolio website showcasing my projects, skills, and achievements. The website serves as a professional online presence to highlight my work and connect with potential clients or employers.

## Problem Solved
The goal was to create a centralized platform to display my portfolio, making it easy for visitors to explore my work, skills, and contact information in a visually appealing and accessible way.

## Features
- Showcase projects with descriptions and visuals.
- Display skills, experience, and achievements.
- Responsive design for seamless viewing on all devices.
- Contact form for inquiries.

## Technologies Used
- **PHP**: Backend logic for dynamic content and server-side processing.
- **MySQL**: Database for storing portfolio data, such as project details or contact form submissions.
- **CSS**: Styling for a modern, responsive, and visually appealing interface.
- **JavaScript**: Interactive frontend elements for enhanced user experience.

## Installation
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   ```
2. **Navigate to the Project Directory**:
   ```bash
   cd your-repo-name
   ```
3. **Set Up the Database**:
   - Create a MySQL database (e AZURE
e.g., `portfolio_db`).
   - No schema is provided; you may need to create tables manually for storing project details or contact form submissions. Example table structure:
     ```sql
     CREATE TABLE projects (
         id INT AUTO_INCREMENT PRIMARY KEY,
         title VARCHAR(255),
         description TEXT,
         image_url VARCHAR(255),
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```
   - Import the table structure into your MySQL database:
     ```bash
     mysql -u your-username -p portfolio_db < your-schema.sql
     ```
4. **Configure Environment**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with your database credentials and other configurations:
     ```env
     DB_HOST=localhost
     DB_NAME=portfolio_db
     DB_USER=your-username
     DB_PASS=your-password
     ```
5. **Install Dependencies**:
   - Ensure PHP and Composer are installed.
   - Run the following to install PHP dependencies (if any):
     ```bash
     composer install
     ```
6. **Set Up Web Server**:
   - Configure your web server (e.g., Apache or Nginx) to point to the `public/` directory.
   - For example, in Apache, set the `DocumentRoot` to `/path/to/your-repo-name/public`.
7. **Run the Application**:
   - Start your web server and access the app via `http://localhost` or your configured domain.
   - Optionally, use PHP's built-in server for development:
     ```bash
     php -S localhost:8000 -t public
     ```

## Usage
- Access the website via a browser to view the portfolio.
- Use the contact form to receive inquiries.
- Customize content by updating the database or PHP templates.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue to discuss improvements or bugs.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
