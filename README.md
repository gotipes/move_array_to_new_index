# move_array_to_new_index
Memindahkan index dari associative array ke posisi index yang ditentukan

### Example

``` php
$datas = [
    "name" => "Go Topes",
    "phone" => "1111111",
    "address" => "Jl. Street",
    "email" => "gotipes@gmail.com"
];

array_move_assoc($datas, "email", 1);

// result
// $datas = [
//    "name" => "Go Topes",
//    "email" => "gotipes@gmail.com"
//    "phone" => "1111111",
//    "address" => "Jl. Street",
// ];

```
