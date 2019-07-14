pipeline {
    agent none
    stages {

        stage('Composer Install') {
            sh 'composer install'
        }

        stage("PHPLint") {
            sh 'find app -name "*.php" -print0 | xargs -0 -n1 php -l'
        }

        stage("PHPUnit") {
            sh 'vendor/bin/phpunit'
        }

    }
}