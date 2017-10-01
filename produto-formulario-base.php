		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
		</tr>
		<tr>
			<td>Preco:</td>
			<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"></td>
		</tr>
		<tr>
			<td>Descrição:</td>
			<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td align="left"><input align="left" type="checkbox" <?=$usado?> name="usado" value="true"> Usado</td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td align="left">
				<select name="categoria_id" class="form-control">
					<?php
						foreach ($categorias as $categoria) : 
							$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
							$selecao = $essaEhACategoria ? "selected='selected'" : "";
					?>
						<option value="<?=$categoria['id']?>" <?=$selecao?>>
							<?=$categoria['nome']?>
						</option>
					<?php 
						endforeach
					?>
				</select>
			</td>
		</tr>