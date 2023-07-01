# Filehandling

Simple Filhandling read/write/delete from File PHP

This repository contains the source code for a simple PHP script that allows users to submit messages and delete existing messages. 
The messages are stored in a text file on the server.

Getting Started

To use this script, you'll need a web server with PHP installed. Simply upload the contents of this repository to your server,
and make sure that the file.txt file is writable by the web server. You may need to adjust the permissions of the file to make it writable.

Usage

To use the script, navigate to the index.php file in your web browser. You'll see a form that allows you to submit a message.
Fill out the form and click "Submit" to add your message to the text file.

To delete a message, click the "Delete" button next to the message you want to remove.

Notes

This script is intended as a simple example of file handling in PHP. It is not intended to be used in production environments without significant modifications.
The messages are stored in a plain text file on the server. For more complex applications, you may want to consider using a database instead.
This script does not include any form of authentication or security. It is vulnerable to attacks such as SQL injection and cross-site scripting. 
Do not use this script in production environments without taking appropriate security measures.
