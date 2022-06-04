<?php
require_once("init.php");
use App\Controllers\Products;
use Helper\Msg;
if(!isset($_SESSION['id'])){
  Msg::set('user_err','You should login first');
  header('location: login.php');
}
require_once('inc/header.php');
?>

<section class="antialiased bg-gray-100 dark:bg-gray-800 text-gray-200 h-screen px-4" >
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white dark:bg-gray-700 shadow-lg rounded-sm border border-gray-200 dark:border-gray-600">
            <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-500">
                <div class="font-semibold text-gray-800 dark:text-gray-400 ">Manage Carts</div>
            </header>

            <div class="overflow-x-auto p-3">
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50 dark:bg-gray-700">
                        <tr >
                            <th></th>
                            <th class="p-2">
                                <div class="font-semibold text-left ">Product Name</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-left">Total</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Action</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-gray-100">
                    </tbody>
                </table>
            </div>

            <!-- total amount -->
            <div class="flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4">
                <div>Total</div>
                <div class="text-blue-600">&#8377 <span id="total-amt"></span></div>
            </div>
            <button id="btn-cart-buy" class="py-2 px-4 m-4 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">Buy</button>            
            <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
            <!-- <div class="flex justify-end">
                <input type="text" class="border border-black bg-gray-50" />
            </div> -->
        </div>
    </div>
</section>

<script>    
    window.onload = ()=>{
        a = [];
        store = JSON.parse(localStorage.getItem('cart'));
        if(store != null){

        
        store.forEach( e =>{
            a.push(e);
        });
        const params = new URLSearchParams({data: JSON.stringify(a)});  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            res = this.responseText;
            document.querySelector('tbody').innerHTML = res;
            run();
        }
        };
        xmlhttp.open("POST","product/fetchProduct.php",true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(params.toString());
        /**
         * RUN used to delete items from cart
         */
        function run(){
            d = document.querySelectorAll('input[type="checkbox"]');
            total=0;
            //if no items added ,then show message
            if(d.length == 0){
                document.querySelector('tbody').innerHTML = '<tr class="text-blue-600"><td></td> <td colspan="3" class="text-2xl text-center p-8">No Items Added</td></tr>';
            }
            str='';
            for(i=0; i<d.length; i++){
                total += Number(d[i].dataset.price);
                str += `<input type="hidden" name="prod_id[]" value="${d[i].dataset.id}">`;
            }
            document.querySelector('#input-for-buy').innerHTML = str;
            
            document.querySelector('#total-amt').innerText = total;

            delBtns = document.querySelectorAll('.del-row-btn');
            rows = document.querySelectorAll('.table-rows');
            for(i=0; i < delBtns.length; i++ ){
                delBtns[i].addEventListener('click',async function(e){
                    this.parentElement.parentElement.parentElement.remove();
                    array = JSON.parse(localStorage.getItem('cart'));
                    // console.log(array.indexOf(4))
                    index = array.indexOf(this.dataset.id);
                    // console.log('iindex is  '+index);
                    if(index !== -1){
                        array.splice(index,1)
                    }
                    localStorage.setItem('cart', JSON.stringify(array));
                    run();
                });
            }
        }
        }else{
            document.querySelector('tbody').innerHTML = '<tr class="text-blue-600"><td></td> <td colspan="3" class="text-2xl text-center p-8">No Items Added</td></tr>';
        }
    }
</script>
<script src="<?= PATH ?>/src/js/modal.js" defer></script>
<div id="form-trans" class="hidden absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-fit p-4 border-2 border-gray-500 rounded-xl ">
<form id="form-buy-all" action="inc/transactionAll.php" method="post" class="flex flex-col gap-4 my-4">
	<h2>Payment details</h2>
	<div id="input-for-buy"></div>
	<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="Credit Card Number" maxlength="12" placeholder="Card number" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
	<div class="">
		<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="should be a date" maxlength="2" placeholder="MM" class="w-12 p-2 border-2 border-blue-300 rounded text-sky-700" required>
		<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="should be a date" maxlength="4" placeholder="YYYY" class="w-16 p-2 border-2 border-blue-300 rounded text-sky-700" required>
	</div>
	
	<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="CVV" maxlength="4" placeholder="CVV" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
	<input type="text" inputmode="numeric" pattern="^[0-9]+$" title="Zip code" maxlength="6" placeholder="Zip code" class="p-2 border-2 border-blue-300 rounded text-sky-700" required>
	<input type="submit" value="submit" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl">
</form>
</div>
<?php
require_once('inc/footer.php');
?>