<template>
  <div>
    <slot>This is slot default message</slot>
     <form>
        <div id="form-header">
          <slot name="form-header"></slot>
        </div>
        <div id="form-elements">
          <slot name="form-elements"></slot>
        </div>
        <div id="form-button">
           <slot name="form-button"></slot>
        </div>
        <div id="form-footer">
           <slot name="form-footer"></slot>
        </div>
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
