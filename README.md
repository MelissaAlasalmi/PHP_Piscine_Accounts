# PHP_Piscine_Accounts

For day 04 of the Piscine, we practiced handling user accounts on PHP. Here's what each of my exercise submissions does.

## Ex00 : Session
A page that contains a form that allows you to create and modify a username and password using SESSION and GET.

## Ex01 : Create account
A page that contains a form that allows you to create an account with a username and a password using POST. 
- If the password is empty or if the username already exists, it returns "ERROR\n" - otherwise, it returns "OK\n".
- Accounts are stored in /private/passwd, which is a serialized array.
- Each account is added as an element in the serialized array - the element is also an array with a cell called "login" containing the username and a cell
called "passwd" containing a hashed password.

## Ex02 : Modif account
A page that contains a form that allows you to modify the password of an existing account (created in Ex01) using POST. 
- The user submits their username, their current password, and their new password. 
- If the username doesn’t exist, the current password is incorrect, or the new password isn’t valid, it returns "ERROR\n" - otherwise, it returns OK\n".
- The password is changed by modifying the /private/passwd file.
