<?php

namespace Moamahfouz\LaravelFunctionsExtender\HTMLFunctions;

class HTMLFormatter
{

    public function formatStatusWithBadgesHTML($status): string
    {
        $status = strtolower($status);
        return match ($status) {
            'pending' => '<span class="badge badge-warning">قيد الانتظار</span>',
            'rejected' => '<span class="badge badge-danger">مرفوض</span>',
            'canceled' => '<span class="badge badge-danger">ملغي</span>',
            'accepted' => '<span class="badge badge-success">مقبول</span>',
            default => '',
        };
    }



}
