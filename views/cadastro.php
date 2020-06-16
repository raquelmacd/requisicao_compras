<div class="row">
    <div class="col-12">
        <form action="salvar" method="post">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" readonly>
          </div>
          <div class="form-group">
            <label for="solicitante">Solicitante</label>
            <input type="text" class="form-control" id="solicitante" name="solicitante" >
          </div>
          <div class="form-group">
            <label for="motivo">Motivo</label>
            <input type="text" class="form-control" id="motivo" name="motivo" placeholder="Exemplo: Estoque em falta...">
          </div>

            <button type="submit" class="btn btn-primary">Inserir Produtos</button>
            <a class="btn btn-primary" href="dash">Voltar</a>
        </form>  
    </div>
</div>
