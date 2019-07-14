pipeline {
  agent any
  stages {
    stage('Pull From Git') {
      steps {
        sh 'git clone https://github.com/bigpaulie/jenkins-test.git'
      }
    }
    stage('phpunit') {
      parallel {
        stage('phpunit') {
          steps {
            dir(path: 'jenkins-test')
          }
        }
        stage('') {
          steps {
            sh 'docker run -v $(pwd):/app --rm phpunit/phpunit run'
          }
        }
      }
    }
  }
}