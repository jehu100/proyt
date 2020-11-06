<?php 
class LugarControladores
{
	public function SeleccionarLugarControlador()
	{
		$ListaLugar = LugarModelos::ListaLugarModelo();
		foreach ($ListaLugar as $key => $Lugar) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departamento"].'</option>';

		}

	}
}
