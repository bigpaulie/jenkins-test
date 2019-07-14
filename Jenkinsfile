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
                sh 'vendor/bin/phpunit --log-junit junit.xml'
            }
        }

    }
    post {
        always {
            junit 'build/reports/**/*.xml'
        }
    }
}