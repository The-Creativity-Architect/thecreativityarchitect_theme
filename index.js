var sass = import("sass");
var Fiber = import("fibers");
var fa = import("fontawesome");

sass.render({
  file: "input.scss",
  importer: function(url, prev, done) {
    // ...
  },
  fiber: Fiber
}, function(err, result) {
  // ...
});
