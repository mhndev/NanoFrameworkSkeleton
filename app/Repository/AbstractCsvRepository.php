<?php

namespace mhndev\NanoFrameworkSkeleton\Repository;

use mhndev\NanoFrameworkSkeleton\models\iModel;

class AbstractCsvRepository implements iRepository
{

    protected $model;

    protected $filename;

    protected $csvService;


    /**
     * AbstractCsvRepository constructor.
     * @param iModel $model
     * @param string $filename
     * @param Csv $csvService
     */
    public function __construct(iModel $model, $filename, Csv $csvService)
    {
        $this->model = $model;
        $this->filename = $filename;
        $this->csvService = $csvService;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->csvService->csvToArray($this->filename);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        $this->csvService->addLine($this->filename, $data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        $this->csvService->updateLineBy($this->filename, Csv::LINE_ID, $id, $data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $this->csvService->deleteOnLineBy($this->filename, Csv::LINE_ID, $id);
    }

    /**
     * @param array $criteria
     * @return mixed
     */
    public function fundOneByCriteria(array $criteria)

    {
        // TODO: Implement fundOneByCriteria() method.
    }

    /**
     * @param array $criteria
     * @return mixed
     */
    public function findManyByCriteria(array $criteria)
    {
        // TODO: Implement findManyByCriteria() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id)
    {
        // TODO: Implement findOneById() method.
    }

    /**
     * @param array $ids
     * @return mixed
     */
    public function findManyByIds(array $ids)
    {
        // TODO: Implement ManyByIds() method.
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function createMany(array $data)
    {
        foreach ($data as $item) {
            $this->csvService->addLine($this->filename, $item);
        }
    }

    /**
     * @param array $criteria
     * @param array $data
     * @return mixed
     */
    public function updateManyByCriteria(array $criteria, array $data)
    {
        // TODO: Implement updateManyByCriteria() method.
    }

    /**
     * @param array $ids
     * @param array $data
     * @return mixed
     */
    public function updateManyByIds(array $ids, array $data)
    {
        // TODO: Implement updateManyByIds() method.
    }

    /**
     * @return mixed
     */
    public function deleteManyBy()
    {
        // TODO: Implement deleteManyBy() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteOneById($id)
    {

    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function updateOneById($id, array $data)
    {
        // TODO: Implement updateOneById() method.
    }

    /**
     * @param array $ids
     * @return mixed
     */
    public function deleteManyByIds(array $ids)
    {
        // TODO: Implement deleteManyByIds() method.
    }
    
}
