<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divulgação</title>
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/png">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="stylesheet" href="estilos/catalogo.css">
</head>
<style>
 .categorias{
    margin-top: 30px;
 }
</style>
<body>
    <nav>
        <!--título principal-->
        <h1>One Day</h1>
        <!-- fim do titulo-->
        <ol>
            <!--itens do menu-->
            <li>
                <a href="index.php">inicio</a>
            </li>
            <li>
                <a href="#">catálogo</a>
            </li>
            <li class="caixa"><a href="">docs</a>
                <div class="itens">
                    <a href="#">doc 1</a>
                    <a href="#">doc 2</a>
                </div>
            </li>
            <!-- fim dos itens do menu-->
        </ol>
    </nav>
    <ul class="categorias">
        <li class="ativo">todos</li>
        <li>cura</li>
        <li>livros</li>
    </ul>
    <div class="consumiveis">
        <img src="imagens/item-de-cura.jpg" alt="item de cura" data-filter="cura"> 
        <img src="imagens/item-de-cura-2.jpg" alt="" data-filter="cura">
        <img src="imagens/livro1.jpg" alt="" data-filter="livros">
        <img src="imagens/item-de-cura-3.jpg" alt="" data-filter="cura">
        <img src="imagens/livro3.jpg" alt="" data-filter="livros">
        <img src="imagens/livro2.jpg" alt="" data-filter="livros">
    </div>
            <script>
                const liItem = document.querySelectorAll('ul.categorias li');
                const imgItem = document.querySelectorAll('.consumiveis img');
        
                liItem.forEach(li => {
                    li.onclick = function () {
                        //active
                        liItem.forEach(li => {
                            li.className = "";
                        })
                        li.className = "ativo";
                        //Filter
                        const value = li.textContent;
                        imgItem.forEach(img => {
                            img.style.display = 'none';
                            if (img.getAttribute('data-filter') == value.toLowerCase() || value == "todos") {
                                img.style.display = 'block';
                            }
                        })
                    }
                });
            </script>

</body>

</html>