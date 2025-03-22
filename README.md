# Emerald Vinyl

Emerald Vinyl is a music-focused web application designed to help users explore, manage, and purchase vinyl records seamlessly. Built using **HTML, CSS, PHP, JavaScript and Laravel**, this platform provides an intuitive and engaging experience for music enthusiasts.

## Features include 
- A home page. 
- An “About Us” page (or similarly named) to state the vision of the business. 
- A page with contact details for the business, with a contact us form to allow customers to automatically send requests to admin.
- A page to display the products that the company sells, with a product search functionality by name or by category.
- A page to sign up to use the website as a customer or admin, with password change functionality after login.
- A page to log in if they already have an account (customer or admin).
- A page to display the user’s current basket.
- A page to display the user’s previous orders. 
- A page for customers checkout to complete dummy payment and submit the order.
- The company must have a brand including logo, colour scheme, consistent font, etc.
- The home page must display the categories of products, and clicking one of these categories will take the user to the products page which will only display that category of products.
- There must be at least five different categories of products listed within the platform, with each category having at least five different products listed.
- The products page must include a way to search and filter the products, depending on the category or other filters.
- The system should be easy to understand and organized in a structured way. The users should also receive feedback about any errors that occur.
- The website must be hosted online and must always be in a functional state.
- The website must be secure to protect customers’ data.
- You may decide in your teams an additional functionality that you can offer to the customer.
- There must be at least two types of users who each have a different view of the website and the functionality available to them – an admin and a customer.
- sign up for the first time and use the website as a customer, with password change functionality after first login.
- change their password for future security.
- search and filter products by names of categories and/or by price range.
- place an order, which submits their basket and registers it as an order in the database, along with the total price (it is NOT necessary to include any method of payment, either by taking details or through online payment systems);
- return a product which they have already purchased in previous orders.
- add, update, or remove items to/from their basket.
- view, add, delete and update their details (personal information).
- check the status of their past orders. 
- rate and review individual products and the overall service provided by the website.
- you may decide in your teams an additional facility/service to customers to improve their online shopping experience. Use the creativity of your team!
- sign up for the first time and use the website as a customer, with password change functionality after first login.
- change their password for future security.
- process an order, by checking customers transactions and processing shipments.
- view, add, delete and update customers’ details.
- effectively operate the inventory management system (explained below) 
- includes inventory management system
- A product listing must include an image of the product, a price, a description, an indication of the stock level (either units available, or “in stock/low stock/out of stock” (where you decide the thresholds), or your own choice) and any further information if needed (such as if selling clothing or shoes, the individual sizes – which must each have a stock level tracked in the back end);
- Inventory alert system: If an item goes out of stock, or under a specified threshold this must be automatically communicated to the user in an effective and friendly way.
- Whenever an incoming or outgoing product is entered or removed, the stock number will be automatically updated.
- The application should be able to generate reports in real-time that will be displayed on the website about current stock levels as well as incoming and outgoing orders for all products.
- The system will allow authorized users (admin) to search, filter and view the status of selected products and orders.
- The system will allow authorized users (admin) to add, edit or remove products to /from the inventory through the website.
- The system will allow authorized users (admin) to initiate and process an incoming order in a friendly way. Following this entry, the stock level will be automatically updated

## 🛠 Built With
- **Frontend:** HTML, CSS (Bootstrap/Tailwind)
- **Backend:** PHP, Laravel Framework
- **Database:** SQL, phpAdmin
- **Version Control:** GitHub and was hosted on server

## Prerequisites
Ensure you have the following installed:
- PHP (>= 8.0)
- Composer
- Node.js & npm (for frontend dependencies)
- SQL on phpMyAdmin (or any preferred database)
- Laravel (latest version)
- JavaScript

## Installation
Follow these steps to set up the project locally:

```sh
# Clone the repository
git clone https://github.com/M1zzy-h/Team-9.git

# Navigate to the project directory
cd Team-9

# Install PHP dependencies
composer install

# Install frontend dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file and run migrations
php artisan migrate --seed

# Create a symbolic link for storage
php artisan storage:link

# Start the Laravel development server
php artisan serve


thank you!!! 
-anmol
