<?php

namespace Modulist;

use Modulist\Controllers\CourseController;
use Modulist\Controllers\ExportController;
use Modulist\Controllers\FieldController;
use Modulist\Controllers\LiteratureController;
use Modulist\Controllers\ModuleController;
use Modulist\Controllers\StudyManagementController;
use Modulist\Controllers\CategoryController;

// Controllers
include("Controllers/ModuleController.php");
include("Controllers/CategoryController.php");
include("Controllers/ExportController.php");
include("Controllers/StudyManagementController.php");
include("Controllers/CourseController.php");
include("Controllers/FieldController.php");
include("Controllers/LiteratureController.php");

// Models
include("Models/ModuleModel.php");
include("Models/CourseModel.php");
include("Models/FieldModel.php");
include("Models/CategoryModel.php");
include("Models/LiteratureModel.php");
include("Models/ExamModel.php");

// Services
include("Services/DatabaseService.php");
include("Services/ModuleService.php");
include("Services/ExportService.php");
include("Services/FieldService.php");
include("Services/CourseService.php");
include("Services/LiteratureService.php");
include("Services/CategoryService.php");
include("Services/ValidationService.php");

// PDF-Bibliothek
require_once('libs/dompdf/autoload.inc.php');

class MainController {
    function __construct() {
        $subcontroller = $_GET["subcontroller"] ?? null;

        switch($subcontroller) {
            case "module":
                new ModuleController();
                break;
            case "category":
                new CategoryController();
                break;
            case "export":
                new ExportController();
                break;
            case "studymanagement":
                new StudyManagementController();
                break;
            case "course":
                new CourseController();
                break;
            case "field":
                new FieldController();
                break;
            case "literature":
                new LiteratureController();
                break;
        }
    }
}
$mainObject = new MainController();