pipeline {
    agent none
    stages {

        stage('Composer Install') {
            sh 'composer install'
        }

        stage("PHPUnit") {
            sh 'vendor/bin/phpunit'
        }

    }
}