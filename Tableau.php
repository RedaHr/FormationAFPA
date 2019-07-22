<?php   include("header.php");   ?>

<h1 class="text-center">Tableaux | HTML 5</h1> 

<table class="table table-striped table-dark">
	<thead>
		<tr>
 			<th scope="col">Prénom</th>
 			<th scope="col">Janvier</th>
 			<th scope="col">Février</th>
 			<th scope="col">Mars</th>
		</tr>
	</thead>
	<tbody>
		<tr>
 			<th scope="row">Pierre</th>
 			<td>65 800</td>
			<td>53 200</td> 
 			<td>46 400</td> 
		</tr>

 		<tr>
 			<th scope="row">Paul</th>
 			<td>88 000</td> 
 			<td>51 500</td> 
 			<td>62 300</td> 
		</tr>

		<tr>
 			<th scope="row">Jacques</th>
 			<td>74 400</td>
 			<td>64 200</td>
 			<td>78 900</td>
		</tr>

		<tr>
 			<th scope="row">Total</th>
 			<td>228 200</td>
 			<td>168 900</td>
 			<td>187 600</td>
		</tr>
	</tbody>

</table>

<?php   include("footer.php"); ?>