const reset = () => {
  $("#date").val("")
  $("#res").val("")
}

const calcularEdad = () => {
  const fechaNacimiento = $("#date").val()
  const date = new Date(fechaNacimiento)
  const dateNow = new Date()

  let result = dateNow-date
  result = result/(1000*3600*24)
  $("#res").val(Math.trunc(result/365))
}
