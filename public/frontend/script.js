async function getData() {
    const data = await fetch('http://127.0.0.1:8000/api/students');
    const records = await data.json();

    let tab = '';
    records.forEach(function(student){
        tab += `
        <tr>
            <td>${student.id}</td>
            <td>${student.name}</td>
            <td>${student.email}</td>
            <td>${student.phone}</td>
            <td>${student.birth_date}</td>
        </tr>
        `;
    });
    document.getElementById('studentTableBody').innerHTML = tab;
}
const formEL = document.getElementById('studentForm');
formEL.addEventListener('submit', event =>{
event.preventDefault();
const formData = new FormData(formEL);
fetch('http://127.0.0.1:8000/api/students', {
    method: 'POST',
    body: formData
})
    .then(data => {
        console.log(data);
        alert('Estudiante agregado con éxito');
        formEL.reset(); // limpia el formulario
        getData(); // vuelve a cargar los datos en la tabla
    })
    .catch(err => {
        console.error('Error:', err);
        alert('Hubo un error al agregar el estudiante');
    });
});
