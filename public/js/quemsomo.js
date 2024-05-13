<script>
function showDetails(id) {
    // Aqui você pode enviar uma requisição AJAX para buscar os detalhes do item selecionado
    // e atualizar o conteúdo da div "details" com os dados retornados

    // Exemplo de uso de dados estáticos para fins de demonstração
    var details = {
        titulo_pagina: "Titulo da Pagina",
        titulo_banner: "Titulo do Banner",
        titulo_conteudo: "Titulo do Conteudo",
        img: "caminho/para/imagem.jpg"
    };

    // Atualiza os elementos HTML com os detalhes do item selecionado
    document.getElementById("detail-title").innerText = details.titulo_pagina;
    document.getElementById("detail-banner").innerText = details.titulo_banner;
    document.getElementById("detail-content").innerText = details.titulo_conteudo;
    document.getElementById("detail-image").src = details.img;

    // Exibe a div "details"
    document.getElementById("details").style.display = "block";
}
</script>
