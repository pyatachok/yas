<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TeachersController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function previewAction()
    {
	$teacher = $this->params('teacher');
	error_log(
		var_export(array($teacher), true)
	);
        return new ViewModel(
		array(
		    'teacher' => $teacher,
		)
	);
    }
}
