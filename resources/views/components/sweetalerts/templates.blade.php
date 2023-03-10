<template id="form-confirmation">
  <swal-title>
    Os campos foram preenchidos corretamente ?
  </swal-title>
  
  <swal-icon type="question" color="blue"></swal-icon>
  
  <swal-button type="cancel">
    Cancelar
  </swal-button>
  
  <swal-button type="confirm">
    Confirmar
  </swal-button>
  
  <swal-param name="allowEscapeKey" value="false" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
  <swal-function-param
    name="didOpen"
    value="popup => console.log(popup)" />
</template>