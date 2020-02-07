<?php


interface IAbstractDAO
{
    public function create($obj);

    public function read($id);

    public function update($obj);

    public function delete($obj);
}