function sort(direction) {
    document.getElementById('directionInput').value = direction;
    let sortField = document.getElementById('sortInput').value;

    // Toggle between sorting options if the same direction is clicked twice
    if (direction === 'asc') {
        document.getElementById('sortInput').value = (sortField === 'price' || sortField === 'category') ? 'name' : 'price';
    } else {
        document.getElementById('sortInput').value = (sortField === 'price' || sortField === 'name') ? 'category' : 'price';
    }

    document.getElementById('sortForm').submit();
}
