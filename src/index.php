<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker DevOps Course - Neo Theme</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a2e 100%);
            color: #00ff41;
            font-family: 'Courier New', monospace;
            line-height: 1.6;
        }
        
        header {
            background: rgba(0, 255, 65, 0.1);
            border-bottom: 2px solid #00ff41;
            padding: 20px;
            text-align: center;
        }
        
        header h1 {
            color: #00ff41;
            text-shadow: 0 0 10px #00ff41;
            font-size: 2.5em;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .course-card {
            background: rgba(0, 255, 65, 0.05);
            border: 2px solid #00ff41;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 0 20px rgba(0, 255, 65, 0.3);
        }
        
        .course-card h2 {
            color: #00ff41;
            margin-bottom: 10px;
        }
        
        .course-card p {
            color: #a0ffa0;
            margin: 10px 0;
        }
        
        .module {
            margin: 15px 0;
            padding-left: 20px;
            border-left: 2px solid #00ff41;
        }
        
        button {
            background: #00ff41;
            color: #000;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 3px;
            transition: all 0.3s;
        }
        
        button:hover {
            box-shadow: 0 0 20px #00ff41;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <header>
        <h1>🐳 Docker DevOps Course</h1>
        <p style="color: #00ff41;">Master containerization and CI/CD</p>
    </header>
    
    <div class="container">
        <div class="course-card">
            <h2>> Module 1: Docker Basics</h2>
            <p>Learn Docker fundamentals and containerization concepts</p>
            <div class="module">
                <p>✓ Docker architecture and components</p>
                <p>✓ Docker images and containers</p>
                <p>✓ Dockerfile creation</p>
            </div>
            <button>Start Module</button>
        </div>
        
        <div class="course-card">
            <h2>> Module 2: Docker Compose</h2>
            <p>Multi-container applications with Docker Compose</p>
            <div class="module">
                <p>✓ YAML configuration</p>
                <p>✓ Networking and volumes</p>
                <p>✓ Services orchestration</p>
            </div>
            <button>Start Module</button>
        </div>
        
        <div class="course-card">
            <h2>> Module 3: CI/CD Pipeline</h2>
            <p>Build automated deployment pipelines</p>
            <div class="module">
                <p>✓ Jenkins integration</p>
                <p>✓ GitHub Actions</p>
                <p>✓ Automated testing</p>
            </div>
            <button>Start Module</button>
        </div>
        
        <div class="course-card">
            <h2>> Module 4: DevOps Best Practices</h2>
            <p>Production-ready deployment strategies</p>
            <div class="module">
                <p>✓ Monitoring and logging</p>
                <p>✓ Security best practices</p>
                <p>✓ Scaling applications</p>
            </div>
            <button>Start Module</button>
        </div>
    </div>
</body>
</html>