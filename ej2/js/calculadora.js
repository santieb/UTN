$(document).ready(() => {

  $("#suma").click(() => {
    var n1 = $("#num1").val()
    var n2 = $("#num2").val()
    var res = parseFloat(n1) + parseFloat(n2)
    $("#res").val(res)
  })

  $("#resta").click(() => {
    var n1 = $("#num1").val()
    var n2 = $("#num2").val()
    var res = parseFloat(n1) - parseFloat(n2)
    $("#res").val(res)
  })

  $("#multi").click(() => {
    var n1 = $("#num1").val()
    var n2 = $("#num2").val()
    var res = parseFloat(n1) * parseFloat(n2)
    $("#res").val(res)
  })

  $("#division").click(() => {
    var n1 = $("#num1").val()
    var n2 = $("#num2").val()
    var validacion = esCero(parseFloat(n2))

    if (validacion) {
      var res = parseFloat(n1) / parseFloat(n2)
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
