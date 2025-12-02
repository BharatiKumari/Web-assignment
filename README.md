# Online Application / Registration Form  
A simple web application built using **HTML, CSS, JavaScript, jQuery, and PHP** that accepts user details through a registration form and displays the submitted information in a formatted manner on a separate page.

This project is designed to be easy to host on **InfinityFree** or any PHP-supported hosting service.

---

## 📌 Features
- Fully functional registration form  
- Client-side validation using **jQuery**  
- Backend form handling using **PHP**  
- Submitted data is displayed in a well-formatted styled page  
- Simple UI with clean CSS  
- Works on InfinityFree and all local servers (XAMPP/PHP built-in server)

---


---

## 📝 Pages Overview

### 🔹 **registration.html**
- Main form page  
- Takes user input:  
  - Name  
  - Email  
  - Phone  
  - Gender  
  - Course  
  - Address  
- Has jQuery-based validation  
- Submits data to `process.php`

### 🔹 **process.php**
- Receives POST form data  
- Sanitizes data using `htmlspecialchars()`  
- Displays submitted info in a styled layout  
- Provides a “Go Back” button to return to form page

### 🔹 **style.css**
- Styles both pages  
- Adds containers, borders, spacing, colors, and layout  
- Provides clean, smooth UI

---

## 🛠 Technologies Used
- **HTML5** – structuring the form  
- **CSS3** – styling and layout  
- **JavaScript / jQuery** – client-side validation  
- **PHP** – backend form handling and display  
- **Bootstrap (optional)** – *not used but compatible*  
- Works on **any server supporting PHP**



