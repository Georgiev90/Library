<?php

namespace App\Service;


use App\Data\BookDTO;

interface BookServiceInterface
{
    /**
     * @return \Generator|BookDTO[]
     *
     */
    public function getAll() : \Generator;

    public function getOne(int $id) : BookDTO;

    public function add(BookDTO $bookDTO) : bool;
    public function edit(BookDTO $bookDTO, int $id) : bool;
    public function delete(int $id) : bool;

    /**
     * @return \Generator|BookDTO[]
     */
    public function all() : \Generator;

    public function myAll(int $id) : \Generator;


}