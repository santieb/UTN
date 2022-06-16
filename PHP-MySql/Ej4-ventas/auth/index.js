const validate = () => {
  pass1 = $("#pass1").val()
  pass2 = $("#pass2").val()

  if ( pass1 === pass2 )  return

  alert(`${pass1} ${pass2}`)
}