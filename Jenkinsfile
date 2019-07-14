pipeline {
  agent any
  stages {
    stage('checkout') {
      steps {
        checkout([$class: 'GitSCM'])
      }
    }
    stage('build docker image') {
      steps {
        sh 'docker build -t bigpaulie/jenkins .'
      }
    }
    stage('phpunit') {
      steps {
        sh 'docker exec -it -v $(pwd):/app bigpaulie/jenkins bash -c \'/usr/bin/php /app/vendor/bin/phpunit\''
      }
    }
  }
}