document.addEventListener("DOMContentLoaded", ()=> {
    const tabela = new TabelaInterativa({
        tabelaId: "tabela-exercicios",
        campoFiltroId: "campo-filtro",
    }); 
    tabela.iniciar();
});