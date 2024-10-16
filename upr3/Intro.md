1. **Why .php extension?** - _This file contains PHP code that needs to be processed before sending the final HTML to the browser. The PHP code is replaced with the result, and the browser displays the page._
   You need a server to process PHP because it’s a server-side scripting language that generates dynamic content before sending HTML to the client. Running PHP through a server ensures that the logic, database interactions, and sensitive code are processed securely, and only the final output is delivered to the browser.
   
2. **Съпоставка със С++:**
- PHP е език, който се използва основно за сървърно програмиране и генериране на уеб съдържание. Той е удобен за динамични уеб приложения и е много лесен за използване в този контекст.
- C++ е мощен език за софтуерно разработване на сложни системи, като фокусът му е върху ефективност, контрол върху хардуера и възможност за сложни обектно-ориентирани проекти.

    _**Изпълнение на кода:**_
    - PHP: PHP е интерпретиран език, което означава, че PHP кодът се изпълнява от сървър (като Apache или Nginx), който интерпретира PHP скрипта и генерира HTML, изпратен на браузъра. PHP се изпълнява на сървъра и генерира динамично съдържание преди изпращането към клиента.
    - C++: C++ е компилиран език, което означава, че кодът трябва да бъде компилиран в машинен код (на ниско ниво) с помощта на компилатор (като GCC или MSVC) преди изпълнението. Програмите на C++ се компилират в изпълним файл и се стартират директно на хардуера на машината.


Step 1: Install a Local Server (if you don't have one)
PHP needs to be executed on a web server. If you don’t have access to an online server, you can set up a local server on your computer using one of the following options:

XAMPP (Cross-Platform Apache, MySQL, PHP, and Perl)

Download and install XAMPP.
XAMPP includes Apache (a web server), MySQL (a database), and PHP.
WAMP (Windows, Apache, MySQL, PHP) for Windows users.

Download and install WAMP.
MAMP (Mac, Apache, MySQL, PHP) for macOS users.

Download and install MAMP.
LAMP (Linux, Apache, MySQL, PHP) for Linux users.

On Linux, you can install Apache, PHP, and MySQL using the terminal. The command is typically:
bash
Copy code
sudo apt-get install apache2 php mysql-server
Step 2: Place Your PHP File in the Server Directory
Once you have a local server installed, place your PHP file (index.php) in the appropriate folder:

XAMPP: Place your file in the htdocs directory.

For example: C:\xampp\htdocs\
WAMP: Place your file in the www directory.

For example: C:\wamp\www\
MAMP: Place your file in the htdocs directory.

For example: /Applications/MAMP/htdocs/
LAMP: Place your file in the /var/www/html/ directory.

Step 3: Start the Local Server
XAMPP: Open the XAMPP control panel and start Apache.
WAMP: Start WAMP and make sure the icon in your system tray turns green (indicating Apache is running).
MAMP: Open MAMP and click “Start Servers.”
Step 4: Open the PHP File in Your Browser
Once the server is running, open your web browser and type the following URL in the address bar:

bash
Copy code
http://localhost/index.php
If you placed the file in a subdirectory (e.g., localhost/myfolder/index.php), make sure to include the folder name in the URL.
Now, your PHP file will be processed by the local server, and the output will be displayed in your browser.

