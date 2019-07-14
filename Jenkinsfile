pipeline {
    agent any
    stages {

        stage('Composer Install') {
            steps {
                sh 'composer install'
            }
        }

        stage("PHPUnit") {
            steps {
                sh 'vendor/bin/phpunit --log-junit build/reports/junit.xml'
            }
        }

    }
    post {
        always {
            junit 'build/reports/**/*.xml'
        }
    }
}