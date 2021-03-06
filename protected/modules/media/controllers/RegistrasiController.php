<?php

class RegistrasiController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'rights',
        );
    }

    public function allowedActions() {
        return 'index, create, view, update, update, delete, captcha, exportXls';
    }

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
        );
    }

    public function actionExportXls() {
        spl_autoload_unregister(array('YiiBase', 'autoload'));
        Yii::import('application.vendors.PHPExcel.PHPExcel', true);
        spl_autoload_register(array('YiiBase', 'autoload'));
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator("Widodo Pangestu")
                ->setLastModifiedBy("Widodo Pangestu")
                ->setTitle("PDF Test Document")
                ->setSubject("PDF Test Document")
                ->setDescription("Test document for PDF, generated using PHP classes.")
                ->setKeywords("pdf php")
                ->setCategory("Test result file");

        $reader = Registrasi::model()->findAll();
        $no = '1';
        foreach ($reader as $row) {
            $char = 'A';
            foreach ($row as $key => $value) {
                $objPHPExcel->setActiveSheetIndex(0)->getCell("$char$no")->setValue($value);
                $objPHPExcel->setActiveSheetIndex(0)->getStyle("$char$no")->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                $char++;
            }
            $no++;
        }

        $objPHPExcel->getActiveSheet()->setTitle('Report App');
        $objPHPExcel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="report_app.xls"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Registrasi;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Registrasi'])) {
            $iphoto_graph = CUploadedFile::getInstance($model, 'photo_graph');
            $iletter_of_assignment = CUploadedFile::getInstance($model, 'letter_of_assignment');
            if ($iphoto_graph !== null && $iletter_of_assignment !== null ) {
                $model->photo_graph = time() . '_' . $iphoto_graph->getName() . '.' . $iphoto_graph->getExtensionName();
                $model->letter_of_assignment = time() . '_' . $iletter_of_assignment->getName() . '.' . $iletter_of_assignment->getExtensionName();
                $dir = Yii::getPathOfAlias('webroot') . Yii::app()->params['uploads'];
                $iphoto_graph->saveAs($dir . $model->photo_graph);
                $iletter_of_assignment->saveAs($dir . $model->letter_of_assignment);
            }
            $model->attributes = $_POST['Registrasi'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Registrasi'])) {
            $model->attributes = $_POST['Registrasi'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Registrasi');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Registrasi('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Registrasi']))
            $model->attributes = $_GET['Registrasi'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Registrasi the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Registrasi::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Registrasi $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'registrasi-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
