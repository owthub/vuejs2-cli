<template>
  <div>
  <h3>Employee Details</h3>
  <form name="employee_form" method="post">
     <p>
       <label>Name: </label>
       <input type="text" v-model.lazy="employee.name" placeholder="Enter Name"/>
     </p>
     <p>
       <label>Email: </label>
       <input type="email" v-model.lazy="employee.email" placeholder="Enter Email"/>
     </p>
     <p>
       <label>Designation: </label>
       <input type="text" v-model.lazy="employee.designation" placeholder="Enter Designation"/>
     </p>
  </form>
  <div id="details-preview">
     <h3>Employee Details preview</h3>
     <p>Name: {{ employee.name }}</p>
     <p>Email: {{ employee.email }}</p>
     <p>Designation: {{ employee.designation }}</p>
  </div>
  </div>
</template>

<script>

export default {
  data () {
    return {
       employee:{
          name:"",
          email:"",
          designation:""
       }
    }
  },
  methods:{

  }
}
</script>
