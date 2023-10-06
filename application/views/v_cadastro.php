<div class="container">
    <div class="row">
        <div class="form-group col-8">
            <label class="col-md-2 control-label" for="Nome">Nome <span>*</span></label>
            <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
        </div>
        <div class="form-group col-4">
            <label class="col-md-2 control-label" for="Nome">CPF <span>*</span></label>
            <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
        </div>
        <div class="form-group col-4">
            <label class="col-md-1 control-label" for="Nome">Nascimento<span>*</span></label>
            <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
        </div>
        <div class="form-group col-8">
            <label class="col-md-1 control-label" for="radios">Sexo <span>*</span></label>
            <div class="mt-2">
                <label class="radio-inline mr-3" for="radios-0">
                    <input name="sexo" id="sexo" value="feminino" type="radio" required>
                    Feminino
                </label>
                <label class="radio-inline mr-3" for="radios-1">
                    <input name="sexo" id="sexo" value="masculino" type="radio">
                    Masculino
                </label>
                <label class="radio-inline mr-3" for="radios-2">
                    <input name="sexo" id="sexo" value="masculino" type="radio">
                    Prefiro não dizer
                </label>
            </div>
        </div>
        <div class="form-group col-6">
            <label class="col-md-2 control-label" for="prependedtext">Telefone celular<span>*</span></label>
            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
        </div>
        <div class="form-group col-6">
            <label class="col-md-1 control-label" for="prependedtext">Telefone fixo</label>
            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
        </div>
        <div class="form-group col-5">
            <label class="col-md-2 control-label" for="prependedtext">Email <span>*</span></label>
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
        </div>
    </div>
</div>