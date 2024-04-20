<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUMOS Open Source Project</title>
    <style>
        body, h1, p, a, ul, li, h2, h3 {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            color: white;
            padding: 15px 20px;
        }
        .navbar a {
            float: right;
            text-decoration: none;
            color: white;
            padding: 0 15px;
        }
        .header {
            background-color: #00796B;
            color: white;
            text-align: center;
            padding: 50px 10px;
        }
        .header img {
            width: 128px;
            height: 128px;
        }
        .header h1, .header p {
            color: white;
        }
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        .header p {
            font-size: 1.4em;
            margin-bottom: 20px;
        }
        .header a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background-color: #009688; /* Teal shade for a different look */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* subtle shadow for depth */
            transition: background-color 0.3s ease; /* smooth transition for hover effect */
        }

        .header a:hover {
            background-color: #00796B; /* slightly darker shade on hover */
        }

        .main-content {
            padding: 20px;
        }
        .gif-container {
            text-align: center;
            padding: 20px;
        }
        .gif-container img {
            width: 800px; /* Adjusted size */
        }
        .features {
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            text-align: center;
        }
        .feature-card {
            flex-basis: calc(33.333% - 40px); /* Adjusted for gap */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            border-radius: 8px;
            background: #fff;
            margin-bottom: 20px; /* Spacing between rows */
        }
        .feature-card:hover {
            background-color: #E4E2E2; /* slightly darker shade on hover */
        }
        .feature-card img {
            height: 325px; /* Adjusted height */
            width: auto; /* Adjust width accordingly */
            margin-bottom: 20px;
        }
        .feature-card h3 {
            color: #00796B;
            margin-bottom: 10px;
        }
        .feature-card p {
            font-size: 0.9em;
            color: #333;
            margin-bottom: 20px; /* Increased space */
        }
        .feature-card a {
            text-decoration: none;
            color: white;
            background: #00796B;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-top: auto; /* Align buttons to bottom */
        }
        .installation-section {
            background-color: #f9f9f9;
            padding: 40px;
        }
        .installation-section h2 {
            color: #00796B;
            text-align: center;
            margin-bottom: 20px;
        }
        .installation-instructions {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }
        .installation-instructions li {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 0.9em;
        }
        .installation-instructions code {
            background-color: #eee;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 10px;
        }
        .about-lumos-container {
            display: flex;
            align-items: flex-start; /* Align items to the top */
            background-color: #f9f9f9; /* Light grey background */
            padding: 40px 20px; /* Padding around the content */
            gap: 20px; /* Space between text and image */
        }

        .about-lumos-content {
            display: flex;
            align-items: center; /* Centers the items vertically */
            justify-content: space-around; /* Provides space around items */
            max-width: 1200px; /* Max width of the content */
            width: 100%; /* Adapts to the width of the container */
            margin: 0 auto; /* Centers the content container */
        }

        .about-lumos-text {
            flex: 1; /* Allows text to grow */
            padding-right: 20px; /* Space between text and image */
        }

        .about-lumos-image {
            flex: 1; /* Allows image to grow */
            padding-left: 20px; /* Space between image and text */
            align-items: flex-start;
        }

        .about-lumos-image img {
            width: auto;
            max-height: 100%;
        }



    </style>
</head>
<body>

<div class="navbar">
    <a href="https://github.com/jetspiking/LUMOS" target="_blank">GitHub</a>
    <a href="#installation">Installation</a>
    <a href="#overview">Overview</a>
</div>

<div class="header">
    <img src="https://raw.githubusercontent.com/jetspiking/LUMOS/main/Readme/Icon.png" alt="LUMOS Logo">
    <h1>LUMOS Unified Mock Operating System</h1>
    <p>Enhance your system's user experience with a specialized mock operating system</p>
    <a href="https://github.com/jetspiking/LUMOS/releases" target="_blank">Get LUMOS</a>
</div>

