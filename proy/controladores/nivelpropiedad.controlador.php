<?php 
class NivelControladores
{
	public function SeleccionarNivelControlador()
	{
		$ListaNivel = NivelModelos::ListaNivelModelo();
		foreach ($ListaNivel as $key => $Nivel) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Nivel["idpropiedad"].'">'.$Nivel["nivel"].'</option>';

		}

	}
}