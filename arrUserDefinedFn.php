<?php

class ArrayUserDefinedFunction
{

    // Custom callback function for array_diff_ukey()
    public function compareKeys($key1, $key2)
    {
        if ($key1 === $key2) {
            return 0;
        }
        return ($key1 > $key2) ? 1 : -1;
    }

    // Custom callback function for array_diff_uassoc()
    public function compareKeysValues($valueK1, $valueK2)
    {
        if ($valueK1 === $valueK2) {
            return 0;
        }
        return ($valueK1 > $valueK2) ? 1 : -1;
    }


    // Custom array_diff_ukey() function
    public function arrayDiffUKey($arr1, $arr2)
    {
        return array_diff_ukey($arr1, $arr2, [$this, 'compareKeys']);
    }

    // Custom array_diff_uassoc() function
    public function arrayDiffUAssoc($arr1, $arr2)
    {
        return array_diff_uassoc($arr1, $arr2, [$this, 'compareKeysValues']);
    }
}

$obj = new ArrayUserDefinedFunction();

//Two arrays which are storing keys and values
$arr1 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

$arr2 = [
    'a' => 1,
    'b' => 4,
    'd' => 5,
];

echo "<pre>";
echo "<h3>User defined function of array_diff_uassoc() Function</h3>";
$diffKeys = $obj->arrayDiffUKey($arr1, $arr2);
print_r($diffKeys);

echo "<h3>User defined function of array_diff_ukey() Function</h3>";
$diffKeysValues = $obj->arrayDiffUAssoc($arr1, $arr2);
print_r($diffKeysValues);
