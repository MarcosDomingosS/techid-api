<?php

namespace App\Services;

use App\Models\Sed;
use Illuminate\Support\Facades\DB;
use App\Repositories\SedRepository;

class SedService {
    public function list(){
        $repository = new SedRepository();
        return $repository->all();
    }

    public function create(array $data){
        return DB::transaction(function() use ($data) {
            return Sed::create($data);
        });
    }

    public function delete(Sed $sed) {
        $sed->delete();
    }

    public function update(Sed $sed, array $data){
        $sed->update($data);
        return $sed;
    }
}



