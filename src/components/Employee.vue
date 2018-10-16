<template>
  <div>
     <h3> Employee Form </h3>
     <form>
         <p>
            <label>Name: </label>
            <input type="text" name="txtEmployeeName"/>
         </p>
         <p>
            <label>Designation: </label>
            <input type="text" name="txtEmployeeClass"/>
         </p>
         <p>
            <label>Mobile No: </label>
            <input type="text" name="txtEmployeeMobile"/>
         </p>
         <p>
           <button>Submit</button>
         </p>
     </form>
  </div>
</template>

<script>

export default {
  data () {
    return {

    }
  }
}
</script>
