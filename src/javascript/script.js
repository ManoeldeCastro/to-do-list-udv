$(document).ready(function () {
    $('.edit-button').on('click', function () {
      var task = $(this).closest('.task')
      task.find('.progress').addClass('hidden')
      task.find('.task-description').addClass('hidden')
      task.find('.task-actions').addClass('hidden')
      task.find('.edit-task').removeClass('hidden')
    });
  
    $('.progress').on('click', function () {
      if ($(this).is(':checked')) {
        $(this).addClass('done')
      } else {
        $(this).removeClass('done')
      }
    });
  
    $('.progress').on('change', function () {
      const id = $(this).data('task-id');
      const completed = $(this).is(':checked') ? 'true' : 'false';
      $.ajax({
        url: '../../actions/update-progress.php',
        method: 'POST',
        data: { id: id, completed: completed },
        dataType: 'json',
        success: function (response) {
          if (response.success) {
            location.reload();
          } else {
            alert('Erro ao editar a tarefa');
          }
        },
        error: function () {
          alert('Ocorreu um erro');
        }
      });
    });
  
    $('#filter').on('change', function () {
      const filter = $(this).val();
      
      $('.task').each(function () {
        const isCompleted = $(this).find('.progress').is(':checked');
        
        if (filter === 'all') {
          $(this).show();
        } else if (filter === 'completed' && isCompleted) {
          $(this).show();
        } else if (filter === 'not_completed' && !isCompleted) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
  });
  