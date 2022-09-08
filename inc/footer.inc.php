<script type="text/javascript" src="vendor/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="vendor/popper.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap-5.2.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/jquery-ui-1.13.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="vendor/DataTables/datatables.min.js"></script>


<script type="text/javascript" src="vendor/jszip/dist/jszip.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="vendor/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>







</body>
</html>

<!--  Padrão de Exibindo de 1 a 10 de registros -->
<script type="text/javascript">    
$(document).ready( function () {
  $('#tabela_fornecedor').DataTable({      
  dom: 'Bfrtip',
  buttons: [
	'excelHtml5'
  ],
  "order": [
	[0, "asc"]
  ],  
  "oLanguage": {
	"sProcessing": "Aguarde enquanto os dados são carregados ...",
	"sLengthMenu": "Mostrar _MENU_ registros por pagina",
	"sZeroRecords": "Nenhum registro encontrado",
	"sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
	"sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
	"sInfoFiltered": "",
	"sSearch": "Procurar",
	"oPaginate": {
	  "sFirst": "Primeiro",
	  "sPrevious": "Anterior",
	  "sNext": "Próximo",
	  "sLast": "Último"
	}


  }
});
});
</script>