<div class="main-content">
    <div class="gif-container" id="overview">
        <img src="https://raw.githubusercontent.com/jetspiking/LUMOS/main/Readme/Boot.gif" alt="LUMOS Boot Animation">
    </div>

    <div class="features">
        <!-- Feature Card 1 -->
        <div class="feature-card">
            <img src="https://raw.githubusercontent.com/jetspiking/LUMOS/main/Readme/SoftKeyboardPortrait.png" alt="Soft Keyboard Portrait">
            <h3>Adaptive Soft Keyboard</h3>
            <p>Engage with the touch-friendly interface of LUMOS, which includes a customizable soft keyboard for efficient interaction in any orientation.</p>
            <a href="https://github.com/jetspiking/LUMOS" target="_blank">Learn More</a>
        </div>

        <!-- Feature Card 2 -->
        <div class="feature-card">
            <img src="https://raw.githubusercontent.com/jetspiking/LUMOS/main/Readme/Applications.png" alt="LUMOS Applications">
            <h3>Extendable App Ecosystem</h3>
            <p>Discover the power of modularity with LUMOS, where you can enhance functionalities with additional apps or customize existing ones.</p>
            <a href="https://github.com/jetspiking/LUMOS" target="_blank">Explore Apps</a>
        </div>

        <!-- Feature Card 3 -->
        <div class="feature-card">
            <img src="https://raw.githubusercontent.com/jetspiking/LUMOS/main/Readme/LaptopFsl.jpg" alt="LUMOS Fullscreen">
            <h3>Fullscreen Mode</h3>
            <p>LUMOS offers a distraction-free fullscreen mode that locks the application in an immersive experience, ideal for kiosk or dedicated workstations.</p>
            <a href="https://github.com/jetspiking/LUMOS" target="_blank">View Features</a>
        </div>
    </div>

    <!-- About LUMOS Open Source Project Section -->
    <div class="about-lumos-container">
        <div class="about-lumos-content">
            <div class="about-lumos-text">
                <!-- Your text content here -->
                <h2>About LUMOS</h2>
                <p>LUMOS is a mock operating system designed to streamline the functionality of systems for their intended purposes, enhancing user experience in environments reliant on specific tools. Initially conceived for kiosk and educational systems, LUMOS operates on Windows, Linux, or MacOS.</p>
                <p><br>The adaptable nature of LUMOS supports windowed and fullscreen modes tailored for diverse use cases. Its modular architecture promotes efficient development and integration, underpinned by extensive API and DLL support that facilitates customization and automation.</p>
                <p>Notable features of LUMOS include an extendable app ecosystem, an adaptive soft keyboard, and lifecycle management via the Liv module. A UI engine based on Avalonia UI ensures suitability for performance-constrained applications. The commitment to simplicity is evident in the single-process architecture, reducing complexity and simplifying updates.</p>
                <p><br>Deployment options offer flexibility, with straightforward installation for Mac OS, Windows, and Linux. Alternative run modes cater to immersive experiences or specialized display requirements. Applications included demonstrate API use and lifecycle management, showcasing the system's capability for developers.</p>
                <p>LUMOS's single-process architecture was a strategic choice to limit overall complexity. Each module-spanning from Apps to UI is designed with a specific role, allowing for focused development and potential expansion. Integration with third-party APIs or DLLs is streamlined, allowing for a wide range of backend-driven user interfaces.</p>
                <p><br>Contributors can extend LUMOS by adding new applications or adjusting module functionality to suit specific needs. The GitHub repository provides comprehensive guidance for creating and registering new apps, ensuring that manipulating LUMOS is as seamless as its user experience.</p>
                <a href="https://github.com/jetspiking/LUMOS" target="_blank">Learn More & Contribute</a>
            </div>
            <div class="about-lumos-image">
                <img src="https://raw.githubusercontent.com/jetspiking/LUMOS/main/Readme/Windowed.png" alt="LUMOS Windowed Mode">
            </div>
        </div>
    </div>



    <!-- Installation Section -->
    <div class="installation-section" id="installation">
        <h2>Easy Install</h2>
        <p>Get started with LUMOS by downloading from our <a href="https://github.com/jetspiking/LUMOS/releases" target="_blank">Releases Page</a>.</p>
        <ul class="installation-instructions">
            <li>
                <p><strong>Mac OS</strong>:</p>
                <code>xattr -d com.apple.quarantine LUMOS-osx-x64</code>
            </li>
            <li>
                <p><strong>Windows</strong>:</p>
                <code>./LUMOS-win-x64.exe</code>
            </li>
            <li>
                <p><strong>Linux</strong>:</p>
                <code>chmod +x LUMOS-lin-x64</code><br>
                <code>./LUMOS-lin-x64</code>
            </li>
        </ul>
    </div>
</div>

<div class="footer">
    <p>LUMOS Open Source Project &copy; 2024</p>
</div>

</body>
</html>
