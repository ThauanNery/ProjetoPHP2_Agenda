$(document).ready(function() {
    let table = new DataTable('#contacts-table', {
        "ordering": true,
        "paging": true,
        "searching": true,
        "pageLength": 5, // Define o padrão inicial para 5 itens por página
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]], // Define opções de itens por página
        columnDefs: [
            { "orderable": true, "targets": 0 }, // Habilitar ordenação apenas para a primeira coluna
            { "orderable": false, "targets": '_all' } // Desabilitar ordenação para todas as outras colunas
        ],
        "oLanguage": {
            "sEmptyTable": "Nenhum registro encontrado na tabela",
            "sInfo": "Mostrar _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrar 0 até 0 de 0 Registros",
            "sInfoFiltered": "(Filtrar de _MAX_ total registros)",
            "sLengthMenu": "Mostrar _MENU_ registros por página", // Altera a frase de exibição
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
});
