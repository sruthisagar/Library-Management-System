# Library-Mangement-System

<h3> Use Case: </h3>

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

-----------------------------------------------------------------------------------------------------
<h2> User Management - Owner </h2>

The Owner should be able to manage the admin users ( delete/add admin users)

-----------------------------------------------------------------------------------------------------
<h2> Book Management - Admin </h2>

The admin should be able to manage the books, category ( add/update/delete)

-----------------------------------------------------------------------------------------------------
<h2> Book Return request </h2>

User should be able to raise a book return request which will show for admin for confirmation. Once it’s confirmed, the book status should be changed to available.

If fine is there, it should be visible to the admin and admin has to collect the payment before confirming the book rent status.

-----------------------------------------------------------------------------------------------------
<h2> Payment Made Request </h2>

User should be able to raise a payment confirmation request (fine) and it should be visible for admin for confirmation. Admin should have the option to reject/accept the payment confirmation.

-----------------------------------------------------------------------------------------------------
<h2> Fine Adjustment Option for Owner/Admin </h2>

Owner/ Admin should have the option to adjust the fine ( eg: if fine is 100, owner can change it to 50).

-----------------------------------------------------------------------------------------------------
<h2> Cron to update the fine amount </h2>

Cron should be running at every day 12:00 AM and it should update the fine
