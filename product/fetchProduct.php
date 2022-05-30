<?php
require_once('../init.php');
use App\Controllers\Products;

$id_arr = json_decode($_POST['data']);
$str =  '';
/**
 * input type=checkbox is just use to get price and nothing 
 */
foreach($id_arr as $id){
    $arr = Products::where('id','=',$id);
    $str .= '
    <tr class="table-rows">
    <td class="p-2">
        <input type="checkbox" class="w-5 h-5 hidden" value="id-1" data-price="'. $arr["price"][0] .'" checked/>
    </td>
    <td class="p-2">
        <div class="font-medium text-gray-800 dark:text-gray-200">
            '. $arr["name"][0] .'
        </div>
    </td>
    <td class="p-2">
        <div class="text-left font-medium text-green-500">
        &#8377 '. $arr["price"][0] .'
        </div>
    </td>
    <td class="p-2">
        <div class="flex justify-center">
            <button class="del-row-btn" data-id="'. $arr["id"][0] .'">
                <svg class="w-8 h-8 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                </svg>
            </button>
        </div>
    </td>
    </tr>
    ';
}
echo $str;
?>