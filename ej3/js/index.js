$(document).ready(() => {

  $("#button").click(() => {
    const nota1 = $("#nota1").val()
    const nota2 = $("#nota2").val()
    const asist = $("#asist").val()
    const res = calcularEstado(nota1, nota2, asist)
    $("#res").val(res)
  })

  $("#reset").click(() => {
    $("#nota1").val("")
    $("#nota2").val("")
    $("#res").val("")
  })

})


const calcularEstado = (nota1, nota2, asistencia) => {
  if (asistencia < 60) return 'libre'

  if (nota1 >= 6 && nota2 >= 6) return 'aprobado'

  if (nota1 >= 4 && nota2 >= 4 ) return 'regular'

  else return 'desaprobado'
}