<?php

namespace App\Services;

use App\Models\Sed;
use Illuminate\Support\Facades\DB;

class SedService {
    public function list(){
        return Sed::all();
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



