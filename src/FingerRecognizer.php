<?php

namespace Demo;

class FingerRecognizer
{
    public function determineFinger(int $index): int
    {
        $result = $index;

        if ($index > 5) {
            $check = ($index-1) % 8;
            if ($check <= 4)
                $result = $check + 1;
            elseif ($check > 4)
                $result = 9 - $check;
        }
        return $result;
    }
}
