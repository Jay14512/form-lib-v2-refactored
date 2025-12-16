# Form Library (v2 - Refactored)

A refactored version of the Form Library project with a stronger focus on **separation of concerns** and **clean architecture**.
 
Goal: Improving structure & maintainability  
Status: ✅ Completed  
Version: 2.0  
Tech: PHP 8+, Composer, Bootstrap 5  

---

## 📌 Overview

This version builds on the original Form Library project and improves the overall structure by clearly separating:

- configuration
- form creation logic
- validation logic
- presentation (HTML output)

The goal of this refactor was not to add new features, but to make the codebase **cleaner, more readable, and easier to maintain**.

For comparison, the original version (v1) uses a global error alert for form validation, while this refactored version improves UX by displaying validation errors directly at the corresponding form fields.


---

## 🧱 Refactored Structure

├─ config/
│ └─ form.php → form configuration

├─ app/
│ ├─ FormFactory.php  → form creation logic
│ └─ FormLib/  → form element classes & validation

├─ templates/
│ └─ errors.php → error output template

├─ public/
│ └─ index.php → application entry point

---

## ✨ Key Improvements

- Form configuration moved to a dedicated config file
- Switch / factory logic extracted into a `FormFactory` class
- Error output separated into a template file
- `index.php` reduced to orchestration only
- Clear separation between logic and presentation

---

## 🧠 What I Learned

- Applying separation of concerns in PHP
- Refactoring existing code without changing functionality
- Using factories to decouple object creation
- Structuring small PHP projects in a more scalable way
- Writing cleaner, more maintainable backend code

This refactored version demonstrates how an existing solution can be improved through better structure and architectural decisions.

