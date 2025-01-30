# Tournament Bracket Application
**This project is built using Service-Based Architecture and Request-Based Architecture principles**

### Installation Steps

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/virubhavsar/TournamentBracket.git
   cd TournamentBracket
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

## Database Setup

### Migration
1. **Create a new database**
    ```bash
    tournamentbracket
    ```
2. **Run migrations in the project console :"php artisan migrate"**
    ```bash
    php artisan migrate
    ```

## Configuration

1. **Copy the example environment file and update the configuration:**
   ```bash
   cp .env.example .env
   ```
2. **Update the `.env` file with your database credentials:**
   ```dotenv
   DB_DATABASE=tournamentbracket
   DB_USERNAME=root
   DB_PASSWORD=
   ```
3. **Generate an application key:"php artisan key:generate"**

## Running the Application

1. **Start the Laravel development server:**
   ```bash
   php artisan serve
   ```
### Accessing the Application
- Visit `http://localhost:8000/` in your browser.


### Folder Structure

```bash
app/
├── Http/
│   ├── Controllers/
│   │   └── TournamentController.php
│   ├── Requests/
│   │   └── StoreTeamsRequest.php  /
│   └── Middleware/
├── Services/
│   └── TournamentService.php 
├── Models/
│   └── Team.php
└── ...

```
