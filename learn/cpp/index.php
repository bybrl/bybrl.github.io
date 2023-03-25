<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn C++ | NotMizzel</title>
    <?php include '../../topbar.php'; ?>
</head>
<body>
    <h1 style="font-family: 'Ubuntu'; margin-top: 100px;">Learn C++ | Getting Started</h1>
    <p style="font-family: 'Ubuntu', sans-serif;">To start, let's install a compiler. Common options are: G++ and Microsoft Visual Studio.<br>
    to install G++ in Ubuntu, use this command: <br>
    <code>sudo apt install g++</code><br>
    This command installs the g++ compiler on Ubuntu. To install MSVC, you can go to the <a href="https://visualstudio.microsoft.com/">Official download page.</a><br>
    To install G++ on a Windows system, go to <a href="https://sourceforge.net/projects/mingw/">https://sourceforge.net/projects/mingw/</a><br>In the installer, select the G++ options. <br>
    Congratulations, you now have a compiler.
    After you install a compiler, you can use this script in any text editor with the file extension cpp: <br>
    <pre style="position: relative; left:0px; background-color: white; color: black; padding: 0; font-family: 'Ubuntu';">
#include <iostream>
using std::cout;

int main() {
    cout << "Hello, world!" << endl;
    return 0;
}
        </pre><br>
    After making the script, you can now compile the code. You must use the terminal to compile using this command: <br>
    <code>g++ script.cpp</code> 
    After compiling the code, you can now run the code. On Windows:
    <code>.\a.exe</code>
    On Linux:
    <code>./a.out</code>
    You can also use the flag -o to specify the filename when it is compiled.<br>Example:
    <code>g++ code.cpp -o thisismyapp</code>

    </p>
</body>
</html>