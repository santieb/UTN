$(document).ready(() => {

  $("#suma").click(() => {
    let n1 = $("#num1").val()
    let n2 = $("#num2").val()
    let res = parseFloat(n1) + parseFloat(n2)
    $("#res").val(res)
  })

  $("#resta").click(() => {
    let n1 = $("#num1").val()
    let n2 = $("#num2").val()
    let res = parseFloat(n1) - parseFloat(n2)
    $("#res").val(res)
  })

  $("#multi").click(() => {
    let n1 = $("#num1").val()
    let n2 = $("#num2").val()
    let res = parseFloat(n1) * parseFloat(n2)
    $("#res").val(res)
  })

  $("#division").click(() => {
    let n1 = $("#num1").val()
    let n2 = $("#num2").val()
    let validacion = esCero(parseFloat(n2))

    if (validacion) {
      let res = parseFloat(n1) / parseFloat(n2)
      $("#res").val(res)
    }
    else { 
      alert("no se puede dividir por cero")
      $("#num2").val("")
    }
  })

  $("#reset").click(() => {
    $("#num1").val("")
    $("#num2").val("")
    $("#res").val("")
  })
})

const esCero = (n2) => {
  if(n2 == 0) return false
  else return true
}
