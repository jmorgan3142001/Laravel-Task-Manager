// import './bootstrap';
// import Sortable from './sortablejs';


document.addEventListener('DOMContentLoaded', function() {
    var taskTable = document.getElementById('task-table');

    new Sortable(taskTable.getElementsByTagName('tbody')[0], {
        animation: 150,
        onEnd: function(event) {
            var taskRows = Array.from(taskTable.getElementsByTagName('tr'));
            var taskIds = taskRows.map(function(row) {
                return row.getAttribute('data-id');
            });

            // Send AJAX request to update task priorities
            axios.post('/tasks/reorder', { task_ids: taskIds })
                .then(function(response) {
                    // Handle success response
                })
                .catch(function(error) {
                    // Handle error response
                });
        }
    });
});