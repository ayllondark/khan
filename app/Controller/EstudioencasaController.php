<?php

App::uses('AppController', 'Controller');

class EstudioencasaController extends AppController {

    //public $uses = array('Alumno', 'Curso');
    public function bimestral_tutor() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'EDA Reporte');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS','<link rel="stylesheet" href="../css/colegio_hojarpta.css?2">'. '<script src="../js/librerias/bimestral_reporte_tutor.min.js?3"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function bimestral_reporte() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'EVALUACIONES EN L&Iacute;NEA - BIMESTRALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS','<link rel="stylesheet" href="../css/colegio_hojarpta.css?2">'. '<script src="../js/librerias/bimestral_reporte.min.js?4"></script>');
         $usuario = $this->Session->read('usuario');
    }


     public function bimestral() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'EVALUACIONES EN L&Iacute;NEA - BIMESTRALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS','<link rel="stylesheet" href="../css/colegio_hojarpta.css?4">'. '<script src="../js/librerias/bimestral.min.js?4"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
    

               public function comunicado_p1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
           public function comunicado_p2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
               public function comunicado_p3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
               public function comunicado_p4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
               public function comunicado_p5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
               public function comunicado_p6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

                   public function comunicado_s1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
                   public function comunicado_s2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
                   public function comunicado_s3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
                   public function comunicado_s4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
                   public function comunicado_s5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Comunicado');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    
    
    
    
       public function recomendaciones() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rprimaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rprimaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rprimaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rprimaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rprimaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rprimaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rsecundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rsecundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rsecundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rsecundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rsecundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Recomendaciones');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
                        public function tprimaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

        public function tprimaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tprimaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tprimaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tprimaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tprimaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tsecundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tsecundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tsecundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tsecundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function tsecundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Tareas Virtuales');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
    
    
    
                    public function lprimaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

        public function lprimaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lprimaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lprimaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lprimaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lprimaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lsecundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lsecundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lsecundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lsecundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function lsecundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

     public function clasesppt() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'CLASES EN PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/clasesppt.min.js?2"></script>');
         $usuario = $this->Session->read('usuario');
    }
     
     public function cvlibrosdigitales() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/cvlibrosdigitales.min.js?2"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function cvlibrosdigitalesdoc() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'LIBROS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/cvlibrosdigitalesdoc.min.js?4"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function cvtareasvirtuales() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/cvtareasvirtuales.min.js?2"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function cvtareasvirtualesdoc() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'TAREAS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/cvtareasvirtualesdoc.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function comunicadoscol() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'COMUNICADOS');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/comunicadoscol.min.js?2"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function comunicadoscoldoc() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'COMUNICADOS');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/comunicadoscoldoc.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

     public function datosppff() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'DATOS PERSONALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/datosppff.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function clasesenvivo() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/clasesenvivo.min.js?4"></script>');
         $usuario = $this->Session->read('usuario');
    }

     public function librosdigitales() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/librosdigitales.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function tareasvirtuales() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/tareasvirtuales.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }


    public function solucionarioevaexpress() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/solucionarioevaexpress.min.js?2"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solucionarioevaexpressdoc() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIO EVAEXPRESS');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/solucionarioevaexpressdoc.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solucionarioautoevas() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/solucionarioautoevas.min.js?2"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solucionarioautoevasdoc() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIO AUTOEVA');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/solucionarioautoevasdoc.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solucionarioetis() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/solucionarioetis.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solucionarioetisdoc() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIO ETIS');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/solucionarioetisdoc.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solucionarioeda() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/solucionarioeda.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solucionarioedadoc() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIO BIMESTRALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/solucionarioedadoc.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
                public function cprimaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

        public function cprimaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function cprimaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function cprimaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function cprimaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function cprimaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function csecundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function csecundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function csecundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function csecundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Clases en PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function csecundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'CLASES EN PPT');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?20"></script>');
         $usuario = $this->Session->read('usuario');
    }

	public function roprimaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function roprimaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function roprimaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function roprimaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function roprimaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function roprimaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }


    public function rosecundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rosecundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rosecundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rosecundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function rosecundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    
    
            public function hprimaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

        public function hprimaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hprimaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hprimaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hprimaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hprimaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hsecundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hsecundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hsecundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hsecundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function hsecundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HORARIOS Y SEMANALIZACIÓN');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
    
    	public function solprimaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solprimaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
    public function solprimaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
    public function solprimaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solprimaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solprimaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solsecundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solsecundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solsecundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solsecundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function solsecundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
    
    

    
        public function reporte() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Reporte de accesos al Módulo #Yoestudioencasa');
        $this->set('subTitPage', date("Y"));
        //$this->set('objJS', '<script src="../js/librerias/uselista.min.js?10"></script>');
                $this->set('objJS', '<!-- bootstrap datepicker --><link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">' .
                '<script src="../js/librerias/estudioencasa_reporte.js?2"></script>');
        $this->set('piePag', '<!-- bootstrap datepicker -->' .
                '<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>' .
                '<script src="../plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>');
    }

        public function evaexpress() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'EVALUACIONES EN L&Iacute;NEA - EVA EXPRESS');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/eva_express.min.js?42"></script>');
         $usuario = $this->Session->read('usuario');
    //     echo $usuario->id;
    }
    
       public function etidigital() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI DIGITAL');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/etidigital.min.js?7"></script>');
         $usuario = $this->Session->read('usuario');
    //     echo $usuario->id;
    }
    
    public function catolica() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '#YoEstudioencasa');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    //     echo $usuario->id;
    }

    
        public function uni() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '#YoEstudioencasa');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
        
        public function unmsm() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '#YoEstudioencasa');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
        
    public function unmsm20202() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '#YoEstudioencasa');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function privadas() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '#YoEstudioencasa');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function primaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

        public function primaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function primaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function primaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function primaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function primaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function secundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function secundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function secundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function secundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }
    
        public function secundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ETI');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function aluprimaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function aluprimaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function aluprimaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function aluprimaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function aluprimaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function aluprimaria6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function alusecundaria1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function alusecundaria2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function alusecundaria3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function alusecundaria4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function alusecundaria5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        //$this->set('titPage', '#YoEstudioencasa'.'<br>'.AppController::decrypt('k6ehrdSiyZaantLQp6GjqNvGzpF4hLF2osWjl9eRpck=', "848f9f575cb1814febc73a62d62ec5d1c18656d0")."<br>".AppController::encrypt('comunicacionvirtual.DRZ@pamer.pe', "848f9f575cb1814febc73a62d62ec5d1c18656d0").'<br>'.AppController::decrypt('oJmhndhqnWZn', "848f9f575cb1814febc73a62d62ec5d1c18656d0"));
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/aluprimsecun.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp1() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'CLASES GRABADAS');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/construccion.min.js?20"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'CLASES MAGISTRALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp3() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'APOYO ACAD&Eacute;MICO EN L&Iacute;NEA');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp4() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'FORO DE APRENDIZAJE');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp5() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ASESOR&Iacute;A TELEF&Oacute;NICA');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp6() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', ' ASESOR&Iacute;A POR WHASTAPP');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp7() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ASESOR&Iacute;A POR EMAIL');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp8() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'ORALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp9() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'EVALUACIONES EN L&Iacute;NEA - TRABAJOS DE INVESTIGACI&Oacute;N');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp10() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'SOLUCIONARIOS DIGITALES');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp11() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'TUTOR&Iacute;A VIRTUAL');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp12() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'En Construcci&oacute;n');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function ctp13() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'En Construcci&oacute;n');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js?16"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function historiasexito() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'HISTORIAS DE &#201;XITO');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/yoestudioencasa.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function guias() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'GU&Iacute;AS');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/guias.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function guiasdoc() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'GU&Iacute;AS');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/guiasdoc.min.js?2"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function apoyoacademico() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'APOYO ACAD&Eacute;MICO');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/apoyoacademico.min.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

   public function tallerdanza() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'TALLER DE DANZA');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/tallerdanza.min.js?2"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function videoscortos() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/videoscortos.js"></script>');
         $usuario = $this->Session->read('usuario');
    }

    public function khan() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/khan.js"></script>');
         $usuario = $this->Session->read('usuario');
    }
     
     public function getdatos($op = null) {
        if ($this->Session->check('usuario') !== true) {
            $response = array(
                'success' => false,
                'message' => 'SESSION',
                'data' => 'Sesión Expirada. Por favor vuelva iniciar sesión para continuar'
            );
            $encoded = json_encode($response);
            exit(AppController::fnEncrypt($encoded));
        }
        $usuario = $this->Session->read('usuario');

        if ($this->request->is('post')) {
            $this->layout = '';
            ini_set('max_execution_time', 300);

            $sql = '';
            if (isset($op)) {
                switch ($op) {
                    case 1:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        //$sql = "CALL NPV_ESTUDIOENCASA_LISTA_GET('$json->pantalla',$json->fecha)";
                       $sql = "CALL NPV_ESTUDIOENCASA_LISTA_GET(3,'17-03-2020')";
                        //$sql = "CALL NPV_CORREOS_CONSOLIDADO_GET('$usuario->correo', $json->franqui, $json->pantalla, $json->zona, $json->anio, $json->periodo, $json->tipo)";
                        AppController::getDataTable($sql);
                        break;
                    case 2:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_EVAS_EXPRESS_CURSOS_GET('$usuario->codigo','$usuario->codgrado')";
                        exit(AppController::getResult($sql));
                        
                        break;
                    
                     case 3:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ETIS_DIGITALES_GET('$usuario->codigo','$usuario->codgrado')";
                        exit(AppController::getResult($sql));
                        
                        break;
                    case 4:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_COLEGIOS_EDA_LISTA('$usuario->codigo','$usuario->codgrado')";
                        exit(AppController::getResult($sql));
                        
                        break;
                    
                    case 5:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_COLEGIO_EDA_GET('$usuario->codigo','$usuario->codgrado','$json->curso')";
                        exit(AppController::getResult($sql));
                        
                        break;
                    
                    
                    case 6:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_COLEGIOS_EDA_RPT_LISTA('$usuario->codigo','$usuario->codgrado','$usuario->correo')";
                        exit(AppController::getResult($sql));
                    
                        break;

		  case 7:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_CLASESPPT('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;
		  
		   case 8:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_SOLUCEVAEXPRESS('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

                        case 9:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_SOLUCAUTOEVA('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;
                        
                        case 10:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_SOLUCETIS('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        case 11:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_SOLUCEDA('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

                        case 12:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_TAREASVIRTUALES('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

                        case 13:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_LIBROSDIGITALES('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

			case 14:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_CVLIBROSDIGITALES('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

                        case 15:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_CVTAREASVIRTUALES('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

			case 16:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_COMUNICADOS($usuario->idsalon,'$usuario->correo')";
                        exit(AppController::getResult($sql));

                        break;

			case 17:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_CLASEENVIVO('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

			case 18:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_GUIAS('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

			case 19:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_CVLIBROSDIGITALESDOC('$usuario->correo', '$json->salon')";
                        exit(AppController::getResult($sql));

                        break;

            case 20:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_SOLUCEVAEXPRESSDOC('$usuario->correo', '$json->salon')";
                        exit(AppController::getResult($sql));

                        break;

            case 21:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_SOLUCAUTOEVADOC('$usuario->correo', '$json->salon')";
                        exit(AppController::getResult($sql));

                        break;

            case 22:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_SOLUCETISDOC('$usuario->correo', '$json->salon')";
                        exit(AppController::getResult($sql));

                        break;

            case 23:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_SOLUCEDADOC('$usuario->correo', '$json->salon')";
                        exit(AppController::getResult($sql));

                        break;

            case 24:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_CVTAREASVIRTUALESDOC('$usuario->correo', '$json->salon')";
                        exit(AppController::getResult($sql));

                        break;

            case 25:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_GUIASDOC('$usuario->correo', '$json->salon')";
                        exit(AppController::getResult($sql));

                        break;

            case 26:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_COMUNICADOSDOC('$usuario->correo', '$json->salon')";
                        exit(AppController::getResult($sql));

                        break;

	    case 27:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_COL_PPFF_DATOS($usuario->idsalon,'$usuario->correo')";
                        exit(AppController::getResult($sql));

                        break;

	    case 28:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_SEAL_APOYOACADEMICO('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;
            case 29:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_COLEGIOS_EDA_REPORTE_TUTOR('$usuario->correo',$json->anioCiclo,$json->sede,$json->salon,$json->bimestre," . (isset($json->pantalla) ? $json->pantalla : "0") . ")";
                        exit(AppController::getResult($sql));
                        
                        break;
	 
	   case 30:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_CLASES_DIGITALES_TALLER('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

                        case 31:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_VIDEOSCORTOS('$usuario->codigo')";
                        exit(AppController::getResult($sql));

                        break;

                    
                }
            } else {
                exit();
            }
        } else {
            $this->redirect('/#' . $usuario->correo);
        }
    }



    public function mantto($op = null) {
        if ($this->Session->check('usuario') !== true) {
            $response = array(
                'success' => false,
                'message' => 'SESSION',
                'data' => 'Sesión Expirada. Por favor vuelva iniciar sesión para continuar'
            );
            $encoded = json_encode($response);
            exit(AppController::fnEncrypt($encoded));
        }
        $usuario = $this->Session->read('usuario');

        if ($this->request->is('post')) {
            $this->layout = '';
            ini_set('max_execution_time', 300);

            $sql = '';
            if (isset($op)) {
                switch ($op) {
                    case 1:
                        $prejson = $this->request->data('objJSON');
                        if ($prejson === '') {
                            $response = array(
                                'success' => false,
                                'message' => 'NO OK',
                                'data' => "No hay datos suficientes para autorizar."
                            );
                            $encoded = json_encode($response);
                            exit(AppController::fnEncrypt($encoded));
                        }
                        //$json = AppController::JSONisValid($prejson);
//$sql = "CALL PAMER_COLWEB_ALUMNOS_SET('$usuario->correo', '$json->json', $json->salon)";
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_EVAS_EXPRESS_EXAMENES_SET('$usuario->codigo','$usuario->codgrado',$json->bimestre,$json->semana,$json->curso,$json->rpta1,$json->rpta2,$json->rpta3,$json->rpta4";
                        exit(AppController::getResult($sql));
                        
                        break;

                        
                    case 2:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_EVAS_EXPRESS_EXAMENES_SET('$usuario->codigo','$usuario->codgrado',$json->bimestre,$json->semana,$json->curso,'$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4')";
                        exit(AppController::getResult($sql));
                       
                        /*
                          $response = array(
                          'success' => false,
                          'message' => 'NO OK',
                          'data' => $sql
                          );
                          $encoded = json_encode($response);
                          exit(AppController::fnEncrypt($encoded));
                         */
                        break;
                    
                    
                    case 3:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        //var aParam = '{"rpta":"' + respuestas +'","codalumno":"'+vcodalumno+'","semana":"'+vsemana+'","bimestre":"'+vbimestre+'","fechahora":"'+vfechahora+'"}';
                        $sql = "CALL NPV_ETIS_DIGITALES('$json->codalumno','$json->semana','$json->bimestre','$json->fechahora','$json->rpta')";
                        exit(AppController::getResult($sql));
                       
                        /*
                          $response = array(
                          'success' => false,
                          'message' => 'NO OK',
                          'data' => $sql
                          );
                          $encoded = json_encode($response);
                          exit(AppController::fnEncrypt($encoded));
                         */
                        break;
                    
                    case 4:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_COLEGIOS_EDA_SET('$json->alumno',$json->bimestre,$json->curso,$json->codgrado,'$json->hora_inicio','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5','$json->rpta6','$json->rpta7','$json->rpta8','$json->rpta9','$json->rpta10','$json->rpta11')";
                        exit(AppController::getResult($sql));
                       
                        
                        break;
                    
                    
                /*
                * MODULO TAREAS NUEVO
                */

                }
            } else {
                exit();
            }
        } else {
            $this->redirect('/#' . $usuario->correo);
        }
    }

}
