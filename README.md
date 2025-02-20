Laravel Assignment

Overview

This project is a Laravel-based application that demonstrates API creation, Livewire integration, PHP snippet execution, eager loading, MVC architecture, database relationships, and unit testing.

Technologies Used

Laravel: PHP framework for building web applications

Livewire: Dynamic front-end interactions without JavaScript

API Development: RESTful API implementation

PHP Snippet Execution: Custom script execution within the application

Eager Loading: Optimizing database queries

MVC Architecture: Clear separation of concerns

Database Relationships: Handling One-to-One, One-to-Many, and Many-to-Many relationships

Unit Testing: Ensuring reliability and stability

Features

1. API Creation

Built RESTful APIs using Laravel controllers

Implemented authentication and authorization

Used Laravel's built-in API Resource for response formatting

2. Livewire Integration

Developed interactive UI components without JavaScript

Managed state and data binding efficiently

3. PHP Snippet Execution

Integrated a module for executing PHP snippets securely

Ensured security measures like sandboxing user input

4. Eager Loading for Performance Optimization

Used with() to fetch related data efficiently

Reduced database query count and improved load times

5. MVC Architecture

Followed best practices by separating Models, Views, and Controllers

Used Laravel Service Providers for modular structure

6. Database Relationships

Implemented various relationship types:

One-to-One (hasOne, belongsTo)

One-to-Many (hasMany, belongsTo)

Many-to-Many (belongsToMany)

7. Unit Testing

Implemented PHPUnit tests for controllers, models, and APIs

Ensured core functionalities are stable before deployment

Installation Guide

Prerequisites

- PHP 8.0+

- Composer

- MySQL

- Laravel 10.48.28

Setup Instructions

Clone the repository:

- git clone https://github.com/ayushmohanan/exd-lara-assignment.git
cd exd-lara-assignment

Install dependencies:

- composer install

Set up the environment:

- cp .env.example .env

Run database migrations:

- php artisan migrate --seed

