pipeline {
  agent none
  stages {
    stage('Test') {
      agent {
        node {
          label 'phpunit'
        }

      }
      steps {
        echo 'cucu meu'
      }
    }
  }
}