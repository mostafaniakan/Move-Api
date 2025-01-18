<?php

namespace App\Traits;

use Illuminate\Support\Facades\Date;
use Ramsey\Uuid\Type\Time;

trait Updater
{
    protected function updateInjector($request)
    {
        $result = [];

        foreach ($request->rules() as $ruleKey => $rule) {
            if ($request->input($ruleKey)) {
                $result[$ruleKey] = $request->input($ruleKey);
            }
        }

        return $result;
    }

}
