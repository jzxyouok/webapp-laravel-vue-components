<style type="text/css">
  #demo2 h1{
    color: #308C36;
  }
</style>

<div id="demo2">
  <h1 class="text-center">@{{ message }}</h1>
</div>

<script type="text/javascript">
function main(e) {
  console.log('demo2 scope!');

  var demo = new Vue({
    el: "#demo2",
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
