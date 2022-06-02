const movies = [
  {
    id: '1',
    nombre: 'Breaking bad',
    dia: 'lunes',
    horario: '18:00'
  },
  {
    id: '2',
    nombre: 'Stranger things',
    dia: 'martes',
    horario: '18:00'
  },
  {
    id: '3',
    nombre: 'Game of Throne',
    dia: 'miercoles',
    horario: '18:00'
  },
  {
    id: '4',
    nombre: 'The Walking Dead',
    dia: 'jueves',
    horario: '18:00'
  },
]

const getMovie = () => {
  const id = $("#movie").val()
  
  const movie = movies.find(movie => movie.id === id)

  $("#res").val(`dia: ${movie.dia} Horario: ${movie.horario}`)
}