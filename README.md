# AI Notes CRUD API

A Laravel-based REST API project for managing notes with complete CRUD functionality.

---

## Features

- Create Notes
- Read Notes
- Update Notes
- Delete Notes
- REST API
- SQLite Database Integration

---

## Technologies Used

- Laravel 12
- PHP 8
- SQLite
- Thunder Client / Postman

---

## API Endpoints

### Get All Notes

GET /api/notes

### Create Note

POST /api/notes

Sample JSON:

{
  "title": "My First Note",
  "content": "Laravel CRUD API working"
}

### Update Note

PUT /api/notes/{id}

### Delete Note

DELETE /api/notes/{id}

---

## Installation Steps

### 1. Clone Repository

git clone <your-github-repository-link>

### 2. Open Project Folder

cd ai-notes-app

### 3. Install Dependencies

composer install

### 4. Create Environment File

copy .env.example .env

### 5. Generate Application Key

php artisan key:generate

### 6. Run Migrations

php artisan migrate

### 7. Start Laravel Server

php artisan serve

### 8. Open API

http://127.0.0.1:8000/api/notes

---

## Screenshots

Add screenshots of:
- API GET request
- POST request
- Laravel server running
- Database records

---

## Author
Ketkee Wankar
Software Developer

