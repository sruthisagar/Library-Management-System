# Library-Mangement-System

Use Case:

Owner , admin and users should be able to login using phone number with OTP.

Registration details should include email ,first name, last name and phone number.

Owner should be able to add , update  or delete books/ (users-including admins).

Owner and admin should be to manage the library.

admin should be able to add , update  or delete books.

Admin should be able to confirm/reject payments  and books returns based on requests from users.

Owner/admin should be able to update the fine of respective users.

Complete Library Management System Module with the following modules.

User Login and Registration

Role based login (Admin and owner should have the permission to update/delete/add books)

Book Allocation based on category

Fine Calculation based on due date

Rented book listing and raising book return request

 

DB Changes should be through Migrations Only

-----------------------------------------------------------------------------------------------------
<h2> Registration and Login </h2>

Implement OTP-based registration and login functionality for Owner/Admin/Owner.

Include below-mentioned field for registration

Email id

Mobile number 

First name

Last name

OTP

A user can login using their mobile phone and an  OTP

Front end should be configured using laravel blade with ajax and javascript

OTP

OTP should be valid for 15 minutes

OTP should be 6 digits

Maximum of 5 wrong attempts are allowed, after that account should be locked for 5 minutes.

Implement Validator for email and  mobile number

 

Session should be handles using JWT
