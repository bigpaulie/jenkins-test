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
        sh 'docker run -v $(pwd):/app bigpaulie/jenkins bash -c \'php vendor/bin/phpunit\''
      }
    }
  }
}