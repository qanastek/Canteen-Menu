<?php

echo ("

	<div class='meal_table'>

		<span>Valable du ".GetStartDate()." au ".GetEndDate()."</span>

		<table class='tablepress1' role='grid' style='padding-top: 1%;'>

			<thead>
				<tr class='row-1 odd' role='row'>
					<th class='column-1 sorting_disabled' rowspan='1' colspan='1' style='width: auto;'>Lundi</th>
					<th class='column-2 sorting_disabled' rowspan='1' colspan='1' style='width: auto;'>Mardi</th>
					<th class='column-3 sorting_disabled' rowspan='1' colspan='1' style='width: auto;'>Mercredi</th>
					<th class='column-4 sorting_disabled' rowspan='1' colspan='1' style='width: auto;'>Jeudi</th>
					<th class='column-5 sorting_disabled' rowspan='1' colspan='1' style='width: auto;'>Vendredi</th>
				</tr>
			</thead>

			<tbody class='row-hover'>
				<tr class='row-2 even' role='row'>
					<td class='column-1'>".get_option('cm_c1_r1')."</td>
					<td class='column-2'>".get_option('cm_c2_r1')."</td>
					<td class='column-3'>".get_option('cm_c3_r1')."</td>
					<td class='column-4'>".get_option('cm_c4_r1')."</td>
					<td class='column-5'>".get_option('cm_c5_r1')."</td>
				</tr>
				<tr class='row-3 odd' role='row'>
					<td class='column-1'>".get_option('cm_c1_r2')."</td>
					<td class='column-2'>".get_option('cm_c2_r2')."</td>
					<td class='column-3'>".get_option('cm_c3_r2')."</td>
					<td class='column-4'>".get_option('cm_c4_r2')."</td>
					<td class='column-5'>".get_option('cm_c5_r2')."</td>
				</tr>
				<tr class='row-4 even' role='row'>
					<td class='column-1'>".get_option('cm_c1_r3')."</td>
					<td class='column-2'>".get_option('cm_c2_r3')."</td>
					<td class='column-3'>".get_option('cm_c3_r3')."</td>
					<td class='column-4'>".get_option('cm_c4_r3')."</td>
					<td class='column-5'>".get_option('cm_c5_r3')."</td>
				</tr>
			</tbody>

		</table>

	</div>

");