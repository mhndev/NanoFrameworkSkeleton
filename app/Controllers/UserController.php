<?php

namespace mhndev\NanoFrameworkSkeleton\Controllers;

use mhndev\NanoFramework\Http\Response;
use mhndev\NanoFrameworkSkeleton\Repository\csv\UserRepository;

class UserController extends BaseController
{

    /**
     * @var UserRepository
     */
    protected $repository;


    /**
     * @return Response
     */
    public function indexAction()
    {
        $users = $this->repository->all();

        return new Response($users);
    }


    /**
     *
     */
    public function createAction()
    {
        $data = $this->request->getParsedBody();
        
        $user = $this->repository->create($data);
        
        return new Response($user);

    }


    /**
     *
     */
    public function showAction()
    {
        $id = $this->request->getQueryParams()['id'];
        
        $user = $this->repository->findOneById($id);
        
        return new Response($user);
    }


    /**
     *
     */
    public function deleteAction()
    {
        $id = $this->request->getQueryParams()['id'];
        
        $this->repository->deleteOneById($id);
        
        return new Response();
    }

    /**
     *
     */
    public function updateAction()
    {
        $id = $this->request->getQueryParams()['id'];
        $data = $this->request->getParsedBody();
        
        $user = $this->repository->updateOneById($id, $data);

        return new Response($user);
    }
    
    public function deleteBulkAction()
    {
        $this->repository->deleteManyByIds($this->request->getParsedBody()['ids']);
        
        return new Response();
    }
    
    public function updateBulkAction()
    {
        $data = $this->request->getParsedBody();
        unset($data['ids']);
        
        $this->repository->updateManyByIds($data['ids'], $data);
        
        return new Response();
    }

}
