<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>


<header>
  <h2>Corona Pandamic</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">Effected</a></li>
      <li><a href="#">Deid</a></li>
      <li><a href="#">Cure</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Lockdown</h1>
    <p>A lockdown is a restriction policy for people or community to stay where they are, usually due to specific risks to themselves or to others if they can move and interact freely. The term "stay-at-home" or "shelter-in-place" is often used for lockdowns that affect an area, rather than specific locations.</p>
    <p>The term is used for a prison protocol that usually prevents people, information or objects from leaving an area. The protocol can usually only be initiated by someone in a position of authority.</p>
  </article>
</section>

<footer>
  <p>Stay Home Stay Safe</p>
</footer>

</body>
</html>
