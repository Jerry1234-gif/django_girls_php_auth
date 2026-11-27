DCOMP207 WEB PROGRAMMING — PHP AUTHENTICATION SYSTEM
====================================================

PROJECT FEATURES
- Django Girls-inspired blue-and-white homepage
- Combined sign-up and login panels on the homepage
- PHP registration and login processing
- MySQL storage using PDO prepared statements
- password_hash() and password_verify()
- Session-based login state and protected dashboard
- Session ID regeneration after login
- CSRF tokens on registration and login forms
- Logout clears session data and expires the session cookie
- Uses the supplied transparent-background developer photo in the hero section
- Responsive layout for desktop and mobile
- Copyright footer placeholder as required by the assignment

REQUIREMENTS
- XAMPP (Apache, PHP, MySQL/MariaDB)
- PHP with PDO MySQL enabled
- A modern browser

INSTALLATION IN XAMPP
1. Extract the django_girls_php_auth folder into:
   C:\xampp\htdocs\django_girls_php_auth

2. Open the XAMPP Control Panel and start Apache and MySQL.

3. Open phpMyAdmin:
   http://localhost/phpmyadmin

4. Select the Import tab, choose database.sql from this folder, and click Import/Go.
   The script creates the django_girls_auth database and users table.

5. Check config/database.php. The default settings assume:
   Host: 127.0.0.1
   Database: django_girls_auth
   Username: root
   Password: (blank)
   Change them if your local MySQL setup differs.

6. Visit:
   http://localhost/django_girls_php_auth/

7. Register a test account, log in, confirm that the dashboard shows the account name,
   then log out and try opening dashboard.php directly. You should be redirected to login.

BEFORE SUBMISSION
- Replace the copyright footer placeholders in includes/footer.php with your own
  correct first name, last name, programme, semester, ID, and year.
- Test registration, login, incorrect credentials, duplicate email, dashboard protection,
  and logout.
- Capture the Home Page screenshot required by the assignment.
- Prepare the printed report in Tahoma, 12 pt, 4–5 pages, and explain the design choices
  and any plugins/themes actually used.
- Complete and sign the assessment form individually.

IMPORTANT NOTES
- This is a local educational starter project, not a production-ready public deployment.
- The assignment specifically names the Django Girls logo. The header currently uses
  a text-based Django Girls wordmark rather than an official logo image file. If your
  lecturer requires the exact official logo asset, add an authorised image file and
  update includes/header.php.
- The assignment asks for a selected Sierra Leonean organisation while also specifying
  the Django Girls logo. Clarify this branding point with your lecturer if needed.
- No password reset workflow, email verification, or "remember me" persistent login
  has been implemented because these are not explicit requirements in the supplied brief.
