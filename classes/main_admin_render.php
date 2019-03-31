<div class="main_cm">

<h1 style="padding-bottom: 1.5%;">Menu de la semaine</h1>

<?php
	settings_errors();
	$date_start = GetCurrentStartDate();
	$date_end = GetCurrentEndDate();
?>

<form method="post" action="options.php">
	<?php

		/**
		*	@since 1.0.0
		*	@var $option_group  A settings group name. This should match the group name used in register_setting().
		*/
		settings_fields('cm_settings_group');

		// do_settings_sections('settings_canteen_menu'); // Nom de la page mere
		echo ("
			<div class='form-group'>

				Valable du <input type='date' name='start_cm' value='$date_start'> au <input type='date' name='end_cm' value='$date_end'>.

				<br><br>

				<table class='table table-striped aligned_table table-responsive'>

				  <thead>
				    <tr>
						<th scope='col'></th>
						<th scope='col'>Lundi</th>
						<th scope='col'>Mardi</th>
						<th scope='col'>Mercredi</th>
						<th scope='col'>Jeudi</th>
						<th scope='col'>Vendredi</th>
				    </tr>
				  </thead>

				  <tbody>

				    <tr>
						<th scope='row'>Entrée</th>
						<td>
							<textarea class='form-control' name='cm_c1_r1'>".get_option('cm_c1_r1')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c2_r1'>".get_option('cm_c2_r1')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c3_r1'>".get_option('cm_c3_r1')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c4_r1'>".get_option('cm_c4_r1')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c5_r1'>".get_option('cm_c5_r1')."</textarea>
						</td>
				    </tr>

				    <tr>
				    	<th scope='row'>Plat</th>
						<td>
							<textarea class='form-control' name='cm_c1_r2'>".get_option('cm_c1_r2')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c2_r2'>".get_option('cm_c2_r2')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c3_r2'>".get_option('cm_c3_r2')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c4_r2'>".get_option('cm_c4_r2')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c5_r2'>".get_option('cm_c5_r2')."</textarea>
						</td>
				    </tr>

				    <tr>
						<th scope='row'>Dessert</th>
						<td>
							<textarea class='form-control' name='cm_c1_r3'>".get_option('cm_c1_r3')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c2_r3'>".get_option('cm_c2_r3')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c3_r3'>".get_option('cm_c3_r3')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c4_r3'>".get_option('cm_c4_r3')."</textarea>
						</td>
						<td>
							<textarea class='form-control' name='cm_c5_r3'>".get_option('cm_c5_r3')."</textarea>
						</td>
				    </tr>

				  </tbody>

				</table>

			</div>
	    ");

		/**
		*	@since 1.0.0
		*	@var $text The text of the button
		*	@var $type The type of button. Common values: primary, secondary, delete.
		*/
		submit_button(
			'Sauvegarder',
			'primary'
		);

		/*https://www.youtube.com/watch?v=pTegcB9zMSM*/

	?>
</form>

</div>