pipeline {
    agent any
    environment {
        FILE_TYPES="php"
        ZIP_FILE_NAME="vc-${FILE_TYPES}.zip"
        ZIP_PLSQL_OUTFILE="${WORKSPACE}/${ZIP_FILE_NAME}" 
        FILES_TO_ZIP_PLSQL="vulnerabilities/**.${FILE_TYPES}"
    }

    stages {
        stage('Create zip file') {
            steps {
                script {
                    zip zipFile: env.ZIP_PLSQL_OUTFILE, overwrite: true, glob: env.FILES_TO_ZIP_PLSQL
                }
            }
        }
    }

    post {
        success {
            veracode canFailJob: true, scanPollingInterval: 30, scanName: "Jenkins - ${env.BUILD_NUMBER}", applicationName: "PHP App", criticality: "Medium", sandboxName: "DVWA App", waitForScan: true, timeout: 30, deleteIncompleteScan: false, uploadIncludesPattern: ZIP_FILE_NAME, scanIncludesPattern: ZIP_FILE_NAME
        }
    }
}
