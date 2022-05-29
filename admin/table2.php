<div class="max-w-[1440px] w-11/12 mx-auto ">
	<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
		<div class="p-4">
			<label for="table-search" class="sr-only">Search</label>
			<div class="relative mt-1">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
							clip-rule="evenodd"></path>
					</svg>
				</div>
				<input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
        </div>
			</div>
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="p-4">
							Sno.
						</th>
						<th scope="col" class="px-6 py-3">
							Product name
						</th>
						<th scope="col" class="px-6 py-3">
							Description          
						</th>
						<!-- <th scope="col" class="px-6 py-3">
							Short note
						</th> -->
						<th scope="col" class="px-6 py-3">
							Size    
						</th>
						<th scope="col" class="px-6 py-3">
							Price   
						</th>
						<th scope="col" class="px-6 py-3">
							Developer
						</th>
						<!-- <th scope="col" class="px-6 py-3">
							Download link
						</th> -->
						<th scope="col" class="px-6 py-3">
							Action
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// use App\Controllers\Products;
					use Helper\Unit;
					use Helper\Buyable\Button;
					// $arr = Products::all();
					// var_dump($arr);
					for($i=0; $i<count($arr['id']); $i++){
					?>
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
						<td class="w-4 p-4">
							<?= ( $i+( ($page-1)*LIMIT )+1 ) ?>		
						</td>
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
							<?= $arr['name'][$i] ?>
						</th>
						<?php $actualLength = strlen( $arr['description'][$i] ); ?>
						<td class="px-6 py-4" <?php if( $actualLength>80 ){ echo 'title="'. $arr['description'][$i] .'"'; } ?> >
						<?= substr($arr['description'][$i],0,80) ?> <?php if( $actualLength>80 ){ echo '...'; } ?>
						</td>
						<!-- <td class="px-6 py-4">
						<?= $arr['short_note'][$i] ?>
						</td> -->
						<td class="px-6 py-4">
						<?= Unit::getSize($arr['size'][$i]) ?>
						</td>
						<td class="px-6 py-4 ">
						<?php
							if($arr['price'][$i]>0){
								echo Button::check($arr['price'][$i], $arr['size'][$i]);
							}else{
								echo 'Free';
							}
						?>
						</td>
						<td class="px-6 py-4">
						<?= $arr['developer'][$i] ?>
						</td>
						<!-- <td class="px-6 py-4 overflow-x-hidden max-w-12">
						<?= $arr['dwn_link'][$i] ?>
						</td> -->
						<td class="px-6 py-4">
							<div class="flex flex-col items-center gap-2">
								<a href="edit-product.php?id=<?= $arr['id'][$i] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
								<a data-id="<?= $arr['id'][$i] ?>" class="delete-btn font-medium text-red-600 dark:text-red-500 hover:underline cursor-pointer">Delete</a>
							</div>
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
		<script>
			offset = <?= ($page-1)*LIMIT ?>
		</script>
		<script src="<?= PATH ?>/src/js/deleteProduct.js" defer></script>
		<!-- <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script> -->
	</div>