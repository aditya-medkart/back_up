<?php

namespace App\Http\Controllers;

// use App\Models\example;
use App\Repositories\exampleRepository;
use App\Http\Requests\StoreexampleRequest;


class ExampleController extends Controller
{
    private $medicineRepository;

    public function __construct(exampleRepository $medicineRepository)
    {
        $this->medicineRepository = $medicineRepository;
    }

    public function index()
    {
        $medicines = $this->medicineRepository->getAllMedicines();
        return response()->json($medicines);
    }

    public function show($id)
    {
        $medicine = $this->medicineRepository->getMedicineById($id);
        return response()->json($medicine);
    }

    public function store(StoreexampleRequest $request)
    {
        $data = $request->validated();
        $medicine = $this->medicineRepository->createMedicine($data);
        return response()->json($medicine, 201);
    }

    public function update(StoreexampleRequest $request, $id)
    {
        $data = $request->validated();
        $medicine = $this->medicineRepository->updateMedicine($id, $data);
        return response()->json($medicine);
    }

    public function destroy($id)
    {
        $this->medicineRepository->deleteMedicine($id);
        return response()->json(['message' => 'Medicine deleted successfully']);
    }
}
