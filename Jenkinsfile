pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'staticweb', url: 'https://github.com/yash2801murani/Dev_ops.git'
            }
        }
        stage('Deploy') {
            steps {
                // Copy files to macOS Apache web root directory
                sh '''
                  sudo cp -r * /Library/WebServer/Documents/
                '''
            }
        }
    }
}
