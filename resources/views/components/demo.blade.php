<style type="text/css">
  #demo h1{
    color: #C21111;
  }
</style>

<div id="demo">
  <h1 class="text-center">@{{ message }}</h1>
</div>

<script type="text/javascript">
function main(e) {
  console.log('demo scope!');

  var demo = new Vue({
    el: "#demo",
    created: function () {
      var self = this;
      this.fetchData(self);
    },
    data: {
      message: ''
    },
    methods: {
      fetchData: function(self) {
        this.$http.get('message').then(function success(response) {
          self.message = response.body;
        }, function fail(response) {
          console.log(response.statusText);
        });
      }
    }
  });
}
$(document).ready(main);
</script>
