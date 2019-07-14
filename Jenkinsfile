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
                sh 'vendor/bin/phpunit --log-junit build/reports/junit.xml --coverage-html build/coverage'
            }
        }

        stage("Publish Coverage") {
            publishHTML (target: [
                    allowMissing: false,
                    alwaysLinkToLastBuild: false,
                    keepAll: true,
                    reportDir: 'build/coverage',
                    reportFiles: 'index.html',
                    reportName: "Coverage Report"

            ])
        }

    }
    post {
        always {
            junit 'build/reports/**/*.xml'
        }
    }
}