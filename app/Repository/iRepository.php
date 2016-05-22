<?php

namespace mhndev\NanoFrameworkSkeleton\Repository;


interface iRepository
{
    /**
     * @return mixed
     */
    public function all();


    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);


    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data);


    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);


    /**
     * @param array $criteria
     * @return mixed
     */
    public function findOneByCriteria(array $criteria);

    /**
     * @param array $criteria
     * @return mixed
     */
    public function findManyByCriteria(array $criteria);


    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id);


    /**
     * @param array $data
     * @return mixed
     */
    public function createMany(array $data);


    /**
     * @param array $criteria
     * @param array $data
     * @return mixed
     */
    public function updateManyByCriteria(array $criteria, array $data);


    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function updateOneById($id, array $data);

    /**
     * @param array $ids
     * @param array $data
     * @return mixed
     */
    public function updateManyByIds(array $ids, array $data);


    /**
     * @param $id
     * @return mixed
     */
    public function deleteOneById($id);


    /**
     * @param array $ids
     * @return mixed
     */
    public function deleteManyByIds(array $ids);


    /**
     * @return mixed
     */
    public function deleteManyBy();


}
