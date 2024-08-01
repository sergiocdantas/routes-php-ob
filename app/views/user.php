<!-- Recebe dados do UserController e chama a 'master' para injetar dados e conteúdos -->
<?php $this->layout('master', ['title' => $title]) ?>


<!-- Content para ser inserido na master -->
<h2 class="my-4">Edição de dados de usuário</h2>

<div class="col-lg-6 col-md-12">
    <form action="<?=url('/user/update/12')?>" method="post">
        <div class="form-group row my-2">
            <label for="nomecompleto" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" name="nomecompleto" class="form-control" id="nomecompleto" value="Sérgio Dantas">
            </div>
        </div>
        
        <div class="form-group row my-2">
            <label for="cpf" class="col-sm-2 col-form-label">CPF</label>
            <div class="col-sm-10">
                <input type="text" name="cpf" class="form-control" id="cpf" value="825.427.839-34">
                
            </div>
        </div>
        
        <div class="form-group row my-2">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" value="sergio.dantas@unespar.edu.br">
            
            </div>
        </div>
        
        <div class="form-group row my-2">
            <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
            <div class="col-sm-10">
                <input type="text" name="cidade" class="form-control" id="cidade" value="Apucarana">
            </div>
        </div>
        
        <div class="form-group row my-2">
            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
                <input type="password" name="senha" class="form-control" id="senha" value="123456">
            </div>
        </div>
        
        <div class="form-group row mt-4">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>