const changeStatus = (employeeId, currentStatus) => {
    let newStatus = currentStatus === '1' ? 'Activate' : 'Deactivate';

    let confirmation = confirm("Are you sure you want to " + currentStatus + " this employee?");

    if (!confirmation) {
        return;
    }

    let statusCell = $('#status-' + employeeId);
    let originalHTML = statusCell.html();

    statusCell.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');

    $.ajax({
        url: 'code/changeStatus.php',
        type: 'POST',
        data: { id: employeeId, status: newStatus },
        success: function(response) {
            if (response.success) {
                statusCell.html(
                    '<a href="#" class="text-' + (newStatus === 'Deactivate' ? 'danger' : 'success') + 
                    '" onclick="changeStatus(' + employeeId + ', \'' + newStatus + '\')">' + newStatus + '</a>'
                );
                document.getElementById("sms").textContent = response.message;
                document.getElementById("sms").style.color = "green";
            } else {
                document.getElementById("sms").textContent = response.message;
                document.getElementById("sms").style.color = "red";
                statusCell.html(originalHTML);
            }
        },
        error: function(xhr, status, error) {
            console.log("Error:", error);
            alert('An error occurred while changing status.');
            statusCell.html(originalHTML);
        }
    });
};