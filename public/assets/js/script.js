function editRow(button) {
    const row = button.parentElement.parentElement;
    const cells = row.getElementsByTagName('td');
    const id = cells[0].innerText;
    const name = cells[1].innerText;
    const email = cells[2].innerText;
    alert(`Edit row with ID: ${id}, Name: ${name}, Email: ${email}`);
    // Add your edit functionality here
}

function deleteRow(button) {
    const row = button.parentElement.parentElement;
    const table = row.parentElement;
    table.removeChild(row);
    alert('Row deleted');
}
