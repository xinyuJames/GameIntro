document.getElementById('myForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value.trim();
    var game = document.getElementById('game').value.trim();
    var age = document.getElementById('age').value.trim();
    var feedback = document.getElementById('feedback').value.trim();

    if (name === '' || game === '' || age === '' || feedback === '') {
        event.preventDefault(); // Prevent form submission
        alert('Please fill in all fields.');
    }
});
