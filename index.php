<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Host Picker Tool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">

    <script async src="https://arc.io/widget.min.js#kDZi7ExM"></script>

</head>
  
  <body>
      <div class="container">

        <h1 class="mt-5">Host Picker</h1>
  
        <div class="mt-3">
          <div>
            <label for="location">Server Location: </label>
      
            <select name="location" id="location" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="any">Any</option>
                <option value="us">US, United States</option>
                <option value="eu">EU, Europe</option>
                <option value="au">AU, Australia</option>
                <option value="nz">NZ, New Zealand</option>
                <option value="na">NA, North America</option>
                <option value="na">SA, South America</option>
                <option value="af">AF, Africa</option>
                <option value="as">Asia</option>
            </select>

          </div>
          <div class="mt-3">
            <label for="cpu">CPU: </label>

            <select name="cpu" id="cpu" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="any">Any</option>
                <option value="ryzen">Ryzen, Any</option>
                <option value="intel">Intel, Any</option>
                <option value="?">Unknown</option>
                <option value="ryzen 5 3600">Ryzen 5 3600</option>
                <option value="ryzen 7 3700x">Ryzen 7 3700X</option>
                <option value="ryzen 7 5800x">Ryzen 7 5800X</option>
                <option value="ryzen 9 3900">Ryzen 9 3900</option>
                <option value="ryzen 9 3950x">Ryzen 9 3950X</option>
                <option value="ryzen 9 3900xt">Ryzen 9 3900XT</option>
                <option value="ryzen 9 5900x">Ryzen 9 5900X</option>
                <option value="ryzen 9 5950x">Ryzen 9 5950X</option>
                <option value="xeon e5-1630v3">Intel Xeon E5-1630v3</option>
                <option value="e5-1650v3">Xeon E5-1650v3</option>
                <option value="e5-1650v4">Xeon E5-1650v4</option>
                <option value="xeon 2276g">Xeon 2276G</option>
                <option value="i7-7700k">Intel i7-7700K</option>
                <option value="i7-6700k">Intel i7-6700K</option>
                <option value="i9-9900k">Intel i9-9900K</option>
                <option value="i9-10900k">Intel i9-10900K</option>
                <option value="xeon 2288g">Intel Xeon 2288G</option>
                <option value="dual xeon x5687">Dual Intel Xeon X5687</option>
                <option value="dual xeon x5677">Dual Intel Xeon X5677</option>
                <option value="dual xeon e5-2690">Dual Intel Xeon E5-2690</option>
              </select>
      
          </div>
          <div class="mt-3">
            <label for="panel">Panel: </label>
      
            <select name="panel" id="panel" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="any">Any</option>
                <option value="pterodactyl">Pterodactyl Panel</option>
                <option value="multicraft">Multicraft Panel</option>
                <option value="wisp">Wisp Panel</option>
              </select>

          </div>
          <div class="mt-3">
          <input class="form-check-input" type="checkbox" id="dedicated-ip" name="dedicated-ip">
          <label for="dedicated-ip"> Dedicated ip</label>
          </div>
          <div class="mt-3">
          <input class="form-check-input" type="checkbox" id="sla" name="sla">
          <label for="sla"><a href="https://www.cio.com/article/2438284/outsourcing-sla-definitions-and-solutions.html#:~:text=A%20service%2Dlevel%20agreement%20(SLA,service%20levels%20not%20be%20achieved." target="_blank"> SLA</a></label>
          </div>
          <div class="form-group row">
            <div class="mt-2 col-sm-2 col-form-label">
                <label for="storage">Min Storage (GB): </label>
                <input class="form-control" type="number" id="storage" name="storage" placeholder="Storage in GB" min="0">
              </div>
              <div class="mt-2 col-sm-2 col-form-label">
                <label for="backups">Backups: </label>
                <input class="form-control" type="number" id="backups" name="backups" placeholder="Backups" min="0">
              </div>
              <div class="mt-2 col-sm-2 col-form-label">
                <label for="budget">Budget: </label>
                <input class="form-control" type="number" id="budget" name="budget" placeholder="Budget in USD" min="0">
              </div>
          </div>
        </div>
      
        <div class="results"></div>
      
        <div class="mt-3">
          <div>
            <button type="button" class="search btn btn-primary">Search</button>
          </div>

          <script src="js/vendor/modernizr-3.11.2.min.js"></script>
      
          <p class="mt-5">Any of the information incorrect or need help? Contact me <a href="https://discord.gg/QRjusA2uAZ">here</a>.</p>
      
          <p class="mt-1">Do NOT base all your information off this website, do your own research into these hosts before using them. All our information is from the corresponding website.</p>
      
          <div class="my-5">
              <ul class="list-group list-group-flush">
                <h5>Added hosts: </h5>
                <li class="list-group-item">
                    <a href="http://pipebombhosting.ml">PipeBombHosting</a>
                </li>
            </ul>
          </div>
        </div>

        <button type="button" class="inner-switch btn btn-primary">Theme Toggle</button>
      </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/lighttheme.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/hosts.js"></script>

  </body>
</html>