pipeline {
  agent any
  stages {
    stage('build') {
      steps {
        echo 'start building'
        sleep 1
        sh 'echo "ok."'
        powershell(returnStatus: true, returnStdout: true, script: 'x')
      }
    }

    stage('test') {
      parallel {
        stage('test') {
          steps {
            echo 'start testing'
            sh 'echo "testing done."'
          }
        }

        stage('anythingelse') {
          steps {
            echo 'haha'
          }
        }

      }
    }

  }
}