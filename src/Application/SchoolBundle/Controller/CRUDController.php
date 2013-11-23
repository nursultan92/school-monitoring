<?php
/**
 * Created by PhpStorm.
 * User: Almaz
 * Date: 23.11.13
 * Time: 3:25
 */

namespace Application\SchoolBundle\Controller;


use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Controller\CRUDController as BaseController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class CRUDController extends BaseController{

    public function batchActionReport(ProxyQueryInterface $selectedModelQuery){
      if($this->admin->isGranted('EDIT')===false || $this->admin->isGranted('DELETE')===false){
          throw new AccessDeniedException();
      }

        $request = $this->getRequest();
        $modelManager = $this->admin->getModelManager();
        $selectedModels = $selectedModelQuery->execute();
//        die(var_dump($selectedModels));
//        foreach($selectedModels as $selectedModel){
//            die(var_dump($selectedModel->getNationStat()));
//        }


        return $this->render('ApplicationSchoolBundle:CRUD:batch_report.html.twig',array('classes'=>$selectedModels));
    }
} 