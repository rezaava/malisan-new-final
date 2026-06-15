<?php

if (!function_exists('persian_number')) {
    function persian_number($number)
    {
        return str_replace(
            ['0','1','2','3','4','5','6','7','8','9'],
            ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'],
            number_format($number)
        );
    }
}
