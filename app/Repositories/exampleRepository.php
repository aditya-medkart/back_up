<?php

namespace App\Repositories;


use App\Models\example;

class exampleRepository
{
    public function getAllMedicines()
    {
        return example::all();
    }

    public function getMedicineById($id)
    {
        return example::findOrFail($id);
    }

    public function createMedicine($data)
    {
        return example::create($data);
    }

    public function updateMedicine($id, $data)
    {
        $medicine = example::findOrFail($id);
        $medicine->update($data);

        return $medicine;
    }

    public function deleteMedicine($id)
    {
        $medicine = example::findOrFail($id);
        $medicine->delete();
    }
}

