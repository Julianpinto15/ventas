 <div class="container">
 <div class="search-container-buscador ">
    <div class="search-group-buscador">
        <i class="bi bi-search search-icon-buscador "></i>
        <input type="text" id="searchInput-buscador" class="search-input-buscador" placeholder="Buscar usuarios...">
     
    </div>
</div>
        <div class="form-rest mb-6 mt-6"></div>
        
        <?php 
        use app\controllers\userController;
        $insUsuario = new userController();
        echo $insUsuario->listarUsuarioControlador($url[1], 15, $url[0], ""); 
        ?>
 </div>