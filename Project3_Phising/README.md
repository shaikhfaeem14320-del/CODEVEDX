# Project 3 – Phishing Simulation (Educational)

## Objective

To understand how phishing attacks work and how user credentials can be captured through fake login pages in a controlled lab environment.

## Tools Used

* Kali Linux
* PHP (Local Server)
* HTML
* Browser (for testing)

## Lab Setup

* Attacker Machine: Kali Linux
* Environment: Virtual Machine (VMware)
* Server: PHP Development Server (localhost)

## Methodology

1. Created a fake login page using HTML (index.html)
2. Designed a form to capture username and password
3. Created a PHP backend (login.php) to collect form data
4. Stored captured credentials in a local file (creds.txt)
5. Hosted the page locally using PHP server
6. Tested by submitting sample credentials through browser

## Result

* Successfully captured user input (username & password)
* Verified data storage in local file

## Key Learning

* Phishing attacks rely on user trust and fake interfaces
* Even simple forms can capture sensitive data
* Awareness is the best defense against phishing

## Disclaimer

This project is created strictly for educational purposes in a controlled environment. Do not use these techniques on real users or systems without proper authorization.
