<div class="row">
    <div class="col-12">
        <form action="salvar" method="post">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" readonly>
          </div>
          <div class="form-group">
            <label for="solicitante">Solicitante</label>
            <input type="text" class="form-control" id="solicitante" name="solicitante" placeholder="Quem está fazendo o pedido?">
          </div>
          <div class="form-group">
            <label for="motivo">Motivo</label>
            <input type="text" class="form-control" id="motivo" name="motivo" placeholder="Exemplo: Estoque em falta...">
          </div>
            <div class="form-group">
            <label for="status">Status</label>
                <select type="text" class="form-control" id="status" name="status">
                    <option value="0">Pendente</option>
                    <option value="1">Finalizada</option>
                </select>
          </div>
            <div class="form-group">
                <label for="produto">Produto</label>    
                <input type="text" name="produto" class="form-control">

                <label for="qtde">Quantidade</label>
                <input type="number" name="qtde" id="qtde"  class="form-control" min="1">
                
                <label for="valor">Valor</label>
                <input type="text"  id="valor" name="valor" value="25"  class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-primary" href="dash">Voltar</a>
        </form>  
    </div>
</div>
<script>

</script>