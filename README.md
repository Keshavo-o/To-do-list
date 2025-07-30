# To-Do List Application
This is a simple web-based To-Do List Project created using HTML, CSS (Bootstrap 5), JavaScript, and PHP. It stores tasks in Local Storage and allows basic task management operations like adding, editing, deleting, and clearing all tasks.

## 🚀 Features
🖋️ Add New Task with:

ID (auto-incremented)

Title

Description

Due Date

Status (default: Pending)

✏️ Edit Task using a separate PHP file with dynamic form population.

❌ Delete Task individually.

🧹 Clear All Tasks with one click.

💾 Data Persistence using localStorage.

💡 Simple and responsive UI built with Bootstrap 5.

## 📁 File Structure

├── index.html                 - Main UI for adding and viewing to-do items

├── get_sample_todoitem.php   - PHP file for editing an existing task

├── app.js                    - JavaScript logic for managing tasks

└── README.md                 - Project documentation

## 📷 Screenshots
<img width="1912" height="917" alt="image" src="https://github.com/user-attachments/assets/720ca071-b1af-49d5-8055-d092c7d08b3e" />
<img width="1908" height="919" alt="image" src="https://github.com/user-attachments/assets/e69c9812-0e01-480d-b92f-1c0aff232d5d" />




## Technologies Used
HTML5

CSS3

Bootstrap 5

JavaScript (ES6)

PHP (for Edit Page only)

Browser Local Storage

## 🧠 Logic Overview
localStorage is used to store each to-do item with a key format of todoItem-ID.

The maxId value is stored in localStorage to ensure unique IDs.

Task editing is done via redirection to get_sample_todoitem.php, passing the ID in the query string.

Form fields are dynamically populated with existing values using JavaScript and localStorage.getItem().

📌 How to Use
Open index.html in your browser.

Fill in the form and click Submit to add a task.

Use Edit to modify a task (handled via PHP file).

Click Delete to remove a task.

Click Delete all tasks to clear everything from local storage.

## 📋 Notes
This project does not use a backend/database. All data is stored locally in the browser.

Editing is handled via PHP for demonstration, but can be done purely with JavaScript for SPAs.

This project is designed to showcase my JavaScript skills by implementing task management using localStorage, as I have already demonstrated my PHP and MySQL expertise in my previous Employee Management System project.

## 📚 Future Enhancements
Add priority field with levels (Low, Medium, High).

Implement search/filter functionality.

Add completion tracking.

Improve UI/UX using animations and icons.

Store tasks in MySQL database instead of localStorage (optional)

