<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title><?php echo $title; ?></title>
</head>
<body>
<header>
    <div id="logo">
      <a class="logo-link" href="index.php" title="Alex Lockwood, click to go back to homepage" rel="homepage">
      <span class="big-emoji">&#129300;</span>&nbsp;Alex Lockwood</a>
    </div>
    <nav>
      <select title="Site Navigation" name="nav-menu" id="nav-menu">
        <option value="0">&#8942; Menu</option>
        <optgroup label="Where to?">
            <option value="index.php">Home</option>
            <option value="page2.php">About</option>
            <option value="google.html">Projects</option>
            <option value="index.html">Contact</option>
        </optgroup>
      </select>
      <script type="text/javascript">
        var urlmenu = document.getElementById('nav-menu');
        urlmenu.onchange = function() {
        document.location.href = this.value;
        };
      </script>
    </nav>    
  </header>