pipeline {
  agent any
  stages {
    stage('checkout') {
      steps {
        checkout([$class: 'GitSCM'])
      }
    }

    stage('unit test') {
        agent {
            label: 'unittest'
        }
        steps {
            sh: 'echo test done !'
        }
    }
  }
}