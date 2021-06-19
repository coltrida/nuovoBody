// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#corsiDataTable').DataTable(
      {
          ajax: {
              url: '/api/courses',
              dataSrc: ''
          },
          columns: [
              { data: 'nome' },
              { data: 'descrizione' },
              { data: 'trainer_id' },
              {
                  data: 'id',
                  render: function (data) {
                      return '<a href="#" class="btn btn-danger">'+data+'</a> '
                  }
               },
//would like to add repeating button here
          ]
      }
  );
});
