      <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts">Blog</a>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li> --}}
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"> <a class="nav-link" href="/posts/create">Create Post </a></li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
          </ul>

        </div>
      </nav>
      <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("navbarNav");
        var btns = header.getElementsByClassName("nav-link");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }
        </script>