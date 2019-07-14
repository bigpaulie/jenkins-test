pipeline {
  agent any
  stages {
    stage('Pull From Git') {
      steps {
        sh 'git clone https://github.com/bigpaulie/jenkins-test.git'
        cleanWs(cleanWhenAborted: true, cleanWhenFailure: true, cleanWhenNotBuilt: true, cleanWhenSuccess: true, cleanWhenUnstable: true, deleteDirs: true)
      }
    }
    stage('phpunit') {
      parallel {
        stage('phpunit') {
          steps {
            dir(path: 'jenkins-test')
          }
        }
        stage('error') {
          steps {
            sh 'docker run -v $(pwd):/app --rm phpunit/phpunit run'
          }
        }
      }
    }
  }
}