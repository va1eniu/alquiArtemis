const API_URL = 'http://localhost/api'; // Reemplaza esto con la URL correcta de tu API

async function getData(endpoint) {
    const response = await fetch(`${API_URL}/${endpoint}`);
    const data = await response.json();
    return data;
}

async function postData(endpoint, payload) {
    const response = await fetch(`${API_URL}/${endpoint}`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
    });
    const data = await response.json();
    return data;
}

async function updateData(endpoint, id, payload) {
    const response = await fetch(`${API_URL}/${endpoint}/${id}`, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
    });
    const data = await response.json();
    return data;
}

async function deleteData(endpoint, id) {
    const response = await fetch(`${API_URL}/${endpoint}/${id}`, {
        method: 'DELETE'
    });
    const data = await response.json();
    return data;
}

async function fetchUsuarios() {
    try {
        const usuarios = await getData('usuarios');
        console.log(usuarios);
    } catch (error) {
        console.error(error);
    }
}

// Llama a la función para obtener los usuarios
fetchUsuarios();