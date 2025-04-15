<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="matrix-bg"></div>
    
    <header>
        <nav>
            <div class="logo">[SECURITY]</div>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#skills">SKILLS</a></li>
                <li><a href="#projects">PROJECTS</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="terminal">
                <div class="terminal-header">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <div class="terminal-content">
                    <div class="typing-text">Welcome to my Security Portfolio</div>
                    <div class="cursor">_</div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <h2>About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p class="typewriter">Cybersecurity Student | Ethical Hacker | Security Researcher</p>
                    <p>Passionate about digital security and committed to protecting the digital world through innovative solutions and continuous learning.</p>
                </div>
            </div>
        </section>

        <section id="skills" class="skills">
            <h2>Technical Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <h3>Security Tools</h3>
                    <ul>
                        <li>Wireshark</li>
                        <li>Metasploit</li>
                        <li>Nmap</li>
                        <li>Burp Suite</li>
                    </ul>
                </div>
                <div class="skill-card">
                    <h3>Programming</h3>
                    <ul>
                        <li>Python</li>
                        <li>Java</li>
                        <li>C++</li>
                        <li>Shell Scripting</li>
                    </ul>
                </div>
                <div class="skill-card">
                    <h3>Certifications</h3>
                    <ul>
                        <li>CompTIA Security+</li>
                        <li>CEH (In Progress)</li>
                        <li>OSCP (Planned)</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="projects" class="projects">
            <h2>Security Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <h3>Network Security Analysis</h3>
                    <p>Implemented intrusion detection system using Python and Machine Learning</p>
                </div>
                <div class="project-card">
                    <h3>Web Application Firewall</h3>
                    <p>Developed custom WAF rules for protecting against common web attacks</p>
                </div>
                <div class="project-card">
                    <h3>Malware Analysis</h3>
                    <p>Reverse engineered malware samples and documented their behavior</p>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <h2>Contact Me</h2>
            <form id="contact-form">
                <div class="form-group">
                    <input type="text" id="name" required>
                    <label for="name">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-group">
                    <textarea id="message" required></textarea>
                    <label for="message">Message</label>
                </div>
                <button type="submit" class="glow-button">SEND MESSAGE</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Cybersecurity Portfolio. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>