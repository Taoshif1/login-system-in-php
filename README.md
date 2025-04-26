# PHP User Login & Registration System 🔐

A simple login and registration system built using **PHP** and **MySQL**.  
Includes user role-based redirection, session handling, and basic error management.

## 🔧 Features

* User Registration (with name, email, password, role)
* Secure Login with Password Hashing
* Admin/User Role-Based Redirects
* Error Handling (email already exists, invalid login)
* Responsive UI with custom CSS
* Clean & beginner-friendly code structure

## Planned Features (Coming Soon)

* **To-Do Task Management:** Logged-in users will be able to:
    * Create new to-do tasks.
    * View their list of to-do tasks.
    * (Potentially) Mark tasks as complete and delete tasks.

## 🛠️ Built With

* PHP (Core)
* MySQL (Database)
* HTML/CSS (Frontend)
* Vanilla JavaScript (form toggle)
* XAMPP (Local Server)

## Setup Instructions

1.  **Clone the repository (once you've created it on GitHub):**
    ```bash
    git clone [your-repository-url]
    cd your-project-directory
    ```

2.  **Set up the database:**
    * Create a new database in your MySQL server.
    * Import the provided database schema (if you have a `.sql` file) or manually create the `users` table (and the `todos` table when you're ready to add that feature) with the following structure:

        **`users` table:**
        ```sql
        CREATE TABLE users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) UNIQUE NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
        ```

        **(You'll create the `todos` table later when you implement that feature.)**

3.  **Configure database connection:**
    * Locate the file where you handle your database connection (e.g., `db_config.php` or similar).
    * Update the database credentials (hostname, username, password, database name) to match your setup.

4.  **Set up the web server:**
    * Ensure your web server is configured to point to the project's root directory.
    * You might need to configure virtual hosts.

5.  **Access the application:**
    * Open your web browser and navigate to the project's URL (e.g., `http://localhost/your-project-directory/register.php`).

**Good luck with the GitHub setup! Let me know if you have any questions about that process.**

# 📸 UI Preview
* Login Page
![image](https://github.com/user-attachments/assets/85d2df20-1331-4e79-9489-623a8b808926)
* Register Page
 ![image](https://github.com/user-attachments/assets/1ea1a689-cde0-404a-ac75-6627e0e60702)
* As i register before, i simply logged in to my User account
  ![image](https://github.com/user-attachments/assets/a7120ffb-b2dd-476d-82a6-769f36d26e96)
* I can also login to my Admin account
  ![image](https://github.com/user-attachments/assets/cafa44e4-5653-4ca9-a67d-d2107650cc1e)
**[i didn't bothered to center the buttons because i am learning PHP, not CSS]**
* All the user accounts are being stored in the database
  ![image](https://github.com/user-attachments/assets/6c13b2bb-078e-4c67-a1c3-efdf6c6a1dfb)


# 🧠 Author

**Gazi Taoshif**                                                                                                                                                                                                                                                         
**CSE department at East West University, Dhaka, bangladesh**                                                                                                                                                                                                         
**Follow my journey on my Facebook | LinkedIn**                                                                                                                                                                                                                                **🚀Building the future, one project at a time!**                                                                                                                                                                                                                   

