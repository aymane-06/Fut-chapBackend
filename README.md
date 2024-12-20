# Fut-champBackend

A backend application designed to manage players, teams, nations, and more for a football management system. This CRUD-based app supports two distinct roles: **User** and **Admin**.

- **User**: Can read and select players, teams, and nations.
- **Admin**: Has full control to create, update, and delete players, teams, nations, etc.

---

## Features

### For Users:

- Browse and view players, teams, and nations.
- Select preferred players or teams.

### For Admins:

- Add new players, teams, and nations.
- Update existing records.
- Delete unwanted records.

---

## Tech Stack

- **Frontend**: HTML, TailwindCSS, JavaScript
- **Backend**: PHP
- **Database**: MySQLi

---

## Installation

Follow these steps to set up the project locally:

1. **Clone the Repository**:

   ```bash
   https://github.com/aymane-06/Fut-chapBackend/tree/main
   ```

2. **Navigate to the Project Directory**:

   ```bash
   cd Fut-champBackend
   ```

3. **Set Up Database**:

   - Import the provided `.sql` file into your MySQL database.
   - Update database credentials in the configuration file.

4. **Run the Application**:

   - Use a local server such as XAMPP or WAMP to host the project.
   - Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).
   - Access the app via `http://localhost/Fut-champBackend`.

---

## API Endpoints

### User Endpoints

- **GET** `/players`: Fetch all players.
- **GET** `/teams`: Fetch all teams.
- **GET** `/nations`: Fetch all nations.

### Admin Endpoints

- **POST** `/players`: Add a new player.
- **PUT** `/players/:id`: Update a player by ID.
- **DELETE** `/players/:id`: Delete a player by ID.
- Similar endpoints for teams and nations.

---

## License

This project does not have a license.

---

## Contact

For any inquiries, please contact:

- **Aymane Himame**
- **Aymane.himame@gmail.com**

---


