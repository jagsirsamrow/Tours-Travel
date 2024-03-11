<?php

namespace App\Helper;
use App\Models\Company;


class Helper {
    static function CompanyData() {
        $data = Company::find(1);
        return $data;
    }
}
