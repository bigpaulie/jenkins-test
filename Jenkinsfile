pipeline {
    agent none
    stages {

        stage('Composer Install') {
            steps {
                sh 'composer install'
            }
        }

        stage("PHPUnit") {
            steps {
                sh 'vendor/bin/phpunit'
            }
        }

    }
}