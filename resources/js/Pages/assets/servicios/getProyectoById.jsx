export function getProyectoById(id) {

    let apiURL = `http://localhost/api/proyectos/${id}`;

    return fetch(apiURL, {
       method: 'GET',
       headers: new Headers({
        'Content-Type' : 'application/json'
       })
    }).then(response => {
        const data = response.json();
        return data
      })
      .catch(error => {
        console.error("Error en la petición");
      });
  }
