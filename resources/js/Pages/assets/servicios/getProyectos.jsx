export function getProyectos() {

    let apiURL = `http://localhost/api/proyectos`;

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
        console.error("Error en la petición, credenciales no válidos");
      });
  }
