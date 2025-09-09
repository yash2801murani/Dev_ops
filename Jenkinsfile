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
                sh '''
                    cd $WORKSPACE
                    cp -r * /Applications/XAMPP/htdocs/
                '''
            }
        }
    }
}
