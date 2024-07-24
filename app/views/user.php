<!-- Recebe dados do UserController e chama a 'master' para injetar dados e conteúdos -->
<?php $this->layout('master', ['title' => $title]) ?>

<!-- Content para ser inserido na master -->
<h2 class="my-4">Página de usuário</h2>
<p><?=$this->e($name)?></p>