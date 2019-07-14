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
  }
}