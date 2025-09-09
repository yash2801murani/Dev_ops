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
                // Example: copy files to a deployment directory
                sh 'cp -r * /var/www/html/'  // Change this path as needed
            }
        }
    }
}
